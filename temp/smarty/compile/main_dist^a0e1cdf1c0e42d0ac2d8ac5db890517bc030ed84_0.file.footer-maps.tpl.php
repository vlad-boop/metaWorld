<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-02 13:45:31
  from 'C:\xampp\htdocs\themes\dist\templates\footer-maps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b76f5b493f31_96203239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0e1cdf1c0e42d0ac2d8ac5db890517bc030ed84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\footer-maps.tpl',
      1 => 1622632989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b76f5b493f31_96203239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo smarty_function_fetch_section(array('assign'=>'main','section'=>1),$_smarty_tpl);?>


<footer class="footer">
    <div class="container footer-container">
            <div class="footer__top">
                <div class="footer__row">
                    <div class="footer__desc">
                     <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['main']->value['content_two'],"<p>",'<h2 class="footer__title title">'),'</p>','</h2>');?>

                      <div class="footer__social">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#" class="footer__social-link">
                          <svg width="26" height="16" viewBox="0 0 26 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.9738 1.56854C25.1488 0.987285 24.9737 0.561035 24.1462 0.561035H21.405C20.7075 0.561035 20.3888 0.929786 20.2137 1.33479C20.2137 1.33479 18.82 4.73354 16.845 6.93729C16.2075 7.57854 15.9163 7.78104 15.5688 7.78104C15.395 7.78104 15.1425 7.57854 15.1425 6.99729V1.56854C15.1425 0.871035 14.9413 0.561035 14.36 0.561035H10.0525C9.6175 0.561035 9.355 0.883535 9.355 1.19104C9.355 1.85104 10.3425 2.00354 10.4438 3.86354V7.89854C10.4438 8.78229 10.285 8.94354 9.935 8.94354C9.00625 8.94354 6.74625 5.53229 5.405 1.62729C5.14375 0.868535 4.88 0.562286 4.18 0.562286H1.44C0.65625 0.562286 0.5 0.931036 0.5 1.33604C0.5 2.06354 1.42875 5.66354 4.82625 10.4248C7.09125 13.676 10.28 15.4385 13.185 15.4385C14.9262 15.4385 15.1413 15.0473 15.1413 14.3723V11.9148C15.1413 11.1323 15.3075 10.9748 15.8587 10.9748C16.2638 10.9748 16.9612 11.1798 18.5875 12.746C20.445 14.6035 20.7525 15.4373 21.7963 15.4373H24.5363C25.3188 15.4373 25.71 15.046 25.485 14.2735C25.2388 13.5048 24.3512 12.386 23.1737 11.0623C22.5338 10.3073 21.5775 9.49479 21.2862 9.08854C20.88 8.56479 20.9975 8.33354 21.2862 7.86854C21.2875 7.86979 24.6263 3.16729 24.9738 1.56854Z"/>
                            </svg> 
                        </a>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#" class="footer__social-link">
                          <svg width="26" height="20" viewBox="0 0 26 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5412 4.99618C22.5575 5.21493 22.5575 5.43243 22.5575 5.64993C22.5575 12.3062 17.4912 19.9762 8.2325 19.9762C5.38 19.9762 2.73 19.1499 0.5 17.7149C0.905 17.7612 1.295 17.7774 1.71625 17.7774C3.98249 17.7829 6.18456 17.0251 7.9675 15.6262C6.91678 15.6072 5.89822 15.2605 5.05405 14.6346C4.20988 14.0087 3.58223 13.1348 3.25875 12.1349C3.57 12.1812 3.8825 12.2124 4.21 12.2124C4.66125 12.2124 5.115 12.1499 5.53625 12.0412C4.39595 11.811 3.37059 11.1929 2.63452 10.292C1.89845 9.39121 1.49712 8.26324 1.49875 7.09993V7.03743C2.17 7.41118 2.94875 7.64493 3.77375 7.67618C3.08261 7.21692 2.5159 6.59371 2.12417 5.86217C1.73245 5.13063 1.52789 4.3135 1.52875 3.48368C1.52875 2.54868 1.7775 1.69118 2.21375 0.943682C3.47892 2.49996 5.05688 3.77313 6.84542 4.68076C8.63396 5.58838 10.5932 6.1102 12.5963 6.21243C12.5188 5.83743 12.4712 5.44868 12.4712 5.05868C12.4709 4.39738 12.6009 3.74251 12.8538 3.13148C13.1068 2.52046 13.4776 1.96528 13.9452 1.49767C14.4128 1.03006 14.968 0.659196 15.5791 0.40628C16.1901 0.153364 16.845 0.0233537 17.5062 0.0236823C18.9562 0.0236823 20.265 0.631182 21.185 1.61368C22.3122 1.3957 23.3932 0.98421 24.38 0.397432C24.0043 1.56095 23.2172 2.54756 22.1663 3.17243C23.166 3.05841 24.143 2.7955 25.065 2.39243C24.3764 3.39631 23.5232 4.27661 22.5412 4.99618Z"/>
                            </svg> 
                        </a>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#" class="footer__social-link">
                          <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9988 9.22119C13.4658 9.22119 11.9956 9.83015 10.9117 10.9141C9.82771 11.9981 9.21875 13.4682 9.21875 15.0012C9.21875 16.5341 9.82771 18.0043 10.9117 19.0883C11.9956 20.1722 13.4658 20.7812 14.9988 20.7812C16.5317 20.7812 18.0019 20.1722 19.0858 19.0883C20.1698 18.0043 20.7788 16.5341 20.7788 15.0012C20.7788 13.4682 20.1698 11.9981 19.0858 10.9141C18.0019 9.83015 16.5317 9.22119 14.9988 9.22119ZM14.9988 18.7549C14.0029 18.7549 13.0478 18.3593 12.3436 17.6551C11.6394 16.9509 11.2438 15.9958 11.2438 14.9999C11.2438 14.0041 11.6394 13.049 12.3436 12.3448C13.0478 11.6406 14.0029 11.2449 14.9988 11.2449C15.9946 11.2449 16.9497 11.6406 17.6539 12.3448C18.3581 13.049 18.7538 14.0041 18.7538 14.9999C18.7538 15.9958 18.3581 16.9509 17.6539 17.6551C16.9497 18.3593 15.9946 18.7549 14.9988 18.7549Z"/>
                            <path d="M21.0075 10.3561C21.7517 10.3561 22.355 9.75284 22.355 9.00863C22.355 8.26443 21.7517 7.66113 21.0075 7.66113C20.2633 7.66113 19.66 8.26443 19.66 9.00863C19.66 9.75284 20.2633 10.3561 21.0075 10.3561Z"/>
                            <path d="M25.6663 7.6386C25.3769 6.89133 24.9347 6.21271 24.3679 5.64618C23.8012 5.07965 23.1224 4.63769 22.375 4.3486C21.5004 4.0203 20.5765 3.84278 19.6425 3.8236C18.4388 3.7711 18.0575 3.7561 15.005 3.7561C11.9525 3.7561 11.5613 3.7561 10.3675 3.8236C9.43424 3.8418 8.51095 4.01936 7.6375 4.3486C6.88992 4.63736 6.21096 5.07919 5.64417 5.64576C5.07738 6.21234 4.63529 6.89113 4.34625 7.6386C4.01788 8.51312 3.84077 9.43715 3.8225 10.3711C3.76875 11.5736 3.7525 11.9549 3.7525 15.0086C3.7525 18.0611 3.7525 18.4499 3.8225 19.6461C3.84125 20.5811 4.0175 21.5036 4.34625 22.3799C4.6361 23.1271 5.07862 23.8056 5.64555 24.3721C6.21247 24.9386 6.89133 25.3806 7.63875 25.6699C8.51054 26.0113 9.43422 26.2016 10.37 26.2324C11.5738 26.2849 11.955 26.3011 15.0075 26.3011C18.06 26.3011 18.4513 26.3011 19.645 26.2324C20.5789 26.2134 21.5028 26.0363 22.3775 25.7086C23.1247 25.4188 23.8033 24.9765 24.37 24.4098C24.9366 23.8431 25.379 23.1645 25.6688 22.4174C25.9975 21.5424 26.1738 20.6199 26.1925 19.6849C26.2463 18.4824 26.2625 18.1011 26.2625 15.0474C26.2625 11.9936 26.2625 11.6061 26.1925 10.4099C26.178 9.46269 25.9999 8.52516 25.6663 7.6386ZM24.1438 19.5536C24.1357 20.274 24.0042 20.9877 23.755 21.6636C23.5673 22.1497 23.2799 22.5911 22.9113 22.9595C22.5428 23.3278 22.1012 23.6149 21.615 23.8024C20.9465 24.0504 20.2405 24.1819 19.5275 24.1911C18.34 24.2461 18.005 24.2599 14.96 24.2599C11.9125 24.2599 11.6013 24.2599 10.3913 24.1911C9.67866 24.1824 8.97291 24.0509 8.305 23.8024C7.81711 23.6161 7.37375 23.3295 7.00361 22.9611C6.63348 22.5926 6.3448 22.1506 6.15625 21.6636C5.91056 20.9949 5.77914 20.2897 5.7675 19.5774C5.71375 18.3899 5.70125 18.0549 5.70125 15.0099C5.70125 11.9636 5.70125 11.6524 5.7675 10.4411C5.77558 9.72113 5.90707 9.00788 6.15625 8.33235C6.5375 7.3461 7.31875 6.56985 8.305 6.19235C8.97324 5.94503 9.67878 5.81356 10.3913 5.8036C11.58 5.74985 11.9138 5.73485 14.96 5.73485C18.0063 5.73485 18.3188 5.73485 19.5275 5.8036C20.2405 5.81218 20.9467 5.94369 21.615 6.19235C22.1012 6.38019 22.5427 6.66761 22.9112 7.03614C23.2798 7.40468 23.5672 7.84619 23.755 8.33235C24.0007 9.00104 24.1321 9.7063 24.1438 10.4186C24.1975 11.6074 24.2113 11.9411 24.2113 14.9874C24.2113 18.0324 24.2113 18.3599 24.1575 19.5549H24.1438V19.5536Z" />
                            </svg>  
                        </a>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#" class="footer__social-link">
                          <svg width="12" height="24" viewBox="0 0 12 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.74623 23.2462V13.0012H11.2025L11.7162 8.98997H7.74623V6.43497C7.74623 5.27747 8.06873 4.48497 9.72998 4.48497H11.835V0.908717C10.8108 0.798956 9.78129 0.745958 8.75123 0.749967C5.69623 0.749967 3.59873 2.61497 3.59873 6.03872V8.98247H0.164978V12.9937H3.60623V23.2462H7.74623Z"/>
                            </svg>
                        </a>
                      </div>
                    </div>
                    <div class="footer__info">
                      <div class="footer__tel"><a href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''), ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                      <h3 class="footer__subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                      <div class="footer__email"><a href="mailto:info@atllc.uz"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['feedback_email'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                      <nav class="footer__nav">
                        <ul class="footer__list">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
                           <?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
                          
                            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>

                           <?php }?>
                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                      </nav>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__copy"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['company_name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars(smarty_modifier_date_format(time(),'%Y'), ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
    </div>
