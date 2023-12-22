<?php
get_header();
// var_dump(is_front_page());
// var_dump(is_home());
?>

<section class="banner">
    <img src="https://www.10wallpaper.com/wallpaper/1920x1080/1208/Aesthetic_Dream_Space_HD_Desktop_wallpaper_06_1920x1080.jpg" alt="Banner da Empresa">
    <div class="hello-world">Hello, World!</div>
    <p>Descrição do Banner</p>
</section>

<section class="values">
    <div class="card">
        <h2>Valor 1</h2>
        <p>Descrição do valor 1</p>
    </div>
    <div class="card">
        <h2>Valor 2</h2>
        <p>Descrição do valor 2</p>
    </div>
    <div class="card">
        <h2>Valor 3</h2>
        <p>Descrição do valor 3</p>
    </div>
</section>


<?php
get_sidebar();
get_footer();
?>