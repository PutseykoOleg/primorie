<?php
/* Smarty version 3.1.38, created on 2021-05-20 04:26:22
  from 'C:\OpenServer\domains\fgfgfg.com\template\components\signup-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a5babe9bc008_18150803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f9a12c6eae126355d1b76d6d57a92a2b99817c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\components\\signup-block.tpl',
      1 => 1621473937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a5babe9bc008_18150803 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="reg">
    <h1 class="title">HELLO</h1>
    <p class="message" style="overflow: hidden;">Do u wanna play?</p>

    <p id="step-1-text" class="message">Enter your name</p>
    <input id="step-1-input" class="auth-input" name="name" pattern="([A-Za-z]*)|([А-Яа-я]*)" autofocus required maxlength="15">

    <p id="step-2-text" class="message">Enter your Email</p>
    <input id="step-2-input" class="auth-input" name="email" email autofocus required>

    <p id="step-3-text" class="message">Enter the code</p>
    <input id="step-3-input" class="auth-input" name="code" pattern="[A-Za-z]*" autofocus required maxlength="9">

    <p id="step-4-text" class="message">Confirm the code</p>
    <input id="step-4-input" class="auth-input" name="code1" pattern="[A-Za-z]*" autofocus required maxlength="9">

    <p>or <a id="to_login_btn">Log In</a></p>
</form><?php }
}
