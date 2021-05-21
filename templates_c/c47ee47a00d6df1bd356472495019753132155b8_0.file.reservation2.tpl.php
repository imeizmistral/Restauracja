<?php
/* Smarty version 3.1.39, created on 2021-05-21 13:15:09
  from 'C:\xampp\htdocs\restauracja\templates\reservation2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7963d305449_31426304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47ee47a00d6df1bd356472495019753132155b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\reservation2.tpl',
      1 => 1621595694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60a7963d305449_31426304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="box">
<h2>Rezerwacja stolika</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="accept">

        <div class="box-row">
            <div class="box-row-bottom">
                <label for="date" class="form-label">Data</label>
                <input type="date" name="date" class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 min=<?php echo date("Y-m-d");?>
 max=<?php echo date('Y-m-d',strtotime("+13 day"));?>
 id="date" required readonly="readonly">   
            </div>
            <div class="box-row-bottom">
                <label for="time" class="form-label">Godzina</label>
                <input type="time" name="time" class="form-control" id="time" value=<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 min="14:00" max="22:00" required readonly="readonly">   
            </div>
        
        
            <div class="box-row-bottom">
                 <button type="submit" name="action" value="back" href="index.php?action=back">Zmień</button>
            </div>
        </div>
          <div class="box-row">
           <div class="box-row-bottom">
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
        </div>
        <div class="box-row">
           <div class="box-row-bottom">
       <label for="tel" class="col-4 col-form-label">Numer telefonu</label>
        <input class="form-control" type="text" name="tel" value="" id="tel" >
        </div>
        </div>
        <div class="box-row">
            <button type="submit" class="btn">Zarezerwuj</button>
    </form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
