{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/guardarEditar">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Car['id']}">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Car['nombre']}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="{$Car['descripcion']}">
        </div>
        
        <button type="submit" class="btn btn-primary">Editar Carrera</button>
      </form>
    </div>
{include file="footer.tpl"}
