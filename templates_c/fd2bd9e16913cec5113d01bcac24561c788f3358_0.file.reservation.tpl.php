<?php
/* Smarty version 3.1.39, created on 2021-05-18 11:58:11
  from 'C:\xampp\htdocs\restauracja\templates\reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a38fb32454a3_54949666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2bd9e16913cec5113d01bcac24561c788f3358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\reservation.tpl',
      1 => 1621331814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60a38fb32454a3_54949666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row w-50 mx-auto pt-3">
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="processReservation">
        

        <div class="row">
            <div class="mb-3 col-4">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" min=<?php echo date("Y-m-d");?>
 max=<?php echo date('Y-m-d',strtotime("+13 day"));?>
 id="date" required>   
            </div>
            <div class="mb-3 col-3">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" min="14:00" max="22:00" required>   
            </div>
        </div>
        <div class="mb-3 col-4 mx-auto">
            <button type="submit" class="btn btn-primary w-100" href='index.php?accept'>Sprawdź</button>
        </div>
    
    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
