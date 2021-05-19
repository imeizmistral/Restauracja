<?php
/* Smarty version 3.1.39, created on 2021-05-19 19:57:23
  from 'C:\xampp\htdocs\restauracja\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a551831063a5_73066062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad340257d8bee90092d20d9b15f6219a914407e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\panel.tpl',
      1 => 1621447037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60a551831063a5_73066062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        <main class="row">
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                    <div class="col">
                        
                   

<h2> Dzisiejsze rezerwacje</h2>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">Czas</th>
      <th scope="col">Numer stolika</th>
      <th scope="col">Odwołanie</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservation']->value, 'reserved');
$_smarty_tpl->tpl_vars['reserved']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reserved']->value) {
$_smarty_tpl->tpl_vars['reserved']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['reserved']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['reserved']->value['number_tel'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['reserved']->value['time'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['reserved']->value['id_table'];?>
</td>
            <td>
                <a href="index.php?action=cancelReservation&id=<?php echo $_smarty_tpl->tpl_vars['reserved']->value['id'];?>
">
                <button class="btn btn-primary">Odwołaj rezerwację</button>
            </a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
                
           </div>      
                
                
                
                <?php } else { ?>
                    <div class="col">
                possimus veritatis numquam amet accusamus dolorem laboriosam. Aperiam, eos?
                Quia aut fugiat exercitationem dolores commodi in numquam accusantium cupiditate, dolorum asperiores inventore excepturi dignissimos odit similique enim nesciunt. Amet ex nesciunt reprehenderit totam tempore dolores magnam temporibus suscipit modi?
            </div>
    
                <?php }?>
        </main>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
