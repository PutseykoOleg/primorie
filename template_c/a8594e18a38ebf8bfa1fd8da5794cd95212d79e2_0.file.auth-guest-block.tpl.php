<?php
/* Smarty version 3.1.38, created on 2021-05-19 22:30:56
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\auth-guest-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a56770c28a44_22803377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8594e18a38ebf8bfa1fd8da5794cd95212d79e2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\auth-guest-block.tpl',
      1 => 1621452577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a56770c28a44_22803377 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="authorisation">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>
    <p class="message">Enter your personal code</p>
    <input class="auth-input" name="login" pattern="#[A-Za-z]*" autofocus required maxlength="10">
    <p>or <a id="to_login">Log In</a></p>
</form><?php }
}
