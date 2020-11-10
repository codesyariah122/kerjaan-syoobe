<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<title>
			<?php if   ( is_home() )     { bloginfo('name'); echo ' - '; bloginfo('description'); }
				elseif ( is_category() ) { single_cat_title(); echo ' - '; bloginfo('name'); }
				elseif ( is_single() )   { single_post_title(); echo ' - '; bloginfo('name'); }
				elseif ( is_page() )     { single_post_title(); echo ' - '; bloginfo('name'); } 
                else                     { wp_title('', true); } 
            ?>
		</title>
		<?php wp_head(); ?>
	</head>

	<body <?=body_class()?>>
	
			<?php 
				$dir = 'template';
					require_once $dir.'/navbar.php';
					require_once $dir.'/content.php';
					require_once $dir.'/footer.php';
			?>

	
	
		<!-- Load Bootstrap Javascript -->
		<?php wp_footer(); ?>
	</body>
</html>