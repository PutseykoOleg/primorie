<?php
/* Smarty version 3.1.38, created on 2021-02-18 08:58:27
  from 'C:\OpenServer\domains\fgfgfg.com\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602e02032a3de5_99718318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620ee9106a792bb005c5ad99facc0c76f0f9af3b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\index.tpl',
      1 => 1613627850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:guest/auth.tpl' => 1,
    'file:user/main.tpl' => 1,
  ),
),false)) {
function content_602e02032a3de5_99718318 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_logged']->value == false) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:guest/auth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:user/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?> <?php }
}
