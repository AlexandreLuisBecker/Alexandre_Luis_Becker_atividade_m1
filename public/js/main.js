/**
 * abre e fecha o menu quando clicar no
 * icone do hamburguer ou X
 */

 const nav = document.querySelector('#custom-header nav')
 //console.log(nav)
 
 const toggle = document.querySelectorAll('nav .custom-toggle')
 //console.log(toggle)
 
 for (const element of toggle) {
   element.addEventListener('click', function () {
     nav.classList.toggle('show')
   })
 }
 
 /**
  * quando clicar em um dos itens do menu, esconder/fechar
  * o menu
  */
 
 const links = document.querySelectorAll('nav ul li a')
 //console.log(links)
 for (const link of links) {
   link.addEventListener('click', function () {
     nav.classList.remove('show')
   })
 }
 
 /**
  * mudar o header da página quando der scroll
  */
 
 const header = document.querySelector('#custom-header')
 const navHeight = header.offsetHeight
 
 function changeHeaderWhenScrool() {
   if (window.scrollY >= navHeight) {
     // scroll da página for maior que a altura
     // do header
     header.classList.add('scroll')
   } else {
     // menor que altura do header
     header.classList.remove('scroll')
   }
 }
 
 /* Testimonials carousel slider swiper */
 const swiper = new Swiper('.swiper-container', {
   slidesPerView: 1,
   pagination: {
     el: '.swiper-pagination'
   },
   mousewheel: true,
   keyboard: true
 })
 
 /* ScrollReveal: Mostrar elementos quando der scroll na página */
 const scrollReveal = ScrollReveal({
   origin: 'top',
   distance: '30px',
   duration: 700,
   reset: true
 })
 
 scrollReveal.reveal(
   `#home .custom-image, #home .custom-text,
   #about .custom-image, #about .custom-text,
   #services custom-header, #services .custom-card,
   #testimonials custom-header, #testimonials .testimonials
   #contact .custom-text, #contact .custom-links
   `,
   { interval: 100 }
 )
 
 /* Botão back-to-top */
 function backToTop() {
   const backToTopButton = document.querySelector('.back-to-top')
 
   if (window.scrollY >= 560) {
     backToTopButton.classList.add('show')
   } else {
     backToTopButton.classList.remove('show')
   }
 }
 
 /* Menu ativo conforme a seção visível na página */
 const sections = document.querySelectorAll('main section[id]')
 function activateMenuAtCurrentSection() {
   const checkpoint = window.pageYOffset + (window.innerHeight / 8) * 4
 
   for (const section of sections) {
     const sectionTop = section.offsetTop
     const sectionHeight = section.offsetHeight
     const sectionId = section.getAttribute('id')
 
     const checkpointStart = checkpoint >= sectionTop
     const checkpointEnd = checkpoint <= sectionTop + sectionHeight
 
     if (checkpointStart && checkpointEnd) {
       document
         .querySelector('nav ul li a[href*=' + sectionId + ']')
         .classList.add('active')
     } else {
       document
         .querySelector('nav ul li a[href*=' + sectionId + ']')
         .classList.remove('active')
     }
   }
 }
 
 /* Quando ocorrer o scroll da página */
 window.addEventListener('scroll', function () {
   changeHeaderWhenScrool()
   backToTop()
   activateMenuAtCurrentSection()
 })
 