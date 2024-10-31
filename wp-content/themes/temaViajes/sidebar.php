<!-- <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
 <input type="text" placeholder="Buscar…" value="<?php
the_search_query(); ?>" name="s" id="s" />
 <button type="submit" class="icon-only" id="searchsubmit"></button>
 </form> -->

<section id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') )
: ?>
 <?php endif; ?>
 <button>Viaja con nosotros</button>
 <h2>Hacemos lo que amamos</h2>
 <article class="imagenes">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
    <article>
        <h2>Puerto Rico</h2>
        <p>Un gran lugar</p>
    </article>
    <article>
        <h2>Malasia</h2>
    </article>
    <article>
        <h2>Japón</h2>
    </article>
 </article>
 <p></p>
</section>