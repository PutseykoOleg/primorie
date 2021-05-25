<?php
/* Smarty version 3.1.38, created on 2021-05-20 04:01:23
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\login-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a5b4e3966e43_97070568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe933d79853072b4efa4f116658c763f8e10e2b6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\login-block.tpl',
      1 => 1621472463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a5b4e3966e43_97070568 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="authorization">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>
    <p class="message">Enter your personal code</p>
    <input id="login-input" class="auth-input" name="code" pattern="#[A-Za-z]*" autofocus autocomplete="off" required maxlength="10">
    <p>or <a id="to_signup_btn">Sign Up</a></p>
</form><?php }
}
