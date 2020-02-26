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
            <?php the_post();?>
                <div class="title">
                    <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                    <span><b>Writen By:</b> <?php the_author(); ?></span>
                    <br>
                    <span><b>Date:</b> <?php the_date();?></span>
                </div>
            <br>
            <?php endif; ?> 

            <?php if(has_post_thumbnail()): ?>
                <div class="img">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php else:?> 
                <?php echo "Not found"; ?> 
            <?php endif; ?>
                <br>

            <?php if(have_posts()): ?>
            <?php while(have_posts()):?>
                <?php the_post();?>
                    
                    <div class="title_head">
                        <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                <span>Author: <a id="authors" href="<?php the_permalink();?>"><?php the_author();?></a></span>
            <br>
                    <span>Category: </span>
                <?php $caters = get_the_category(); 
                    $output = "";
                    if($caters){
                        foreach($caters as $cater){
                            $output = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                        }
                        echo $output;
                    }
                        ?>
                   
            <?php if(has_post_thumbnail()): ?>
                <div class="img">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php else:?> 
                <?php echo "Not found"; ?> 
            <?php endif; ?>

            <a class="btn" href="<?php the_permalink();?>">Read More...</a>
            <p><?php the_excerpt();?></p>
            </div> 
            <?php endwhile; ?>
        <?php endif; ?>

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