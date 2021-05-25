<?php
/* Smarty version 3.1.38, created on 2021-05-23 21:31:58
  from 'C:\OpenServer\domains\ptptpt.com\template\components\auth\signup-block.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60aa9f9e9abeb1_11564383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965cfb1c1170c24eadc9c39b47bb55c98b3b678f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ptptpt.com\\template\\components\\auth\\signup-block.htm',
      1 => 1621594616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa9f9e9abeb1_11564383 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="auth-block content-ha-center unselectable" action data-operation="signup">
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
