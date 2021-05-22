@extends('layout.v_template')

@section('content')


<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="mySlides w3-display-container w3-center">
  <img src="{{asset('template')}}/dist/img/photo4.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">QUOTES</h2>
    <p class="w3-opacity"><i>Kebahagiaan</i></p>
    <p class="w3-justify">“Hal yang paling penting adalah menikmati hidupmu, menjadi bahagia, apapun yang terjadi.” - Audrey Hepburn.

Tips: Karena hidup Anda bukan ditentukan oleh orang lain, jadi Anda harus bisa membuat jalan hidup Anda sendiri. Anda yang berhak memutuskan apa yang terbaik untuk Anda. Menjalani hidup yang Anda miliki sebaiknya diikuti dengan kebahagiaan yang bisa Anda dapatkan dari diri sendiri, keluarga, rekan, dan lingkungan sekitar. Tidak ada alasan untuk tidak bahagia bukan?</p>
   

  <!-- The Tour Section -->
  
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

@endsection