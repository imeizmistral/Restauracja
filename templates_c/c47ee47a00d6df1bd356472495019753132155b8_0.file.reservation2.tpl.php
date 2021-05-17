<?php
/* Smarty version 3.1.39, created on 2021-05-14 22:18:46
  from 'C:\xampp\htdocs\restauracja\templates\reservation2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609edb267e15f9_87233148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47ee47a00d6df1bd356472495019753132155b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\reservation2.tpl',
      1 => 1621023522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_609edb267e15f9_87233148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row w-50 mx-auto pt-3">
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="accept">

        <div class="row">
            <div class="mb-3 col-4">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 min=<?php echo date("Y-m-d");?>
 max=<?php echo date('Y-m-d',strtotime("+13 day"));?>
 id="date" required disabled>   
            </div>
            <div class="mb-3 col-3">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" value=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 min="14:00" max="22:00" required disabled>   
            </div>
            <div class="mt-4 pt-2 col-3">
                   <button type="submit" name="action" value="back" class="btn btn-primary w-100" href="index.php?action=back">Zmień</button>
            </div>
        </div>


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
 --- <?php echo $_smarty_tpl->tpl_vars['table']->value['rodzaj'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select> 
        </div>
        <div class="mb-3">
       <label for="tel" class="col-4 col-form-label">Numer telefonu</label>
        <input class="form-control" type="text" name="tel" value="" id="tel" >
        </div>
        <div class="row mb-3">
        <div class="mb-3 col-4 mx-auto">
            <button type="submit" class="btn btn-primary w-100">Zarezerwuj</button>
        </div>
    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
