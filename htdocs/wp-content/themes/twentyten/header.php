<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script language="JavaScript">
function GS1() {
        window.open("http://www.garnerconsulting.com/DMEC_Part1.html",'DMEC Annual International Conference','toolbar=no,location=no,directories=no,status=yes,menubar=no,resizable=no,copyhistory=no,scrollbars=yes,width=600,height=500');
}
function GS2() {
        window.open("http://www.garnerconsulting.com/DMEC_Part2.html",'DMEC Annual International Conference','toolbar=no,location=no,directories=no,status=yes,menubar=no,resizable=no,copyhistory=no,scrollbars=yes,width=600,height=500');
}

function GS3() {
        window.open("http://www.garnerconsulting.com/DMEC_Part3.html",'DMEC Annual International Conference','toolbar=no,location=no,directories=no,status=yes,menubar=no,resizable=no,copyhistory=no,scrollbars=yes,width=600,height=500');
}
function GS4() {
        window.open("http://www.garnerconsulting.com/DMEC_Part4.html",'DMEC Annual International Conference','toolbar=no,location=no,directories=no,status=yes,menubar=no,resizable=no,copyhistory=no,scrollbars=yes,width=600,height=500');
}
</script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><IMG SRC="http://www.garnerconsulting.com/images/logo.gif"></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description">
					<table height="24" width="300"cellspacing="10">
						<tr>
							<td valign="top">
				<!-- BEGIN: Constant Contact Stylish Email Newsletter Form -->
			
				<form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post">
			
	<div style="width: 220px; position: relative; float: left;">	<div style="float: left; width: 150px; padding-right: 12px;"><input type="text" name="ea"  value="join our email list" style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif; font-size:10px; border:1px solid #999999; width: 150px; height: 18px; ">
		</div>	
			<div style="float: left; width: 30px;"><input type="submit" name="go" value="JOIN" class="submit"  style="font-family:Verdana,Arial,Helvetica,sans-serif; font-size:10px;  background-color: #ffffff; color: white; height: 24px;">
		</div></div>
				<input type="hidden" name="m" value="1101967817032">
				<input type="hidden" name="p" value="oi">
				</form>
			
				<!-- END: Constant Contact Stylish Email Newsletter Form -->
	
		</td>
							
								<td valign="top" width="26"><a href="http://www.facebook.com/group.php?gid=111004271279&ref=ts"><IMG SRC="http://www.garnerconsulting.com/images/facebook.png" width="24" border="0" height="24"></a></td>
									<td valign="top" width="26"><a href="http://dmeclegal.wordpress.com/"><IMG SRC="http://www.garnerconsulting.com/images/feed.png" width="24" border="0" height="24"></a></td>
										<td valign="top" width="26"><a href="http://www.linkedin.com/company/102414"><IMG SRC="http://www.garnerconsulting.com/images/linkedin.png" width="24" border="0" height="24"></a></td>
						
							</tr>
						</table>
				</div>
				<div id="access" role="navigation">
				<?php if (function_exists('pixopoint_menu')) {pixopoint_menu();}; ?>
	<?php if (function_exists('pixopoint_menu')) {pixopoint_menu(2);} ?>
				</div><!-- #access -->
			
				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?><br><br>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; ?>
			</div><!-- #branding -->

			
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
