<?php get_header(); ?>

  <!-- BLOG HERO -->
  <section class="blog-hero">
    <div class="wrap">
      <span class="eyebrow">victormuhia.co.ke / blog</span>
      <h1>Notes on SEO &amp; WordPress</h1>
      <p class="lead">Practical write-ups on technical SEO, site performance, and building WordPress sites that actually rank.</p>
    </div>
  </section>

  <!-- POST GRID -->
  <section id="blog-list">
    <div class="wrap">

      <?php if ( have_posts() ) : ?>

        <div class="post-grid">
          <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class( 'post-card' ); ?>>
              <a href="<?php the_permalink(); ?>" class="post-card-thumb">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium_large' ); ?>
                <?php else : ?>
                  <div class="post-card-thumb-fallback">VM<span class="dot">.</span></div>
                <?php endif; ?>
              </a>

              <div class="post-card-body">
                <div class="post-meta">
                  <span><?php echo esc_html( get_the_date() ); ?></span>
                  <?php
                  $cats = get_the_category();
                  if ( ! empty( $cats ) ) :
                    ?>
                    <span class="post-meta-dot">&middot;</span>
                    <span><?php echo esc_html( $cats[0]->name ); ?></span>
                  <?php endif; ?>
                </div>

                <h2 class="post-card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <p class="post-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>

                <a href="<?php the_permalink(); ?>" class="post-card-readmore">Read post &rarr;</a>
              </div>
            </article>

          <?php endwhile; ?>
        </div>

        <div class="post-pagination">
          <?php
          the_posts_pagination( array(
            'prev_text' => '&larr; Newer',
            'next_text' => 'Older &rarr;',
          ) );
          ?>
        </div>

      <?php else : ?>

        <div class="no-posts">
          <p>No posts published yet — check back soon.</p>
        </div>

      <?php endif; ?>

    </div>
  </section>

<?php get_footer(); ?>
