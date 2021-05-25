<?php
/* Smarty version 3.1.38, created on 2021-05-23 21:31:58
  from 'C:\OpenServer\domains\ptptpt.com\template\guest\auth.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60aa9f9e913e09_19499684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b98355ba064d98dba41fed171b12474dd6776f3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ptptpt.com\\template\\guest\\auth.htm',
      1 => 1621792216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/components/auth/signin-block.htm' => 1,
    'file:template/components/auth/signup-block.htm' => 1,
  ),
),false)) {
function content_60aa9f9e913e09_19499684 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php $_smarty_tpl->_subTemplateRender("file:template/components/auth/signup-block.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <?php echo '<script'; ?>
 src="/libs/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/auth.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
