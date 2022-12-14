<?php
class Newsletter
{
    private static $email;
    private static $datetime = null;
    private static $valid = true;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function register($email) {
        
        if (!empty($_POST)) {
            
            self::$email    = $_POST['signup-email'];
            self::$datetime = date('Y-m-d H:i:s');

            if (empty(self::$email)) {
                
                $status  = "error";
                $message = "Поле email адреса не должно быть пустым.";
                self::$valid = false;
                
            } else if (!filter_var(self::$email, FILTER_VALIDATE_EMAIL)) {
                
                $status  = "error";
                $message = "Вы должны заполнить поле действительным адресом электронной почты";
                self::$valid = false;
                
            }

            if (self::$valid) {
                
                $pdo = Database::connect();
                
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $existingSignup = $pdo->prepare("SELECT COUNT(*) FROM ls_subscribe WHERE email='$email'");
                
                $existingSignup->execute();
                
                $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

                if (!$data_exists) {
                    $sql = "INSERT INTO ls_subscribe (email, addedOn) VALUES (:email, :datetime)";
                    $q = $pdo->prepare($sql);

                    $q->execute(
                        array(':email' => self::$email, ':datetime' => self::$datetime));

                    if ($q) {
                        $status  = "success";
                        $message = "Вы успешно подписаны";
                    } else {
                        $status  = "error";
                        $message = "Произошла ошибка. Пожалуйста, попробуйте еще раз";
                    }
                } else {
                    $status  = "error";
                    $message = "Это email уже подписан";
                }
            }

            $data = array(
                'status'  => $status,
                'message' => $message
            );

            echo json_encode($data);

            Database::disconnect();
        }
    }
}