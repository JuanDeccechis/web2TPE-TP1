{include file="header.tpl"}

    <h2>{$Titulo}</h2>
    <div class="container">
      <ul class="list-group">
            {foreach from=$Elementos item=catedra}
              <li class="list-group-item">CATEDRA - {$catedra['id']} - {$catedra['nombre']} - {$catedra['link']} - {$catedra['cant_alumnos']} - {$catedra['id_carrera']} <a href="verDetalle"></a></li>

            {/foreach}
      </ul>
    </div>

{include file="footer.tpl"}
