<?php
/* Smarty version 3.1.33, created on 2018-09-28 03:57:41
  from 'C:\xampp\htdocs\proyectos\web 2\Web2-TP1\templates\afectadosCarrera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bad8a9578a643_16743509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f456ecd823a323bbf309e2fcf32c5e7c674921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web 2\\Web2-TP1\\templates\\afectadosCarrera.tpl',
      1 => 1538099828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bad8a9578a643_16743509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['Car']->value;?>
</h2>

  <div>
      <h2>Formulario</h2>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">
          <button class="btn btn-primary">volver a Home</button>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
