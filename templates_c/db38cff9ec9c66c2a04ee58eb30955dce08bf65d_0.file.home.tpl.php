<?php
/* Smarty version 3.1.33, created on 2018-09-28 04:01:36
  from 'C:\xampp\htdocs\proyectos\web 2\web2TPE-TP1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bad8b801a9b37_39838574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db38cff9ec9c66c2a04ee58eb30955dce08bf65d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web 2\\web2TPE-TP1\\templates\\home.tpl',
      1 => 1538072563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bad8b801a9b37_39838574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Carreras']->value, 'carrera');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrera']->value) {
?>
             <!--  <?php if ($_smarty_tpl->tpl_vars['carrera']->value['completada'] == 1) {?>
                <li class="list-group-item"><s><?php echo $_smarty_tpl->tpl_vars['carrera']->value['titulo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['carrera']->value['descripcion'];?>
</s><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['carrera']->value['id'];?>
">BORRAR</a></li>
              <?php } else { ?> -->
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['carrera']->value['nombre'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['carrera']->value['descripcion'];?>
<a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['carrera']->value['id'];?>
">ELIMINAR</a> | <a href="editar/<?php echo $_smarty_tpl->tpl_vars['carrera']->value['id'];?>
">EDITAR</a></li>
              <!-- <?php }?> -->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>

     <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="agregar">
        <div class="form-group">
          <label for="nombreForm">nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" >
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" >
        </div>
        <button type="submit" class="btn btn-primary">Crear Carrera</button>
      </form>
    </div> 

    <div>
      <h2>Formulario</h2>
        <form method="post" action="mostrarCatedras">
          <button class="btn btn-primary">mostrar catedras</button>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
