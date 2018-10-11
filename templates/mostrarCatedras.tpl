{include file="header.tpl"}

<div class="container">
  <h2>{$Titulo}</h2>
  <table class="table">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>VER</th>
      <th>Nombre Carrera</th>
      <th>Link</th>
      <th>Cantidad de alumnos</th>
      {if $sesion_activa}
        <th>ELIMINAR</th>
        <th>EDITAR</th>
      {/if}
    </thead>
    <tbody>
      {foreach from=$Elementos item=carrera}
        {if $lista_de == 'carreras'}
          <tr class="filaCarrera">
            <td> CARRERA - {$carrera['id']} </td>
            <td> {$carrera['nombre']} </td>
            <td> {$carrera['descripcion']} </td>
            <td> --- </td>
            <td> --- </td>
            <td> --- </td>
            <td> --- </td>
            {if $sesion_activa}
              <td> --- </td>
              <td> --- </td>
            {/if}
          </tr>
        {/if}
        {foreach from=$carrera['catedras'] item=catedra}
          <tr class="filaCatedra">
            <td> CATEDRA - {$catedra['id']} </td>
            <td> {$catedra['nombre']} </td>
            <td> --- </td>
            {if $id_catedra_detalle !== $catedra['id']}
              <td> <a href="{$home}/enDetalle/{$catedra['id']}"> Ver en detalle </a> </td>
              <td> --- </td>
              <td> --- </td>
              <td> --- </td>
            {else}
              <td> --- </td>
              <td> {$carrera['nombre']}</td>
              <td> <a href="http://{$catedra['link']}"  target="_blank"> <img src="images/icon-link.png"  alt="Link"></a> </td>
              <td> {$catedra['cant_alumnos']} </td>
            {/if}
            {if $sesion_activa}
              <td> <a href="eliminarCatedra/{$catedra['id']}">ELIMINAR</a> </td>
              <td> <a href="editarCatedra/{$catedra['id']}">EDITAR</a></td>
            {/if}
          </tr>
        {/foreach}
      {/foreach}
    </tbody>
  </table>



 <!--  <ul class="list-group">
    {foreach from=$Elementos item=carrera}
      {if $lista_de == 'carreras'}
        <li class="list-group-item filaCarrera">CARRERA - {$carrera['id']} - {$carrera['nombre']} </li>
      {/if}
      {if $carrera['catedras']}
        <ul class="list-group catedras">
          {foreach from=$carrera['catedras'] item=catedra}
              <li class="list-group-item filaCatedra">CATEDRA - {$catedra['id']} - {$catedra['nombre']}
                {if $id_catedra_detalle !== $catedra['id']}
                  <a href="{$home}/enDetalle/{$catedra['id']}"> Ver en detalle </a>
                {else}
                  - {$carrera['nombre']} 
                  - Link: <a href="http://{$catedra['link']}"  target="_blank"> <img src="images/icon-link.png"  alt="Link"> </a>
                  - Cantidad de alumnos: {$catedra['cant_alumnos']}
                {/if}
                {if $sesion_activa}
                  <a href="eliminarCatedra/{$catedra['id']}">ELIMINAR</a> | 
                  <a href="editarCatedra/{$catedra['id']}">EDITAR</a>
                {/if}
              </li>            
          {/foreach}
        </ul>
      {/if}
    {/foreach}
  </ul> -->
</div>

  {if $sesion_activa}
    {include file="agregarCatedraForm.tpl"}
  {/if}

{include file="footer.tpl"}
