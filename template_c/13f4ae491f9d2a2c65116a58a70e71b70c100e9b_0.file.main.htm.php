<?php
/* Smarty version 3.1.38, created on 2021-05-25 11:20:06
  from 'C:\OpenServer\domains\ptptpt.com\template\pages\main.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60acb3362c4c42_38774847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f4ae491f9d2a2c65116a58a70e71b70c100e9b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ptptpt.com\\template\\pages\\main.htm',
      1 => 1621930717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/assets/components/public/header.htm' => 1,
    'file:template/assets/components/place.htm' => 1,
    'file:template/assets/components/public/footer.htm' => 1,
  ),
),false)) {
function content_60acb3362c4c42_38774847 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="all" href="template/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:template/assets/components/public/header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <content class="content-ha-center">
        <img src="/template//assets/img/bird-1.svg" class="bird hidden">
        <img src="/template//assets/img/bird-2.svg" class="bird hidden">
        <img src="/template//assets/img/bird-3.svg" class="bird hidden">
        <div class="content content-ha-center">
            <div class="input-border">
                <input type="text" class="search">
            </div>
            <div class="places-list col content-ha-center">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['places']->value, 'place');
$_smarty_tpl->tpl_vars['place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
$_smarty_tpl->tpl_vars['place']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:template/assets/components/place.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('place'=>$_smarty_tpl->tpl_vars['place']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <img src="/template//assets/img/bird-4.svg" class="bird hidden">
    </content>

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
