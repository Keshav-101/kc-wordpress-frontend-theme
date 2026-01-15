<?php get_header(); ?>

<main style="padding:20px;">
  <h2>Latest Posts</h2>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article style="background:#fff;padding:15px;margin-bottom:10px;">
      <h3><?php the_title(); ?></h3>
      <p><?php the_excerpt(); ?></p>
    </article>
  <?php endwhile; else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
