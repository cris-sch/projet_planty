<?php
/**
 * Template Name: Template nous rencontrer 
 
 */

get_header();
?>

<main id="site-content">

<div class="image">
        <img src="<?php get_stylesheet_directory_uri()."images/trefle.jpg" ?>">
</div>
    <h1>Nous rencontrer</h1>

<section id="quisuisje">
    
    <div class="text">
        <p>Chez Planty nous sommes tous passionnés par le bien-être, et ça se retrouve dans nos boissons ! 
        Notre start-up s’est construite au fur et à mesure de rencontres entre amoureux des plantes.</p>
        
    </div>
</section>
<section id="bricolage">
    <h2>L'equipe</h2>
    <div class="image">
        <img src="images/branche.jpg">
    </div>
  
</section>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
