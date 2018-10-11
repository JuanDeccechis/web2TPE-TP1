{include file="header.tpl"}

<div class="container">
  <h2>{$Titulo}</h2>
  <table class="table">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>VER catedras</th>
      {if $sesion_activa}
        <th>ELIMINAR</th>
        <th>EDITAR</th>
      {/if}
    </thead>
    <tbody>
      {foreach from=$Elementos item=carrera}
        <tr class="filaCarrera">
          <td> CARRERA - {$carrera['id']} </td>
          <td> {$carrera['nombre']} </td>
          <td> {$carrera['descripcion']} </td>
          <td> <a href="mostrarUna/{$carrera['id']}"> Ver catedras </a> </td>
          {if $sesion_activa}
            <td> <a href="eliminar/{$carrera['id']}">ELIMINAR</a>  </td>
            <td> <a href="editar/{$carrera['id']}">EDITAR</a> </td>
          {/if}
        </tr>      
      {/foreach}
    </tbody>
  </table>

<!--      <ul class="list-group">
        {foreach from=$Elementos item=carrera}
            <li class="list-group-item filaCarrera">{$carrera['nombre']} ----- {$carrera['descripcion']}
              | <a href="mostrarUna/{$carrera['id']}"> Ver catedras </a>
              {if $sesion_activa}
                | <a href="eliminar/{$carrera['id']}">ELIMINAR</a> 
                | <a href="editar/{$carrera['id']}">EDITAR</a>
              {/if}
            </li>
        {/foreach}
  </ul> -->

</div>

  {if $sesion_activa}
    {include file="agregarCarreraForm.tpl"}
  {/if}

{include file="footer.tpl"}
