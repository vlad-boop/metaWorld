<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:44:54
  from 'C:\xampp\htdocs\themes\dist_en\templates\modules\meta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4af68ef095_08792367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d6f01fbd4191135a81e85450e1424b85e0dd71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist_en\\templates\\modules\\meta.tpl',
      1 => 1603731872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb4af68ef095_08792367 (Smarty_Internal_Template $_smarty_tpl) {
?><title><?php if ($_smarty_tpl->tpl_vars['sectionId']->value == 1) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php }
if ($_smarty_tpl->tpl_vars['title']->value) {
echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php } elseif ($_smarty_tpl->tpl_vars['article']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['website_name'], ENT_QUOTES, 'UTF-8', true);?>
</title>

<?php if ($_smarty_tpl->tpl_vars['sectionId']->value == 1) {
if ($_smarty_tpl->tpl_vars['section']->value['description']) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['section']->value['description'];?>
">
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['section']->value['description'];?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['section']->value['keywords']) {?><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['section']->value['keywords'];?>
"><?php }
}
if ($_smarty_tpl->tpl_vars['description']->value) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['keywords']->value) {?><meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><?php }?>
<meta name="author" content="Создание и продвижение сайтов Life Style">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><?php }
}
