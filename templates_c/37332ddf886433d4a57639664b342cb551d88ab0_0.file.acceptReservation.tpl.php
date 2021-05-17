<?php
/* Smarty version 3.1.39, created on 2021-05-14 19:59:46
  from 'C:\xampp\htdocs\restauracja\templates\acceptReservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609eba923b8931_49649092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37332ddf886433d4a57639664b342cb551d88ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\acceptReservation.tpl',
      1 => 1621015176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_609eba923b8931_49649092 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row w-50 mx-auto pt-3">
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="processReservation">
        <div class="mb-3">
       <label for="tel" class="col-4 col-form-label">Numer telefonu</label>
        <input class="form-control" type="text" name="tel" value="" id="tel" required>
        </div>

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
            <button type="button" class="btn btn-primary w-100">Sprawdź</button>
        </div>
         <?php if ((isset($_smarty_tpl->tpl_vars['button']->value))) {?>
         <div class="row mb-4 p-2">
         <label for="tables" class="form-label">Wybierz stolik:</label>
            <select class="form-select" aria-label="Default select example" id="tables" name="tables">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'table');
$_smarty_tpl->tpl_vars['table']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['table']->value['id'];?>
">Nr <?php echo $_smarty_tpl->tpl_vars['table']->value['id'];?>
 --- max liczba: <?php echo $_smarty_tpl->tpl_vars['table']->value['max_liczba'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select> 
        </div>
        <div class="row mb-3">
        <div class="mb-3 col-4 mx-auto">
            <button type="submit" class="btn btn-primary w-100">Zarezerwuj</button>
        </div>
    </form>
        <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
