<?php

?>

<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body>
	<main id="site-content" role="main">
	<?php
		while( have_posts() ) {
			the_post();
			?>
			<article>
				<header><?php the_title('<h1>', '</h1>') ?></header>
				<section><?php the_content() ?> </section>
			</article>
			<?php
		}
	?>
	</main>
</body>