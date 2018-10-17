{include file="header.tpl"}

    <h2>{$Titulo}</h2>
    <h4>{$Elementos}</h4>
    <p>Esta carrera tiene catedras dependiendo. Desea eliminar la carrera junto con todas sus catedras?</p>
    <form method="post" action="{$home}/borrarCarreraCompleta/{$Elementos}">
      <button type="submit" class="btn btn-primary">SI</button>
    </form>
    <form method="post" action="{$home}">
      <button type="submit" class="btn btn-primary">NO</button>
    </form>
    

{include file="footer.tpl"}