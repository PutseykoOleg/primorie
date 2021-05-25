<?php
/* Smarty version 3.1.38, created on 2021-05-22 19:36:37
  from 'C:\OpenServer\domains\fgfgfg.com\template\user\main.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a9331514e4d7_51907184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef1cc8ea4c527fbef0b74077cb3476d0b31ca9f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\user\\main.htm',
      1 => 1621701302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/user/pages/".((string)$_smarty_tpl->tpl_vars[\'page\']->value).".htm' => 1,
    'file:template/user/pages/games.htm' => 1,
  ),
),false)) {
function content_60a9331514e4d7_51907184 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:template/user/pages/".((string)$_smarty_tpl->tpl_vars['page']->value).".htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:template/user/pages/games.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
