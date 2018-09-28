<?php
/* Smarty version 3.1.33, created on 2018-09-26 22:36:53
  from 'C:\xampp\htdocs\proyectos\web 2\Web2-TP1\templates\mostrarEditarCarrera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5babede592b513_28607223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c346e29c7df029f87de53bd6c7719ca9152377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web 2\\Web2-TP1\\templates\\mostrarEditarCarrera.tpl',
      1 => 1537993918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5babede592b513_28607223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardarEditar">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Car']->value['id'];?>
">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Car']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="<?php echo $_smarty_tpl->tpl_vars['Car']->value['descripcion'];?>
">
        </div>
        
        <button type="submit" class="btn btn-primary">Editar Carrera</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
