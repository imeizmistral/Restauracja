<?php
/* Smarty version 3.1.39, created on 2021-05-19 14:19:38
  from 'C:\xampp\htdocs\restauracja\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a5025a2e7702_07519742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad340257d8bee90092d20d9b15f6219a914407e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\restauracja\\templates\\panel.tpl',
      1 => 1621426758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60a5025a2e7702_07519742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        <main class="row">
            
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                    <div class="col">
                        Witaj <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

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
