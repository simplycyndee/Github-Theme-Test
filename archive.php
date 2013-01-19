<?php get_header(); ?>


<div id="main">

<?php get_sidebar(); ?>

    <div id="article_list">
        <h1>i'm a category template</h1>
        <?php
        //load in dynamic post content
        //create a 'while' loop to give instructions to wordpress about what to do if it finds posts in the database

        while(have_posts()):
            the_post();
        ?>

        <article> 
            <!-- display each article title-->

            <h1>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </h1>
            
            <!--displays the content-->
            <?php the_excerpt(); ?>

            <!--displays read more link to remainder of article-->
                <p>
                <a href="<?php the_permalink(); ?>" title="Read More">Read More after the jump</a>
                </p>
        </article>

    <?php
    endwhile;
    ?>
    <!--this is the function to generate links to next or previous page-->
    <?php posts_nav_link(); ?>

    </div> <!--#article list-->


</div> <!-- #main -->

<?php get_footer(); ?>

</body>

</html>