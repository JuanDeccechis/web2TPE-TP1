{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <h4>{$Elementos}</h4>
    <form method="post" action="{$home}/borrarCarreraCompleta/{$Elementos}"
      <input type="number" name="id_carrera" value="{$Elementos}">
      <button class="btn btn-primary">SI</button>
    </form>
    <form method="post" action="{$home}">
      <button class="btn btn-primary">NO</button>
    </form>
    

{include file="footer.tpl"}