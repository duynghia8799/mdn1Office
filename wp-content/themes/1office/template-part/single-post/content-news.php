<?php
    $relatedPost = new WP_Query (
        array (
            'post__not_in' => array (get_the_ID()),
            'post_type' => 'support_news',
            'posts_per_page' => 4,
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date'
        )
    );
    // echo "<pre>";var_dump($slug_tax);echo "</pre>";die();
?>
<section class="breadcrumb">
    <ul>
        <li>
            <a href="<?php echo esc_url(home_url('/')) ?>support/">
                Trung tâm hỗ trợ
                <span>&rsaquo;</span>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/')) ?>support-news">
                Tin tức nâng cấp sản phẩm
                <span>
                    &rsaquo;
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo get_permalink() ?>" class="active">
                <?php the_title() ?>
            </a>
        </li>
    </ul>
</section>
<div class="main-option" id="post-id-<?=get_the_ID()?>">
    <?php setPostViews(get_the_ID()); ?>
    <?php
        if ( have_posts() ):
        while ( have_posts() ) : the_post();
    ?>
    <div class="center-main">
        <div id="list-tag-of-post">
            <a href="">
                #quanlycongviec
            </a>
            <a href="">
                #quanlycongviec
            </a>
            <a href="">
                #quanlycongviec
            </a>
        </div>
        <div id="main-post">
            <div class="the-title-post">
                <h1>
                    <?php the_title();?>
                </h1>
            </div>
            <div class="infor-post">
                <span><?php echo get_the_date(); ?></span>
                <span>
                    <img src="http://1office.vn/wp-content/themes/officebetheme-child/img/view.png"><?php echo getPostViews(get_the_ID());?>
                </span>
            </div>
            <div class="post-content">
                <?php the_content();?>
            </div>
        </div>
    </div>
    <?php
        endwhile;
        else :endif;
    ?>
    
</div>
    <div class="box-post-prev-next">
        <div class="box-prev">
            <div class="prev-next-content">
                <?php
                    previous_post_link('
                        <span>Bài viết trước</span>
                        <h3>%link</h3>
                        ','%title',false);
                ?>
            </div>
        </div>
        <div class="box-next">
            <div class="prev-next-content">
                <?php
                    next_post_link('
                        <span>Bài viết sau</span>
                        <h3>%link</h3>
                        ','%title',false);
                ?>
            </div>
        </div>
    </div>
<div class="post-news-realted">
    <div class="section-title">
        <h3>
           Bài viết liên quan
        </h3>
    </div>
    <div class="list-post-news post-related">
        <?php
            if ( $relatedPost->have_posts() ):
                while ( $relatedPost->have_posts() ) : $relatedPost->the_post() ;
        ?>
        <div class="item-post">
            <a href="<?php the_permalink(); ?>">
                <div class="thumb-post">
                    <?php if ( has_post_thumbnail() ) : the_post_thumbnail('',array('class' => 'img-responsive center-block')); endif ?>
                </div>
            </a>
            <div class="date-post">
                <?php echo get_the_date( 'd-m-Y' ); ?>
            </div>
            <div class="title-post">
                <a href="<?php the_permalink(); ?>">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>
            </div>
        </div>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</div>
<!-- <div class="box-comment">
    <div class="section-title">
        <h3>
           Bình luận
        </h3>
    </div>
    <div class="list-comment">
    </div>
</div> -->