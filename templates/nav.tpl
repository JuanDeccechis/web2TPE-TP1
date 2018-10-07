<!-- bootstrap nav (botonera) -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <!-- <a class="js-home nav-link"> Home <span class="sr-only">(current)</span> </a> -->
                  <a class="js-home nav-link" href=""> Home <span class="sr-only">(current)</span> </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="js-catedras-admin nav-link"> Cátedras-Admin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" >
                  <a class="js-calendario nav-link"> Calendario<span class="sr-only">(current)</span> </a>
                </li> -->
                <li class="nav-item">
                  <!-- <a class="js-catedras nav-link"> Cátedras <span class="sr-only">(current)</span></a> -->
                  <a class="nav-link" href="mostrarCatedras"> Cátedras <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="https://g3w.exa.unicen.edu.ar/guarani3w/" target="_blank">Guaraní<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.exa.unicen.edu.ar/es/estudios/horarios" target="_blank">Horarios<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.exa.unicen.edu.ar/es/noticias" target="_blank">Noticias<span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                  {if $sesion_activa}
                  <a class="nav-link" href="logout"> Logout <span class="sr-only">(current)</span></a>
                  {else}
                  <a class="nav-link" href="login"> Login <span class="sr-only">(current)</span></a>
                  {/if}
                </li>
                {if not $sesion_activa}
                <li class="nav-item">
                  <a class="nav-link" href="signIn"> Registrarse <span class="sr-only">(current)</span></a>
                </li>
                {/if}
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
