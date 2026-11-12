<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <!-- POST HEADER -->
    <section class="single-hero">
      <div class="wrap">
        <span class="eyebrow">
          <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">victormuhia.co.ke / blog</a>
        </span>
        <h1><?php the_title(); ?></h1>
        <div class="post-meta">
          <span><?php echo esc_html( get_the_date() ); ?></span>
          <?php
          $cats = get_the_category();
          if ( ! empty( $cats ) ) :
            ?>
            <span class="post-meta-dot">&middot;</span>
            <span><?php echo esc_html( $cats[0]->name ); ?></span>
          <?php endif; ?>
          <span class="post-meta-dot">&middot;</span>
          <span><?php echo esc_html( intval( str_word_count( strip_tags( get_the_content() ) ) / 200 ) + 1 ); ?> min read</span>
        </div>
      </div>
    </section>

    <?php if ( has_post_thumbnail() ) : ?>
      <div class="wrap">
        <div class="single-featured-image">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- POST CONTENT -->
    <section id="single-content">
      <div class="wrap">
        <div class="single-content-inner">
          <?php the_content(); ?>
        </div>

        <div class="single-footer">
          <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-ghost">&larr; Back to all posts</a>
          <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary">Book a free audit call</a>
        </div>
      </div>
    </section>

  <?php endwhile; ?>

<?php get_footer(); ?>
