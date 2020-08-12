<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nuestra Empresa</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/empresa.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,800" rel="stylesheet">
	

  </head>

  <body id="equipo">-
  
   <!-- Navigation -->
 
      <?php include 'inc/cabecera.php'; ?>

<div class="bg"></div>
   	  <div class="jumbotron">
		  <div class="jumbosvg2" >  
 <h2 class="equipo"> EQUIPO <BR> DE TRABAJO</h2>
</div>
</div>
    
   

<!-- Container (About Section) -->
	  <div class="row margingg">
          <div class="col-lg-6">
            <img class="img-fluid " src="img/Imagen1.png" alt="">
          </div>
          <div class="col-lg-6 margingg">
        <h3 class="slideanim">Nuestro equipo esta formado por Pablo Soler, Guillem Filella, David Moya y Albert Ferran. Somos 4 estudiantes de Multimedia de 2o curso, en la Universidad Politecnica de Cataluña.</h3>
        <h3 class="slideanim" >Un equipo con interes para aprender, mejorar y trabajar conjuntamente para realizar proyectos y trabajos de calidad.</h3>
        <h3 class="slideanim" >Nos reunimos para trabajar conjuntamente y aportar ideas para posibles empresas, diseños, etc.</h3>
      </div>
      </div>
	  
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>servicios</h2>
  <h4>Qué ofrecemos?</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <h4>MODELADO 3D</h4>
      <p>iluminación texturizado animacion...... </p>
    </div>
    <div class="col-sm-4">
      <h4>DISEÑO GRAFICO</h4>
      <p>procesado de imagen, creaciones..</p>
    </div>
    <div class="col-sm-4">
      <h4>PROGRAMACIÓN</h4>
      <p>javascript, html5, css, boostrap 4, ...</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>VIDEO</h4>
      <p>pre, produccion y post...</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>ANIMACIÓN 2D</h4>
      <p>ToomBoon Animate... after Effects</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Lo que hemos creado</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/render 6.jpg" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>more info...</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/render 2.jpg"  width="400" height="300">
        <p><strong>New York</strong></p>
        <p>more info...</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/render 3.jpg"  width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>more info...</p>
      </div>
    </div>
  </div><br>
  
  <h2>Qué dicen nuestros clientes?</h2>
  <div id="myCarousel" class=" slide text-center" >
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>
  </div>
</div>

 <?php include 'inc/pie.php'; ?>






    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"> </script>
<script>
	  $(document).ready(function() {
        
            var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});
        
        }); 
	  
	  
	  
	  </script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
  </body>

</html>