</footer>
  
</div>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://api-maps.yandex.ru/2.1/?apikey=b6a870ec-d914-424a-a003-b2d702a5d3db&lang=ru_RU" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/swiper/swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/js/main.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  var myMap;
  ymaps.ready(init);
    function init() {

      // Создание экземпляра карты.
      myMap = new ymaps.Map('YMapsID', {
          center: [41.2646500, 69.2162700], 
          zoom: 11
        }, {
          searchControlProvider: 'yandex#search'
        })

      function createMenuGroup (group,mainlat) {
        // Пункт меню.
        var menuItem = $('<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;" mainlat="'+mainlat+'">' + group.name + '</a></li>'),
        // Коллекция для геообъектов группы.
          collection = new ymaps.GeoObjectCollection(null, { preset: group.style }),
          // Создаем метку.
          placemark = new ymaps.Placemark(group.center);
          gMarik.push(placemark);
        // Добавляем метку в коллекцию.
        collection.add(placemark);
        // Контейнер для подменю.
          submenu = $('<ul class="submenu"></ul>');
        // Добавляем коллекцию на карту.
        myMap.geoObjects.add(collection);
        // Добавляем подменю.
        menuItem
          .append(submenu.hide())
          // Добавляем пункт в меню.
          .appendTo(menu)
          // По клику удаляем/добавляем коллекцию на карту и скрываем/отображаем подменю.
          .find('a')
          .bind('click', function () {
          for (var i = 0; i <   gMarik.length; i++) {
              gMarik[i].options.set("preset", 'islands#grayIcon')
            }  
          myMap.panTo(mainlat, 13);
          var inx = $(this).closest('li').index();
          gMarik[inx].options.set("preset", 'islands#orangeDotIcon');
          
          });
      
      }
    //заглушка для карты
    myMap.behaviors.disable('scrollZoom');
      var ctrlKey = false;
      var ctrlMessVisible = false;
      var timer;
      // Отслеживаем скролл мыши на карте, чтобы показывать уведомление
      myMap.events.add(['wheel', 'mousedown'], function(e) {
        if (e.get('type') == 'wheel') {
          if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
            $('#ymap_ctrl_display').fadeIn(300);
            ctrlMessVisible = true;
            clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
            timer = setTimeout(function() {
              $('#ymap_ctrl_display').fadeOut(300);
              ctrlMessVisible = false;
            }, 1500);
          }
          else { // Ctrl нажат, скрываем сообщение
            $('#ymap_ctrl_display').fadeOut(100);
          }
        }
        if (e.get('type') == 'mousedown' && ctrlMessVisible) { // Скрываем уведомление при клике на карте
          $('#ymap_ctrl_display').fadeOut(100);
        }
      });

// Обрабатываем нажатие на Ctrl
      $(document).keydown(function(e) {
        if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
          ctrlKey = true;
          myMap.behaviors.enable('scrollZoom');
        }
      });
      $(document).keyup(function(e) { // Ctrl не нажат: выключаем масштабирование мышью
        if (e.which === 17) {
          ctrlKey = false;
          myMap.behaviors.disable('scrollZoom');
        }
      });
    }
<?php echo '</script'; ?>
>
</body>
</html>f<?php }
}
