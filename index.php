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
          </div>
          <div class="the_article_content">
          <?php the_content(''); ?>
          </div>
          <div class="the_more right"><a href="<?php the_permalink(); ?>" class="more-link"><i class="fa fa-share"></i> 続きを読む</a></div>
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