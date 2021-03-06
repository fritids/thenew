<article id="post-<?php the_ID(); ?>" class="post <?php $class_category; ?>">

	<header>
		<p><span></span><?php comments_popup_link('0','1','%', '','<strong>X</strong>'); ?></p>
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<time datetime="<?php the_time('y');?>-<?php the_time('m');?>-<?php the_time('j'); ?>" pubdate><?php the_time('j'); ?><abbr title="<?php the_time('F') ?>"><?php the_time('M'); ?></abbr><?php the_time('Y'); ?></time> <?php the_category(' ') ?>
	</header>
	
<!-- Debut Vignette thumbnail -->
    
    <!-- Vignette native wordpress -->
    <?php if ( has_post_thumbnail() ) { ?>
        <figure>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"></a>
            <?php the_post_thumbnail(); ?>
        </figure>

    <!-- Vignette plugin "Simple Post Thumbnails" -->
    <?php } elseif ( p75HasThumbnail($post->ID) ) { ?>
	<figure>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"></a>
            <img src='<?php echo p75GetThumbnail($post->ID); ?>' alt='post thumbnail' />
	</figure>

    <?php } else { /* the current post lacks a thumbnail */ } ?>

<!-- Fin Vignette thumbnail -->
	
		<?php the_content('Lire la suite'); ?>

	<footer>
		<nav>
			<a target="_tab" title="Partager sur Facebook" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"><img alt="facebook" src="<?php bloginfo('template_directory'); ?>/images/facebook_16.png"></a>
			<a target="_tab" title="Retweeter" href="http://twitter.com/home?status=RT @remybarthez <?php  the_title(); ?> <?php the_permalink(); ?>"><img alt="twitter" src="<?php bloginfo('template_directory'); ?>/images/twitter_16.png"></a>
			<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
		</nav>
		<p><?php the_tags('tags : ',', ',''); ?></p>
	</footer>

</article>