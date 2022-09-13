<?php
/* Smarty version 4.2.0, created on 2022-09-13 08:24:32
  from 'C:\Users\digit\OneDrive\Documents\Digital developer\My Repository\CI_SM\app\Views\layout.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63208490f38888_63219207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ecfec4d759b42f92b3d0bbe960353bbadf3935' => 
    array (
      0 => 'C:\\Users\\digit\\OneDrive\\Documents\\Digital developer\\My Repository\\CI_SM\\app\\Views\\layout.php',
      1 => 1663056734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63208490f38888_63219207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    .row{
        padding-bottom:8px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <div class="container">
    <h2 class="navbar-brand">CI + SMARTY</h2>
  </div>
</nav>
<div class="container">
    <div class="row" style="padding-top: 20px;">
        <h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
    </div>
    <div class="row">
        <div class="col">
            <ul class="nav">
            <li class="nav-item">
                <a href="/produtos" class="nav-link btn btn-light">Gerir produtos</a>
            </li>
            <li class="nav-item">
                <a href="/produto/adicionar" class="nav-link btn btn-light">Adicionar produtos</a>
            </li>
            </ul>
        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178092615663208490f37225_53783055', 'main');
?>

</div>

</body>
</html>
<?php }
/* {block 'main'} */
class Block_178092615663208490f37225_53783055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_178092615663208490f37225_53783055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php
}
}
/* {/block 'main'} */
}
