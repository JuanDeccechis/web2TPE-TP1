{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <h4>{$Car}</h4>
    <form method="post" action="{$home}/borrarCarreraCompleta/{$Car}"
      <input type="number" name="id_carrera" value="{$Car}">
      <button class="btn btn-primary">SI</button>
    </form>
    <form method="post" action="{$home}">
      <button class="btn btn-primary">NO</button>
    </form>
    

{include file="footer.tpl"}