<?php
/* Smarty version 3.1.33, created on 2018-09-27 18:16:19
  from 'C:\xampp\htdocs\proyectos\web 2\Web2-TP1\templates\mostrarCatedras.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bad0253eb0008_74708566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eed1ad628fe2936564411e9dde1c06b7893acfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web 2\\Web2-TP1\\templates\\mostrarCatedras.tpl',
      1 => 1538064958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bad0253eb0008_74708566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Catedras']->value, 'catedra');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['catedra']->value) {
?>

                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['catedra']->value['nombre'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['catedra']->value['link'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['catedra']->value['id_carrera'];?>
<a href="eliminarCatedra/<?php echo $_smarty_tpl->tpl_vars['catedra']->value['id'];?>
">BORRAR</a> | <a href="editarCatedra/<?php echo $_smarty_tpl->tpl_vars['catedra']->value['id'];?>
">EDITAR</a></li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="agregarCatedra">
        <div class="form-group">
          <label for="nombreForm">nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" >
        </div>
        <div class="form-group">
          <label for="linkForm">link</label>
          <input type="text" class="form-control" id="linkForm" name="linkForm" >
        </div>

        <div class="form-group">
          <label for="idCarreraForm">idCarrera</label>
          <input type="text" class="form-control" id="idCarreraForm" name="idCarreraForm" >
        </div>
        <button type="submit" class="btn btn-primary">Crear Catedra</button>
      </form>
    </div> 

    <div>
      <h2>Formulario</h2>
        <form method="post" action="">
          <button class="btn btn-primary">home</button>
        </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
