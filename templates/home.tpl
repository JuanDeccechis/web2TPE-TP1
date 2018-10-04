{include file="header.tpl"}

    <h1>{$Titulo}</h1>

    <div class="container">
      <ul class="list-group">
            {foreach from=$Elementos item=carrera}
             <!--  {if $carrera['completada'] == 1}
                <li class="list-group-item"><s>{$carrera['titulo']} - {$carrera['descripcion']}</s><a href="borrar/{$carrera['id']}">BORRAR</a></li>
              {else} -->
                <li class="list-group-item">{$carrera['nombre']} ----- {$carrera['descripcion']}<a href="eliminar/{$carrera['id']}">ELIMINAR</a> | <a href="editar/{$carrera['id']}">EDITAR</a></li>
              <!-- {/if} -->
            {/foreach}
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
{include file="footer.tpl"}
