<?php
/* Smarty version 3.1.38, created on 2021-05-19 21:03:50
  from 'C:\OpenServer\domains\fgfgfg.com\template\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a553063264a1_50199216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d7bab16e9423c2f3bd53779d4ddacfdc7c41271' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\user\\main.tpl',
      1 => 1621447428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/user/pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".tpl' => 1,
    'file:template/user/pages/games.tpl' => 1,
  ),
),false)) {
function content_60a553063264a1_50199216 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:template/user/pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:template/user/pages/games.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
