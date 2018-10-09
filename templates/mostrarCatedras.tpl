{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <div class="container">
      <ul class="list-group">
        {foreach from=$Elementos item=carrera}
          {if $lista_de == 'carreras'}
            <li class="list-group-item">CARRERA - {$carrera['id']} - {$carrera['nombre']} </li>
          {/if}
          {foreach from=$carrera['catedras'] item=catedra}
            <li class="list-group-item">
              <ul class="list-group">
                <li class="list-group-item">CATEDRA - {$catedra['id']} - {$catedra['nombre']}
                  {if $id_catedra_detalle !== $catedra['id']}
                    <a href="{$home}/enDetalle/{$catedra['id']}"> Ver en detalle </a>
                  {else}
                    - {$carrera['nombre']} 
                    - Link: <a href="http://{$catedra['link']}" target="_blank"> {$catedra['link']} </a>
                    - Cantidad de alumnos: {$catedra['cant_alumnos']}
                  {/if}
                  {if $sesion_activa}
                    <a href="eliminarCatedra/{$catedra['id']}">BORRAR</a> | 
                    <a href="editarCatedra/{$catedra['id']}">EDITAR</a>
                  {/if}
                </li>
              </ul>
            </li>
          {/foreach}
        {/foreach}
      </ul>
    </div>

  {if $sesion_activa}
    {include file="agregarCatedraForm.tpl"}
  {/if}

{include file="footer.tpl"}
