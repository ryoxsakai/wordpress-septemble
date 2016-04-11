<?php

$sidebar = array(
    'name'			=> 'Widget 1',
    'id'			=> 'sidebar-1',
    'description'	=> 'Widget Area',
    'before-widget'	=> '<div id="%1$s" class="widget %2$s">',
    'after-widget'	=> '</div>',
    'before_title'	=> '<h2 class="widget title">'
);

register_sidebar($sidebar);

add_custom_background();

add_theme_support( 'menu' );

register_nav_menu('header-navi', 'ヘッダーのナビゲーション');

add_theme_support( 'post-thumbnails');
set_post_thumbnail_size( 360, 720, true );

define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/default_header.jpg');

add_theme_support( 'custom-header' );

function my_function_admin_bar(){
return false;
}

add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// more をトップから表示する
function remove_more_jump_link($link) {
    $offset = strpos($link, '#more-');
    if ($offset) {
        $end = strpos($link, '"',$offset);
    }
    if ($end) {
        $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

add_filter('the_content', 'adMoreReplace');
function adMoreReplace($contentData) {    
 
$adTags = <<< EOF

<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4954652341826837";
/* 250x250 */
google_ad_slot = "9116372709";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
 
EOF;
 
    $contentData = preg_replace('/<span id="more-[0-9]+"><\/span>/', $adTags, $contentData);
    $contentData = str_replace('<p></p>', '', $contentData);
    $contentData = str_replace('<p><br />', '<p>', $contentData);   
 
    return $contentData;
}

function sakainote_diff( $from, $to = '' ) {
    if ( empty($to) )
        $to = time();
    $diff = (int) abs($to - $from);
    // 条件: 3600秒 = 1時間以下なら (元のまま)
    if ($diff <= 3600) {
        $mins = round($diff / 60);
        if ($mins <= 1) {
            $mins = 1;
        }
        $since = sprintf(_n('%s min', '%s mins', $mins), $mins);
    }
    // 条件: 86400秒 = 24時間以下かつ、3600秒 = 1時間以上なら (元のまま)
    else if (($diff <= 86400) && ($diff > 3600)) {
        $hours = round($diff / 3600);
        if ($hours <= 1) {
            $hours = 1;
        }
        $since = sprintf(_n('%s hour', '%s hours', $hours), $hours);
    }
    // 条件: 604800秒 = 7日以下かつ、86400秒 = 24時間以上なら (条件追加)
    elseif (($diff <= 604800) && ($diff > 86400)) {
        $days = round($diff / 86400);
        if ($days <= 1) {
            $days = 1;
        }
        $since = sprintf(_n('%s day', '%s days', $days), $days);
    }
    // 条件: 2678400秒 = 31日以下かつ、2678400秒 = 7日以上なら (条件追加)
    elseif (($diff <= 2678400) && ($diff > 604800) ) {
        $weeks = round($diff / 604800);
        if ($weeks <= 1) {
            $weeks = 1;
        }
        $since = sprintf(_n('%s週間', '%s週間', $weeks), $weeks);
    }
    // 条件: 31536000秒 = 365日以下かつ、2678400秒 = 31日以上なら (条件追加)
    elseif (($diff <= 31536000) && ($diff > 2678400) ) {
        $months = round($diff / 2678400);
        if ($months <= 1) {
            $months = 1;
        }
        $since = sprintf(_n('約%sヶ月', '約%sヶ月', $months), $months);
    }
    // 条件: 31536000秒 = 365日以上なら (条件追加)
    elseif ($diff >= 31536000) {
        $years = round($diff / 31536000);
        if ($years <= 1) {
            $years = 1;
        }
        $since = sprintf(_n('約%s年', '約%s年', $years), $years);
    }
    return $since;
}

function getsocialcount(){

$source_url = urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
 
$get_facebook = 'http://api.facebook.com/restserver.php?method=links.getStats&urls=' . $source_url;
$xml = file_get_contents($get_facebook);
$xml = simplexml_load_string($xml);
$likes = $xml->link_stat->like_count;
 
$get_twitter = 'http://urls.api.twitter.com/1/urls/count.json?url=' . $source_url;
$json = file_get_contents($get_twitter);
$json = json_decode($json);
$tweets = $json->{'count'};

$get_hatebu = 'http://api.b.st-hatena.com/entry.count?url=' . $source_url;
$hatebu = file_get_contents($get_hatebu);

$get_google = 'https://apis.google.com/_/+1/fastbutton?url=' . $source_url;
$google = file_get_contents($get_google);
preg_match( '/\[2,([0-9.]+),\[/', $google, $count );
$gplus = $count[1];

$socialcount = $likes + $tweets + $hatebu + $gplus;

return $socialcount;

}

function tweakjp_custom_twitter_site( $og_tags ) {
    $og_tags['twitter:site'] = '@x93mg';
    return $og_tags;
}
add_filter( 'jetpack_open_graph_tags', 'tweakjp_custom_twitter_site', 11 );

function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

//キャプチャ（幅150）　browser-shot互換あり
function api_sc_shot ($attributes) {
	extract(shortcode_atts(array(
		'url' => '',
	), $attributes));
	$imageUrl = sc_shot ($url);
	if ($imageUrl == '') {
		return '';
	} else {
		return '<div class="browser-shot"><a href="' . $url . '" target="_blank" ><img src="' . $imageUrl . '" alt="' . $url . '" ></a></div>';
	}
}
function sc_shot ($url = ''){
		return 'http://s.wordpress.com/mshots/v1/' . urlencode(clean_url($url)) . '?w=200';
	}
add_shortcode('browser-shot', 'api_sc_shot');

?>