      <!-- MENU NABVAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
          <a class="navbar-brand" href="#">
            <img src="../img/Muscle.png" width="60" height="50" alt=""> Bienvenido <?php echo $_SESSION['username']; ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">

      <?php if(!isset($_SESSION["user_id"])):?>
      <!--si no estoy logeado me manda a registrarme o a ingresar-->
      <li class="nav-item">
        <a class="nav-link" href="./registro.php">¿NO ESTAS REGISTRADO?</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./login.php">INGRESO</a>
      </li>

    <?php else:?>
    <!--Si estoy logeado muestra estos links-->
     <li class="nav-item">
       <a class="nav-link" href="./home.php"> HOME</a>
      </li>
      
     <li class="nav-item">
       <a class="nav-link" href="./QR/index.php"> QRcode</a>
      </li>

     <li class="nav-item">
       <a class="nav-link" href="./bootstrap.php">Bootstrap</a>
      </li>

     <li class="nav-item">
       <a class="nav-link" href="./sweetalert.php"> Sweetalert</a>
      </li>

     <li class="nav-item">
       <a class="nav-link" href="./particulas.php"> Particulas JS</a>
      </li>

     <li class="nav-item">
       <a class="nav-link" href="./javascript.php"> aprendiendo javascript</a>
      </li>



     <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi Perfil</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">My Perfil</a>
                    <a class="dropdown-item" href="#">Chat</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"> Cerrar Cesion</a>
                  </div>
              </li>
              <?php endif;?>
            </ul>
          </div>
        </nav>


      
      
      
      
      <!-- este es un script de javascript para mostrar un relog  -->

      <button type="button" class="btn btn-success navbar-btn" id="reloj" >

      <script>
      $( document ).ready(function(){
       
      //Evento que actualiza el reloj cada un segundo
      setInterval(actualizarReloj,1000);
     
      //Función para actualizar el reloj
      function actualizarReloj(){
        fechaActual = new Date();
        hora = fechaActual.getHours()
        minuto = fechaActual.getMinutes()
        segundo = fechaActual.getSeconds()
       
        $('#reloj').text(hora + ':' + minuto + ':' + segundo);
      }
       
      //Actualizamos al iniciar la página
      actualizarReloj();
    });
 
  </script>
  </button>


