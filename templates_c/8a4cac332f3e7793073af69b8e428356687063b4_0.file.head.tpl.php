<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:08:35
  from 'C:\xampp\htdocs\restauracja\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a786a36c21e6_26643538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a4cac332f3e7793073af69b8e428356687063b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\head.tpl',
      1 => 1621591713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a786a36c21e6_26643538 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Appetito</title>
      <link href="style/style.css"  rel="stylesheet" type="text/css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="container">  
<div class="header-logo">
  <img src="style/grafika/logo.png" class="logo" alt="logo">
</div>
  <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=reservation">Rezerwacja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=reservation">Kontakt</a>
        </li>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=tableReservation">Przegląd</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=logout" tabindex="-1">Wyloguj</a>
        </li>
        <li class="nav-item">
          Witaj <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

          </li>
        <?php } else { ?>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=login" tabindex="-1">Zaloguj</a>
        </li>
   
         <?php }?>
  </ul>


        
<div class="main"><?php }
}
