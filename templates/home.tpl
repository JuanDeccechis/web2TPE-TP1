{include file="header.tpl"}

    <h1>{$Titulo}</h1>

    <div class="container">
      <ul class="list-group">
            {foreach from=$Elementos item=carrera}
                <li class="list-group-item">{$carrera['nombre']} ----- {$carrera['descripcion']}
                  <a href="mostrarUna/{$carrera['id']}"> Ver catedras </a>
                </li>
            {/foreach}
      </ul>
    </div>

{include file="footer.tpl"}
