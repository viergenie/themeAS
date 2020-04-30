<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <?php get_header() ?>
        <title><?php bloginfo('name'); ?></title>
    </head>
<body>
     <?php while(have_posts()) : the_post(); ?>

     
<h1><?php the_title(); ?></h1>
  <?php the_content(); ?>

   <?php endwhile; ?>
</body>
</html>