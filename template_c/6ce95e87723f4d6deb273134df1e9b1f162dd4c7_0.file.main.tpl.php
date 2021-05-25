<?php
/* Smarty version 3.1.38, created on 2021-02-17 20:44:41
  from 'L:\home\fgfgfg.com\template\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602ce589008105_81687328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce95e87723f4d6deb273134df1e9b1f162dd4c7' => 
    array (
      0 => 'L:\\home\\fgfgfg.com\\template\\user\\main.tpl',
      1 => 1613554927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".tpl' => 1,
    'file:user/pages/menu.tpl' => 1,
  ),
),false)) {
function content_602ce589008105_81687328 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:user/pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:user/pages/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
