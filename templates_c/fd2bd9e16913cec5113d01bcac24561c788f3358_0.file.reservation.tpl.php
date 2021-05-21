<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:59:29
  from 'C:\xampp\htdocs\restauracja\templates\reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a79291ab1770_11025992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2bd9e16913cec5113d01bcac24561c788f3358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\reservation.tpl',
      1 => 1621594765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60a79291ab1770_11025992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="box">
<h2> Rezerwacja stolika</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="processReservation">
        
        <div class="box-row">
            <div class="box-row-bottom">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" min=<?php echo date("Y-m-d");?>
 max=<?php echo date('Y-m-d',strtotime("+13 day"));?>
 id="date" required>   
            </div>
            <div class="box-row-bottom">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" min="14:00" max="22:00" required>   
            </div>
        
        
            <div class="box-row-bottom">
                <button type="submit" href='index.php?accept'>Sprawdź</button>
            </div>
        </div>
    </form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
