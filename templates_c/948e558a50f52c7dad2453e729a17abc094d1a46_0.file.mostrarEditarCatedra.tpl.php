<?php
/* Smarty version 3.1.33, created on 2018-09-27 18:10:24
  from 'C:\xampp\htdocs\proyectos\web 2\Web2-TP1\templates\mostrarEditarCatedra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bad00f07659c3_61903369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '948e558a50f52c7dad2453e729a17abc094d1a46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web 2\\Web2-TP1\\templates\\mostrarEditarCatedra.tpl',
      1 => 1538064607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bad00f07659c3_61903369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardarEditarCatedra">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Cat']->value['id'];?>
">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Cat']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="linkForm">Link</label>
          <input type="text" class="form-control" id="linkForm" name="linkForm" value="<?php echo $_smarty_tpl->tpl_vars['Cat']->value['link'];?>
">
        </div>
        <div class="form-group">
          <label for="id_carreraForm">id carrera</label>
          <input type="text" class="form-control" id="id_carreraForm" name="id_carreraForm" value="<?php echo $_smarty_tpl->tpl_vars['Cat']->value['id_carrera'];?>
">
        </div>
        
        <button type="submit" class="btn btn-primary">Editar Catedra</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
