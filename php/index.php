<?php
//Name: Codigo para efecto reveal on scroll.php 
// Add : fragmento de codigo
// Agregar este código en un nuevo snippet, marcado para ejecutarse en el hook 'wp_enqueue_scripts'
function add_aos_library() {
    // Cargar el CSS de AOS
    wp_enqueue_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');
    
    // Cargar el JavaScript de AOS
    wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), '2.3.4', true);
    
    // Inicializar AOS
    wp_add_inline_script('aos-js', '
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                duration: 1000,
                offset: 120,
                once: true,
                easing: "ease-in-out"
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'add_aos_library');

?>
