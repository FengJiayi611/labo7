<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
////CATEGORY-COURS.php
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
            $precedent = 0;
			while ( have_posts() ) :
				the_post();
                $titre = get_the_title();
                $session = substr($titre, 4, 1);
                $contenu = get_the_content();
                $resume = substr($contenu, 0, 200);

                ?>
		       <?php 
                    if($session != $precedent){
                        echo"<p>session : " . $session . "</p>";
                    }
                    $precedent = $session;
               ?>
               <P> <?php echo $session . " - " . $titre; ?> </P>
               <p> <?php echo $resume; ?></p>
            <?php
			endwhile;    
		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
