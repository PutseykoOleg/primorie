<?php
/* Smarty version 3.1.38, created on 2021-05-25 11:38:35
  from 'C:\OpenServer\domains\ptptpt.com\template\index.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60acb78bedd2c4_93356627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf078736de48568e6cf1e4fc8111d0f8d79dcca' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ptptpt.com\\template\\index.htm',
      1 => 1621931911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/assets/components/public/header.htm' => 1,
    'file:template/assets/components/pages/$page.htm' => 1,
    'file:template/assets/components/pages/main.htm' => 1,
    'file:template/assets/components/public/footer.htm' => 1,
  ),
),false)) {
function content_60acb78bedd2c4_93356627 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="all" href="template/assets/css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:template/assets/components/public/header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:template/assets/components/pages/$page.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:template/assets/components/pages/main.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:template/assets/components/public/footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="/libs/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/animation.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
