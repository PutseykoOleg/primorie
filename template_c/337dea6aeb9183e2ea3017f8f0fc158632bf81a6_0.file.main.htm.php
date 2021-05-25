<?php
/* Smarty version 3.1.38, created on 2021-05-25 11:32:52
  from 'C:\OpenServer\domains\ptptpt.com\template\assets\components\pages\main.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60acb63498e249_28784369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '337dea6aeb9183e2ea3017f8f0fc158632bf81a6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ptptpt.com\\template\\assets\\components\\pages\\main.htm',
      1 => 1621931251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/assets/components/place.htm' => 1,
  ),
),false)) {
function content_60acb63498e249_28784369 (Smarty_Internal_Template $_smarty_tpl) {
?><content class="content-ha-center">
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
</content><?php }
}
