<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyInvestBLog
 */

get_header();
?>

<main role="mainpage" class="main-area">
	<section class="grid-12">
		                    <div class="articles-meta">
                            <h1 class="articles-heading">Важное за сегодня</h1>
                            <a href="#" class="articles-link">Все новости</a>
    
                    </div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
