{include file="header.tpl"}

    <h2>{$Titulo}</h2>
    <h4>{$Elementos}</h4>
    <p>Esta carrera tiene catedras dependiendo. Desea eliminar la carrera junto con todas sus catedras?</p>
    <button class="btn btn-primary">
  	  <a href="borrarCarreraCompleta/{$Elementos}" class="eliminar">
  	  SI </a></button>
    <button class="btn btn-primary">
  	  <a href="" class="eliminar">
  	  NO </a></button>
    

{include file="footer.tpl"}