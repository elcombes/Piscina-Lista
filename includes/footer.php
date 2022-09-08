<footer>
  <nav class="navbar navbar-expand-sm bg-azul navbar-dark justify-content-center">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link" href="galeria.php">Galería de trabajos</a>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">Nuestra empresa</a>
      </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#myModal2" href="#">Contacto</a>
      </li>
    </ul>
  </nav>
  <img class="logo-inf" src="images/logo-blanco.svg">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container" style="font-size: 1em;">
            <div class="row text-center">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="frase2">NUESTRA EMPRESA</h2>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">
                <p>Somos una empresa con una gran experiencia en la construcción de Piscinas de Hormigón.</p>
                <p>Nuestro servicio comienza asegurando a nuestros clientes, una comunicación permanente y una supervisión constante de nuestras obras en construcción.</p>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">
                <img style="max-width: 140px;" class="img-fluid logo01" src="images/logo-color.svg">
              </div>
            </div>
            <div class="row text-center">
              <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container" style="font-size: 1em;">
            <div class="row text-center">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="frase2">Contáctanos</h2>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Nombre</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Email</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Comentarios</label>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="text-center text-md-left">
                  <!-- <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a> --> <a class="btn btn-success" onclick="">Enviar</a>
                </div>
                <div class="status"></div>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">
                <img style="max-width: 140px;" class="img-fluid logo01" src="images/logo-color.svg">
              </div>
            </div>
            <div class="row text-center" >
              <button style="margin: 0 auto;" type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>