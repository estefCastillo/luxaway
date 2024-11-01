<section class="search">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
 <input type="text" placeholder="Buscar…" value="<?php
the_search_query(); ?>" name="s" id="s" />
 <button type="submit" id="searchsubmit">Buscar</button>
 </form>
</section>

<section id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') )
: ?>
 <?php endif; ?>

 <h2>El mundo te espera, ¿qué estás esperando?</h2>
 <?php randomDestinos(); ?>

<section id="imagenes">
<article class="imagenes">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
 </article>
</section>
 <p></p>
</section>