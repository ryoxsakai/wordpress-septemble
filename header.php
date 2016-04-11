<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="keywords" content="sakairyo.tokyo, 酒井 リョウ" />
<!-- OGP --><?php $excerption = '酒井リョウの日誌。日々気になったことを記録していきます。'; ?>
<meta property="article:publisher" content="https://www.facebook.com/ryoxsakai" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo str_replace( home_url(), '', get_permalink() ); ?>" />
<meta property="og:title" content="<?php if(is_home()){ bloginfo('name'); }elseif(is_single()){  wp_title('', true, 'right'); } ?>" />
<meta property="og:image" content="<?php if(is_single()){ echo wp_get_attachment_image_src(get_post_thumbnail_id(), true); } ?>" />
<meta property="og:site_name" content="sakainote" />
<meta property="og:description" content="<?php if(is_home()){ echo $exerption; }elseif(is_single()){ the_excerpt(); } ?>" />
<meta property="fb:app_id" content="1590239771197201" />
<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@x93mg" />
<meta name="twitter:creator" content="@x93mg" />
<meta name="twitter:domain" content="sakairyo.tokyo" />
<?php if(is_single()): ?><meta name="twitter:image" content="<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), true); echo $img[0]; ?>" /><?php endif; ?>
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="favicon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/faviconapple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
<link title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/feed/" rel="alternate" type="application/rss+xml" />
<?=$viewport; ?><!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="keywords" content="sakairyo.tokyo, 酒井 リョウ" />
<!-- OGP --><?php $excerption = '酒井リョウの日誌。日々気になったことを記録していきます。'; ?>
<meta property="article:publisher" content="https://www.facebook.com/ryoxsakai" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo str_replace( home_url(), '', get_permalink() ); ?>" />
<meta property="og:title" content="<?php if(is_home()){ bloginfo('name'); }elseif(is_single()){  wp_title('', true, 'right'); } ?>" />
<meta property="og:image" content="<?php if(is_single()){ echo wp_get_attachment_image_src(get_post_thumbnail_id(), true); } ?>" />
<meta property="og:site_name" content="sakainote" />
<meta property="og:description" content="<?php if(is_home()){ echo $exerption; }elseif(is_single()){ the_excerpt(); } ?>" />
<meta property="fb:app_id" content="1590239771197201" />
<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@x93mg" />
<meta name="twitter:creator" content="@x93mg" />
<meta name="twitter:domain" content="sakairyo.tokyo" />
<?php if(is_single()): ?><meta name="twitter:image" content="<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), true); echo $img[0]; ?>" /><?php endif; ?>
<link rel="shortcut icon" href="http://sakainote.com/favicon.ico" />
<link title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/feed/" rel="alternate" type="application/rss+xml" />
<?=$viewport; ?>
<title>
<?php
  if(is_single()){
    wp_title(' # ', true, 'right');
  }
  bloginfo('name');
?>
</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42073412-1', 'sakainote.com');
  ga('send', 'pageview');

</script>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/socialcount.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $('a[href^=#]').click(function() {
    var speed = 400;// ミリ秒
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('html,body').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  var a = 10;
  $(".the_article img").css('maxWidth','100%');
  $('.the_article img, .thumbnail img, .the_card img').removeAttr('height');
  $('.the_article_content ul').addClass('fa-ul');
  $('.the_article_content ul li').prepend('<i class="fa fa-check-circle fa-li"></i> ');
  $(".the_body").css('margin-top',parseInt($(".the_header").css('height'))+20+'px');
  $(".the_sidebar").css('height',$("the_content").css('height'));
  $(".the_card").append('<div class="colorbar flex-center"><div></div><div></div><div></div><div></div><div></div></div>');
  get_social_count_facebook("<?php echo the_permalink(); ?>", "socialarea_facebook");
  get_social_count_twitter("<?php echo the_permalink(); ?>", "socialarea_twitter");
  get_social_count_hatebu("<?php echo the_permalink(); ?>", "socialarea_hatebu");
});
var d = window.document;
if(navigator.userAgent.indexOf('iPhone') > -1)
	d.write('<meta name="viewport" content="width=320px; user-scalable=no" />');
else if(navigator.userAgent.indexOf('iPad') > -1)
	d.write('<meta name="viewport" content="width=device-width; initial-scale=1.0;" />');
</script>
<link rel="author" href="https://plus.google.com/112695717769946796221" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/base.css" media="screen" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
<title>
<?php
  if(is_single()){
    wp_title(' # ', true, 'right');
  }
  bloginfo('name');
?>
</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42073412-1', 'sakainote.com');
  ga('send', 'pageview');

</script>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/socialcount.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $('a[href^=#]').click(function() {
    var speed = 400;// ミリ秒
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('html,body').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  var a = 10;
  $(".article_inner img").css('maxWidth','100%');
  $('.article_inner img, .thumbnail img').removeAttr('height');
  $('.article_inner ul').addClass('fa-ul');
  $('.article_inner ul li').prepend('<i class="fa fa-check-circle fa-li"></i> ');
  $(".the_body").css('margin-top',parseInt($(".the_header").css('height'))+20+'px');
  $(".the_sidebar").css('height',$("the_content").css('height'));
  get_social_count_facebook("<?php echo the_permalink(); ?>", "socialarea_facebook");
  get_social_count_twitter("<?php echo the_permalink(); ?>", "socialarea_twitter");
  get_social_count_hatebu("<?php echo the_permalink(); ?>", "socialarea_hatebu");
});
var d = window.document;
if(navigator.userAgent.indexOf('iPhone') > -1)
	d.write('<meta name="viewport" content="width=320px; user-scalable=no" />');
else if(navigator.userAgent.indexOf('iPad') > -1)
	d.write('<meta name="viewport" content="width=device-width; initial-scale=1.0;" />');
</script>
<link rel="author" href="https://plus.google.com/112695717769946796221" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/base.css" media="screen" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>

<header class="center margin-auto">
  <img id="identification" src="http://gadgtwit.appspot.com/twicon/x93mg/original" />
  <h1 id="title"><a href="http://sakairyo.tokyo/"><span class="rainbow">RYO OF THE DAY</span></a></h1>
  <p class="font-dosis">Wonderful Life in TOKYO.</p>
</header>