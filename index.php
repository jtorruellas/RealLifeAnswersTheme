<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
?>


			<?php get_header(); ?>
		</td><!--#headerCell-->
	</tr>
	<tr>
		<td id="primaryCell">
			<div id="primary">
				<div id="content" role="main">
					this is index stuff where did you go
				</div>
			</div><!-- #primary -->
		</td>
		<td id="sidebarCell">
			<?php get_sidebar(); ?>
		</td>
	</tr>
	<tr>
		<td id="footerCell" colspan="2">
			<?php get_footer(); ?>