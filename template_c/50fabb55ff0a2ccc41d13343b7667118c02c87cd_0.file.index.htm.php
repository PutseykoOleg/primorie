<?php
/* Smarty version 3.1.38, created on 2021-05-21 14:00:11
  from 'C:\OpenServer\domains\fgfgfg.com\template\index.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a792bb9b7de7_96756880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50fabb55ff0a2ccc41d13343b7667118c02c87cd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\index.htm',
      1 => 1621594719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:guest/auth.htm' => 1,
    'file:user/main.htm' => 1,
  ),
),false)) {
function content_60a792bb9b7de7_96756880 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_logged']->value == false) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:guest/auth.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:user/main.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?> <?php }
}
