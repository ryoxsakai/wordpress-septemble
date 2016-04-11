<?php get_header(); ?>

<div class="the_body center">
  <div class="the_wrap margin-auto">
    <div class="the_content">
      <?php while(have_posts()): the_post(); ?>
      <div class="the_card">
        <div class="the_thumbnail"><?php the_post_thumbnail('full'); ?></div>
        <div class="the_article">
          <div class="center">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-meta font-dosis center">
              <span class="post-calendar"><i class="fa fa-calendar"></i> <?php the_date('Y/m/d'); ?></span><span class="post-category"><i class="fa fa-pencil"></i> <?php the_category(' / '); ?></span>
            </p>
            <div class="the_socialcount"><span>PLEASE HAVE A SHARE!</span>
             <div class="likes"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook-square"></i> likes</a></div>
              <div class="tweets"><a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a></div>
              <div class="hatena"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-hatena"></i> hatena</a></div>
              <div class="gplus"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><i class="fa fa-google-plus"></i> google+</a></div>
            </div>
          </div>
          <div class="the_article_content">
          <p>Dear My Friends</p>
          <?php the_content(''); ?>
          <p id="ink">Sincerely,<br /><img src="/p/2016/04/ink.png" /></p>
            <div class="the_socialcount" style="margin-bottom:20px"><span>ぜひシェアをお願いします！</span>
             <div class="likes"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook-square"></i> likes</a></div>
              <div class="tweets"><a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a></div>
              <div class="hatena"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-hatena"></i> hatena</a></div>
              <div class="gplus"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><i class="fa fa-google-plus"></i> google+</a></div>
            </div>
          </div>
          <div class="article_footer">
            <h3>Recommendation!</h3>
            <?php query_posts('showposts=3&orderby=rand'); ?>
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <p class="flex-center"><a href="<?php the_permalink();?>"><div class="the_minithumbnail"><?php the_post_thumbnail(array('125','125')); ?></div><div class="the_title"><?php the_title(); ?></div></a></p>
            <?php endwhile;endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="the_sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>