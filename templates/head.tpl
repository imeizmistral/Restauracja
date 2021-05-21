<!DOCTYPE html>
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
        
        {if isset($user)}
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=tableReservation">Przegląd</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=logout" tabindex="-1">Wyloguj</a>
        </li>
        <li class="nav-item">
          Witaj {$user}
          </li>
        {else}
        
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=login" tabindex="-1">Zaloguj</a>
        </li>
   
         {/if}
  </ul>


        
<div class="main">