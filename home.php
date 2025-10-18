<?php get_header(); ?>

<h1>Hello, Digital School!</h1>
<main class="blog-list">
    <h1 class="blog-title">Lastest Blog Post</h1>

    <?php if( have_posts()  ):?>
        <?php while( have_posts() ): the_post(); ?>
        <acticle <?php post_class('blog-item') ?>>
            <h2 class="blog-item_title">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h2>
        
            <p class="blog-item_excerpt">
                <?php the_excerpt();?>
            </p>
        </acticle>
        <?php endwhile; ?>

        <nav class="pagination">
            <?php the_posts_pagination();?>
        </nav>

        <?php else:?>
            <p>No post found</p>
    <?php endif;?>
</main>
<?php get_footer(); ?>