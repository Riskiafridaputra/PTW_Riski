@extends('layout.v_template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>

<!-- Navbar -->


<!-- Sidebar -->


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Apa itu Laravel?</h1>
      <p>
Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website. 

PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel  selalu memunculkan teknologi baru di antara framework PHP lainnya Source: www.maxoffsky.com 

Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. 

Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat developer maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.

Laravel mengubah pengembangan website menjadi lebih elegan, ekspresif, dan menyenangkan, sesuai dengan jargonnya “The PHP Framework For Web Artisans”. Selain itu, Laravel juga mempermudah proses pengembangan website dengan bantuan beberapa fitur unggulan, seperti Template Engine, Routing, dan Modularity..</p>
    </div>
  
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Manfaat Laravel untuk Proses Pengembangan Website</h1>
      <p>Laravel menawarkan beberapa keuntungan ketika Anda mengembangkan website menggunakan dasar framework ini.

Pertama, website menjadi lebih scalable (mudah dikembangkan).
Kedua, terdapat namespace dan tampilan yang membantu Anda untuk mengorganisir dan mengatur sumber daya website. 
Ketiga, proses pengembangan menjadi lebih cepat sehingga menghemat waktu karena Laravel dapat dikombinasikan dengan beberapa komponen dari framework lain untuk mengembangkan website.
Source: www.laracast.com .</p>
    </div>
    
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">2 Tools Andalan Laravel</h1>
      <p>Selain itu, ada dua tools Laravel yang jarang dimiliki oleh framework lain (kecuali Symphony), yaitu Composer dan Artisan. Apa kegunaan masing-masing dari tool tersebut?.</p>
    </div>
    
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">1. Composer</h1>
      <p>Composer merupakan tool yang di dalamnya terdapat dependencies dan kumpulan library. Seluruh dependencies disimpan menggunakan format file composer.json sehingga dapat ditempatkan di dalam folder utama website. Inilah mengapa composer terkadang dikenal dengan dependencies management.

Pertanyaannya lain, apa itu dependencies management?

Misalnya Anda mempunyai sebuah website yang membutuhkan sebuah library. Saya ambil contoh library untuk mengimplementasikan validasi dan proteksi untuk spamming, yaitu Google reCaptcha.

Tentu saja untuk menyediakan Google reCaptcha tidak bisa menggunakan satu library saja, tapi membutuhkan beberapa library. Anda tidak mungkin menginstall satu per satu library, kan?

Nah! Composer membantu Anda untuk menginstall library yang dibutuhkan oleh library Google reCaptcha. Jadi jika menggunakan composer Anda tinggal menginstall library Google reCaptcha dan secara otomatis library lain akan terinstall.

Begitu pun ketika ingin memperbarui library, Anda cukup menggunakan perintah “$ composer update” dan satu per satu library akan diperbarui secara otomatis.</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">2. Artisan</h1>
      <p>Sudah pernah mendengar ini? Artisan merupakan command line interface yang dimiliki oleh Laravel. Artisan mencakup sekumpulan perintah yang membantu Anda untuk membangun sebuah website atau aplikasi web.

Kumpulan perintah Artisan juga termasuk penggabungan dengan framework Symphony yang menghasilkan fitur add-on di Laravel 5.1 (sekarang sudah masuk ke versi Laravel 5.8). Dengan adanya fitur add-on, Anda bisa menambahkan berbagai macam fitur baru ke Laravel.</p>
    </div>
    
  </div>
  <!-- Pagination -->
  
  

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>

@endsection