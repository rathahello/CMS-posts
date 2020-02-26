<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
</head>
<body>
<div class="header">
       <div class="container-one">
        <h1><?php bloginfo('name') ?></h1>
        <p><?php bloginfo('description');?></p>
        </div>

        <ul>
            <li><?php wp_nav_menu();?></li>
            <div class="search">
                <input type="text" placeholder="Search..">
            </div>
        </ul>
    </div>
    <br>

    <div class="container">
        <?php if(have_posts()):?>
            <?php the_post(); ?> 
            <div class="title">
                <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
            </div>
                <p>Writen by: <?php the_author();?><br></p>
                <p>Date: <?php the_date(); ?></p>
             <br>
        
            <?php if(has_post_thumbnail()):?>
                <div class="img">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php else:?> 
                <?php echo "Not found"; ?> 
            <?php endif; ?>

            <div class="main">
            <p><?php the_content();?></p>
            </div>
   
        <?php else:?>
           <h2><?php  echo "the post not found";
            endif;?>
            </h2>  
     </div>

    <div id="footer">
        <p>Hello WordPress!!!</p>
        <div class="row">
            <div class="col-6">This website say about Technology..</div>
            <div class="col-6">Technology always teach all of you know a lot of knowledge...</div>
        </div>
    </div>
</body>
</html>