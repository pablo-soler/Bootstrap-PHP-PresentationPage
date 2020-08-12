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

  <body id="videos">-
	    <?php include 'inc/cabecera.php'; ?>
    <br> <br> <br>
    <div class="container">

 <div class="bg-grey p-4 my-4"> 
		 <h2 class="text-center text-lg text-uppercase my-0">Nuestros
          <strong>videos</strong>
        </h2>
		 <div class="row">
          <div class="col-lg-12">
          
          <div class="card-body text-center">
                <h4 class="card-title m-0">Video version Aplicacion
                  <small class="text-muted">Creado para Apple</small>
                </h4>
          </div>
          
            <video controls class="img-fluid">
                   <source src="videos/descripcion prototipo movil.mp4"  type="video/mp4" >
                </video>  
          </div>
          
        </div>
      </div>

      <div class="bg-grey p-4 my-4">
        <div class="row">
          <div class="col-lg-12">
          
            <div class="card-body text-center">
                <h4 class="card-title m-0">Video version Escritorio
                  <small class="text-muted">Creado para Windows</small>
                </h4>
              </div>
              
              <video controls class="img-fluid slideanim">
                   <source src="videos/escritorio fondo.mp4"  type="video/mp4" >
                </video>  
              
            </div>
		
		
		</div>
		</div>
		
		 <div class="bg-grey p-4 my-4">
        <div class="row">
          <div class="col-lg-12 slideanim videoWrapper">
          
            
              
             <iframe width="599" height="100%" src="https://www.youtube.com/embed/SDFWYdCBe9U" frameborder="0" allowfullscreen></iframe> 
              
            </div>
		
		
		</div>
		</div>
		
		 <div class="bg-grey p-4 my-4">
        <div class="row">
          <div class="col-lg-12 slideanim videoWrapper">
          
           
              
             <iframe src="https://player.vimeo.com/video/198198260?color=ffffff" width="100%" height="600" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
              
            </div>
		
		
		</div>
		</div>
		
		
		
      <div class="bg-grey p-4 my-4" >

        <h2 class="text-center text-lg text-uppercase my-0">Nuestros
          <strong>banners</strong>
        </h2>
		<br>
        <div class="row">
           <div class="col-md-6">
            <div class="card h-100">
              <div style="width: 100%;">
               <div style="position: relative; padding-top: 0; padding-bottom: 140%; height: 0;">
              <img class="cartelillo" src="img/Cartel 2.jpg">
               </div>
              </div>
              <div class="card-body text-center">
               <a class="btn btn-lg colorbtn botonc" href="https://www.bestbuy.com/"> COMPRAR </a>
              </div>
            </div>
          </div>
          
          
          <div class="col-md-6">
            <div class="card h-100">
              <div style="width: 100%;">
               <div style="position: relative; padding-bottom: 140%; padding-top: 0; height: 0;">
              <img class="cartelillo" src="img/E2.1.jpg">
               </div>
              </div>
              <div class="card-body text-center">
                <a class="btn btn-lg colorbtn botonc" href="https://www.bestbuy.com/"> COMPRAR </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
   





    <!-- /.container -->

    <?php include 'inc/pie.php'; ?>


    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"> </script>
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
