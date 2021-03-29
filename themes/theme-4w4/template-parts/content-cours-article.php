<?php
/**
 * Template part l'affichage des bloc de cours dans front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
 global $tPropriété;
?>

<article>
	<!--?php the_post_thumbnail('thumbnail');? -->
	<p><?php echo $tPropriété['sigle'] . " - " . $tPropriété['typeCours'] . " - " . $tPropriété['nbHeure'] ; ?></p>
	<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a>
	<p>Session : <?php echo $tPropriété['session']; ?></p>
</article>