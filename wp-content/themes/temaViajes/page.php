<?php
get_header(); 
?>
<div class="page">

<div class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            echo '<h1>' . get_the_title() . '</h1>';
            the_content();
        endwhile;
    endif;
    ?>
</div>
<div class="sidebar">
<?php
get_sidebar(); 
?>
</div>
</div>

<?php
get_footer(); 
?>
