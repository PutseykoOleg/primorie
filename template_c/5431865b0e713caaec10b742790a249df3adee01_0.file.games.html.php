<?php
/* Smarty version 3.1.38, created on 2021-05-22 19:34:52
  from 'C:\OpenServer\domains\fgfgfg.com\template\user\pages\games.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60a932ac04a371_06758529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5431865b0e713caaec10b742790a249df3adee01' => 
    array (
      0 => 'C:\\OpenServer\\domains\\fgfgfg.com\\template\\user\\pages\\games.html',
      1 => 1621701205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/components/public/header.htm' => 1,
  ),
),false)) {
function content_60a932ac04a371_06758529 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" media="all" href="template/assets/css/colors.css">
    <link rel="stylesheet" media="all" href="template/assets/css/style.css">
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:template/components/public/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <content class="content display-flex content-ha-center content-va-center">
        <table cellpadding="0" cellspacing="50">
            <tr>
                <td class="content-ha-center increasable">
                    <div class="game-block existent-game color-1 portrait-row">
                        <img class="game-logo" src="template/assets/img/game_logo/quiz-logo.png">
                        <p class="game-title">QUIZ</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="game-block existent-game color-2">
                        <img class="game-logo" src="template/assets/img/game_logo/yes_or_no-logo.png">
                        <p class="game-title">YES or NO</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-3 portrait-row">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-4">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
                <td id="qwe" class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-5 portrait-row">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
                <td class="content-ha-center increasable">
                    <div class="game-block non-existent-game color-6">
                        <img class="game-logo" src="template/assets/img/game_logo/non_existent-logo.png">
                        <p class="game-title">...</p>
                    </div>
                </td>
            </tr>
        </table>
    </content>

    <footer class="display-flex content-ha-center content-va-center">
        <!-- <div class="col">
            <p>© 2021 Space.code</p>
            <p>© 2021 Space.dsgn</p>
        </div> -->
    </footer>
    
    <?php echo '<script'; ?>
 src="/libs/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/template/assets/js/logout.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
