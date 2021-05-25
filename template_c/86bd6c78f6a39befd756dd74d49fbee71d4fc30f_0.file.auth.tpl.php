<?php
/* Smarty version 3.1.38, created on 2021-05-21 13:56:36
  from 'C:\OpenServer\domains\fgfgfg.com\template\guest\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a791e48c70f5_83863151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86bd6c78f6a39befd756dd74d49fbee71d4fc30f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\guest\\auth.tpl',
      1 => 1621594595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/components/auth/signin-block.htm' => 1,
    'file:template/components/auth/signup-block.tpl' => 1,
  ),
),false)) {
function content_60a791e48c70f5_83863151 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" media="all" href="template/assets/css/style.css">
    <link rel="stylesheet" media="all" href="template/assets/css/colors.css">
</head>
<body class="as-display">
    <div id="login_block" class="full-space display-flex col content-va-center content-ha-center">
        <?php $_smarty_tpl->_subTemplateRender("file:template/components/auth/signin-block.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="signup_block" class="full-space display-flex col content-va-center content-ha-center">
        <?php $_smarty_tpl->_subTemplateRender("file:template/components/auth/signup-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <?php echo '<script'; ?>
 src="libs/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="template/assets/js/auth.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
