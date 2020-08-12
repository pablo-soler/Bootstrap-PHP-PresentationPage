<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nuestra Empresa</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/empresa.css" rel="stylesheet">
    
    <!--FUENTE-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,800" rel="stylesheet">

  </head>

  <body id="contacto">

   <!-- Navigation -->
  <?php include 'inc/cabecera.php'; ?>
	  <br> <br> <br> 
	  
	  
	  <!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTo</h2>
  <div class="row ">
    <div class="col-sm-12 text-center ">
      <h5>Contacta con nosotros y le responderemos en menos de 24 horas.</h5>
		<br>
      <h4><span class="glyphicon glyphicon-map-marker"></span> Barcelona</h4>
      <h4><span class="glyphicon glyphicon-phone"></span> +00 1515151515</h4>
      <h4><span class="glyphicon glyphicon-envelope"></span> bailongosproject@gmail.com</h4>
		<img  class="cososvg slideanim" src="img/LOGOAMARILLO.svg">
    </div>
	   
  </div>
</div>

	  
	  

     
        <div class="row">
          <div class="col-sm-12" style="height:400px;width:100%;" >
            
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1421090610215!2d-73.98731968416575!3d40.758899042681094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses!2ses!4v1511432426007" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            
          </div>
         

      </div>

		<div id="contact" class="container-fluid ">
  <h2 class="text-center"></h2>
  <div class="row ">
    <div class="col-sm-12 text-center ">
   <form>
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Nombre</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Dirección Email </label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Teléfono</label>
              <input type="tel" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Mensaje</label>
              <textarea class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn colorbtn">Enviar</button>
            </div>
          </div>
        </form>
    </div>
	   
  </div>
</div>
       

    <!-- /.container -->

    <?php include 'inc/pie.php'; ?>


    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>
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
