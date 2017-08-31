<?php get_header(); ?>
<h2>Blog</h2>
<?php if (have_posts()) : ?>
<ul class="blog-list">
  <?php while (have_posts()) : the_post(); ?>
  <li class="blog-short">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="post-date"><?php echo get_the_date(); ?></p>
    <?php the_content();?>
    <a class="border-button" href="<?php the_permalink(); ?>">Read more &raquo;</a>
  </li>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
<?php get_footer(); ?>
