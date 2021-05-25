<?php
/* Smarty version 3.1.38, created on 2021-02-17 20:42:23
  from 'L:\home\fgfgfg.com\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602ce4ff0de496_87676944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8fad43d6cc0b1ce4e4d33a28a69da6ce1417797' => 
    array (
      0 => 'L:\\home\\fgfgfg.com\\template\\index.tpl',
      1 => 1613554527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:guest/auth.tpl' => 1,
    'file:user/main.tpl' => 1,
  ),
),false)) {
function content_602ce4ff0de496_87676944 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_logged']->value == false) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:guest/auth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?> <?php }
}
