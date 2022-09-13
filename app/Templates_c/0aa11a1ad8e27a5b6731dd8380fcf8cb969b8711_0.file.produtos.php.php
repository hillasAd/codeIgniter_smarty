<?php
/* Smarty version 4.2.0, created on 2022-09-13 08:24:32
  from 'C:\Users\digit\OneDrive\Documents\Digital developer\My Repository\CI_SM\app\Views\produtos.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63208490cdd6c3_57928968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aa11a1ad8e27a5b6731dd8380fcf8cb969b8711' => 
    array (
      0 => 'C:\\Users\\digit\\OneDrive\\Documents\\Digital developer\\My Repository\\CI_SM\\app\\Views\\produtos.php',
      1 => 1663061511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63208490cdd6c3_57928968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1237827589632084909d8e50_59887535', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.php");
}
/* {block 'main'} */
class Block_1237827589632084909d8e50_59887535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1237827589632084909d8e50_59887535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h5><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h5>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert alert-primary" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

</div>
<?php }?>
    <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Valor</th>
              <th scope="col">Opcoes</th>
            </tr>
          </thead>
          <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtos']->value, 'produto');
$_smarty_tpl->tpl_vars['produto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->do_else = false;
?>
                <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->nome;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->valor;?>
</td>
        <td>
          <a href="/produto/editar/<?php echo $_smarty_tpl->tpl_vars['produto']->value->id;?>
" class="btn btn-primary">Editar</a>
          <a href="/produto/eliminar/<?php echo $_smarty_tpl->tpl_vars['produto']->value->id;?>
" class="btn btn-danger">Eliminar</a>
        </td>
        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </tbody>
    </table>
  </div>


<?php
}
}
/* {/block 'main'} */
}
