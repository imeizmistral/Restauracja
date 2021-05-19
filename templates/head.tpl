<!DOCTYPE html>
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
  
  {if isset($user)}
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=tableReservation">Przegląd Rezerwacji</a>
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