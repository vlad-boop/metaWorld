<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:44:54
  from 'C:\xampp\htdocs\themes\dist_en\templates\components\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4af69b3255_72337855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330f58bac62e13ce0030116f1f9b9637e2e08cd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist_en\\templates\\components\\notifications.tpl',
      1 => 1660392032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb4af69b3255_72337855 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="position-fixed p-3" style="z-index:1051;right:0;top:0;">
	<div class="toast toast-primary hide" id="toast1" data-delay="3000">
		<div class="toast-header">
			<strong class="mr-auto">Info</strong>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
				<span>&times;</span>
			</button>
		</div>
		<div class="toast-body">
			See? Just like this.
		</div>
	</div>

	<div class="toast toast-danger hide" id="toast2" data-delay="3000">
		<div class="toast-header">
			<strong class="mr-auto">Ощибка!</strong>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
				<span>&times;</span>
			</button>
		</div>
		<div class="toast-body">
			При авторизации произошла ошибка. Попробуйте снова!
		</div>
	</div>

	<div class="toast toast-success hide" id="toast3" data-delay="3000">
		<div class="toast-header">
			<strong class="mr-auto">Успех</strong>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
				<span>&times;</span>
			</button>
		</div>
		<div class="toast-body">
			Вы успешно вошли в аккаунт!
		</div>
	</div>
</div><?php }
}
