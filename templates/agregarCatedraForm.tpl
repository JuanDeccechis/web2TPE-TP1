<div class="container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <h2>Formulario</h2>
        <form method="post" action="agregarCatedra">
          <div class="form-group">
            <label for="nombreForm">nombre</label>
            <input type="text" class="form-control" id="nombreForm" name="nombreForm" >
          </div>
          <div class="form-group">
            <label for="linkForm">link</label>
            <input type="text" class="form-control" id="linkForm" name="linkForm" >
          </div>

          <!-- <div class="form-group">
            <label for="idCarreraForm">idCarrera</label>
            <input type="text" class="form-control" id="idCarreraForm" name="idCarreraForm" >
          </div> -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="nombreCarreraForm">nombre carrera</label>
                  <select class="form-control" id="nombreCarreraForm" name="nombreCarreraForm">
                    {foreach from=$Elementos item=carrera}
                      <option>{$carrera['nombre']}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary">Crear Catedra</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>