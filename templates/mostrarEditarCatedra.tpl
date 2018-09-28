{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/guardarEditarCatedra">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Cat['id']}">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Cat['nombre']}">
        </div>
        <div class="form-group">
          <label for="linkForm">Link</label>
          <input type="text" class="form-control" id="linkForm" name="linkForm" value="{$Cat['link']}">
        </div>
        <div class="form-group">
          <label for="id_carreraForm">id carrera</label>
          <input type="text" class="form-control" id="id_carreraForm" name="id_carreraForm" value="{$Cat['id_carrera']}">
        </div>
        
        <button type="submit" class="btn btn-primary">Editar Catedra</button>
      </form>
    </div>
{include file="footer.tpl"}
