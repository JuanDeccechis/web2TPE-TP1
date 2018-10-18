{include file="header.tpl"}

    <h2>{$Titulo}</h2>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$home}/guardarEditarCatedra">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Catedra['id']}">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Catedra['nombre']}">
        </div>
        <div class="form-group">
          <label for="linkForm">Link</label>
          <input type="text" class="form-control" id="linkForm" name="linkForm" value="{$Catedra['link']}">
        </div>
        <div class="form-group">
            <label for="nombreCarreraForm">nombre carrera</label>
            <select class="form-control" id="nombreCarreraForm" name="nombreCarreraForm">
              {foreach from=$Elementos item=carrera}
                <option>{$carrera['nombre']}</option>
              {/foreach}
            </select>
          </div>
    
        
        <button type="submit" class="btn btn-primary">Editar Catedra</button>
      </form>
    </div>
{include file="footer.tpl"}
