<?php
/* Smarty version 3.1.39, created on 2021-05-19 18:03:32
  from 'C:\xampp\htdocs\restauracja\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a536d444ac44_07029823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a4cac332f3e7793073af69b8e428356687063b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\head.tpl',
      1 => 1621440210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a536d444ac44_07029823 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Apetito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Strona główna</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=reservation">Rezerwacja</a>
  </li>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=tableReservation">Przegląd Rezerwacji</a>
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
</ul><?php }
}
