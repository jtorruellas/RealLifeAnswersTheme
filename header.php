<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body>
	<div id="headerLogo" >
		Header 1 w/ Logo
	</div><!--#headerLogo-->
	<div id="headerCat" >
		<table class="categoryTable">
			<tr>
				<td class="categoryCell">
					Faith
				</td>
				<td class="categoryCell">
					Repentance
				</td>
				<td class="categoryCell">
					Baptism
				</td class="categoryCell">
				<td>
					Holy Ghost
				</td>
			</tr>
		</table>
	</div><!--#headerCat-->
	<div id="featuredPosts" >
		<table class="featuredPostsTable">
			<tr>
				<td class="featuredPostsCell">
					Faith
				</td>
				<td class="featuredPostsCell">
					Repentance
				</td>
			</tr>
		</table>
	</div><!--#featuredPosts-->
	<div id="featuredPosts2" >
		<table class="featuredPostsTable">
			<tr>
				<td class="featuredPostsCell">
					Baptism
				</td class="featuredPostsCell">
				<td>
					Holy Ghost
				</td>
			</tr>
		</table>
	</div><!--#featuredPosts-->
	<table id="primaryLayout">
		<tr>
			<td id="headerCell" colspan="2">
			
					Yo this is the header
				
