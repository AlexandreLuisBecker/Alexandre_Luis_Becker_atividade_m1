<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
            <!-- PAGE INFO -->
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>BibliotecaTop</title>
          
            <!-- ÍCONES -->
            <link rel="stylesheet" href="/fonts/style.css" />
          
            <!-- SWIPER -->
            <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
          
            <!-- STYLES -->
            <link rel="stylesheet" href="/css/style.css" />
          
            
            <!-- FONTS -->
            <link rel="preconnect" href="https://fonts.gstatic.com" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" />
          
            <!-- JQUERY -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
          
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
          
          </head>
    <body>
        <header id="custom-header">
            <nav id="custom-nav" class="custom-container">
              <a class="custom-logo" href="#">Biblioteca<span>TOP</span> </a>
              <!-- menu -->
              <div class="custom-menu">
                <ul class="custom-grid">
                  <li>
                    <a href="autor" class="custom-title">Autores</a>
                  </li>
                  <li>
                    <a href="editora" class="custom-title">Editoras</a>
                  </li>
                  <li>
                    <a href="livro" class="custom-title">Livros</a>
                  </li>
                  <li>
                    <a href="#contact" class="custom-title">Contato</a>
                  </li>
                </ul>
              </div>
              <div class="custom-toggle icon-menu"></div>
              <div class="custom-toggle icon-close"></div>
            </nav>
          </header>
          <main>
    <section class="custom-section" id="home">
      <div class="custom-container custom-grid">
      
            <h1>Seu Livro Esta Aqui!</h1>
            <div class="custom-image">
                <img src="https://images.unsplash.com/photo-1629830639445-d6c5f21006f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YmlibGlvdGVjYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Livros na estante" />
              </div>
        </div>
      </div>

<div class="divider-2"></div>

<section class="custom-section" id="contact">
<div class="custom-container custom-grid">
<div class="custom-text">
  <h2 class="custom-title">Entre em contato com a gente!</h2>
  <p>
    Entre em contato com a <strong>Biblioteca<span>Top</span></strong>, queremos tirar suas dúvidas, ouvir suas críticas e sugestões
  </p>
  <a href="https://api.whatsapp.com/send?phone=+5547996707022&text=Oi! Gostaria de agendar um horário" class="custom-button" target="_blank">
    <i class="icon-whatsapp"></i>
    Entrar em contato
  </a>
</div>
<div class="custom-links">
  <ul class="custom-grid">
    <li><i class="icon-phone"></i> 47 99670-7022</li>
    <li><i class="icon-map-pin"></i> R. Eurico Gaspar Dutra, 137</li>
    <li><i class="icon-mail"></i> contato@bibliotecatop.com</li>
  </ul>
</div>
</div>
</section>

<div class="divider-1"></div>
</main>

<footer class="custom-section">
<div class="custom-container custom-grid">
<div class="brand">
<a href="#home" class="logo logo-alt">
  Bliblioteca<span>TOP</span>
</a>
<p>&#169; 2022 BibliotecaTop</p>
<p>Todos os direitos reservados.</p>
</div>
<div class="social">
<a href="https://instagram.com" target="_blank">
  <i class="icon-instagram"></i>
</a>
<a href="https://facebook.com" target="_blank">
  <i class="icon-facebook"></i>
</a>
<a href="https://youtube.com" target="_blank">
  <i class="icon-youtube"></i>
</a>
</div>
</div>
</footer>

<a href="#home" class="back-to-top">
<i class="icon-arrow-up"></i>
</a>


<!-- SWIPER -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- scrollreveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<script src="/js/main.js"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->
<script>
$(document).on('click', '#insere_agenda', function() {
var dataForm = $('#create_form').serialize();
$.ajax({
data: dataForm,
type: "post",
url: "create_agenda.php",
success: function(response) {
  alert('Dados Salvos!');
  //alert(response);
}
});

});
</script>
   
   
      
    </body>
</html>
