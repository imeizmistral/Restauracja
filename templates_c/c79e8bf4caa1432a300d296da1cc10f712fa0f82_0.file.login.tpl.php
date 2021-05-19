<?php
/* Smarty version 3.1.39, created on 2021-05-19 13:53:56
  from 'C:\xampp\htdocs\restauracja\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4fc54ac09f3_50533925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c79e8bf4caa1432a300d296da1cc10f712fa0f82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\login.tpl',
      1 => 1621425227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60a4fc54ac09f3_50533925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col col-lg-4 offset-lg-4 mt-5">
            <h2 class="text-center">Panel Restauratora</h2>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="processLogin">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" id="login" required>   
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Hasło</label>
                    <input type="password" name="password" class="form-control" id="password" required>   
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
                <?php }?>
            </form>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
