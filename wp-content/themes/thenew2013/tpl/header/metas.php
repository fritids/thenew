<?php
global $post;
if(is_singular()) {
    $description = strip_tags(strip_shortcodes($post->post_content));
    $url = get_permalink();
} else {
    $description = get_bloginfo('description');
    $url = site_url();
}
$title = get_bloginfo('name') . ' ' . wp_title('/', 0);
$image = TEMPLATE_URL.'/screenshot.png';
$name = get_bloginfo('name');

?>

<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>" />

<?php // Twitter ?>
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="<?php echo FON_TWITTER_SITE ?>">
<meta name="twitter:creator" content="<?php echo FON_TWITTER_CREATOR ?>">
<meta name="twitter:title" content="<?php echo $title ?>">
<meta name="twitter:description" content="<?php echo $description ?>">
<meta name="twitter:image" content="<?php echo $image ?>">

<?php // Open Graph ?>
<meta property="og:title" content="<?php echo $title ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php echo $name ?>" />
<meta property="og:url" content="<?php echo $url ?>" />
<meta property="og:image" content="<?php echo $image ?>" />

<?php // favicon ?>
<link rel="icon" href="<?php echo ASSETS_URL ?>/img/app-icons/favicon.png" />
<link rel="apple-touch-icon" sizes="256x256" href="<?php echo ASSETS_URL ?>/img/app-icons/icon-256.png" />
<link rel="apple-touch-icon-precomposed" sizes="256x256" href="<?php echo ASSETS_URL ?>/img/app-icons/icon-256.png" />
<link rel="logo" type="image/png" href="<?php echo ASSETS_URL ?>/img/app-icons/logo.png"/>

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content=" black-translucent" />
