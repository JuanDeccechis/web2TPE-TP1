{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <div class="container">
      <ul class="list-group">
            {foreach from=$Elementos item=catedra}
              {if isset($catedra['descripcion'])}
                <li class="list-group-item">CARRERA - {$catedra['id']} - {$catedra['nombre']} </li>
              {else}
                <li class="list-group-item">
                  <ul class="list-group">
                    <li class="list-group-item">CATEDRA - {$catedra['id']} - {$catedra['nombre']} </li>
                  </ul>
                </li>
              {/if}

            {/foreach}
      </ul>
    </div>

{include file="footer.tpl"}
