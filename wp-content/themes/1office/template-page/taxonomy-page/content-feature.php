<?php
    // Get all Feature Category Custom Taxonomy
    $features = get_terms(
        array(
            'taxonomy' => 'feature',
            'hide_empty' => false,
            'hierarchical' => true
        )
    );
    $slug = get_query_var('term');
    // echo "<pre>";var_dump($slug);echo "</pre>";die();
    $taxonomy = get_term_by('slug', $slug, 'feature');
    // Get 1 post Of Feature Category By ID
    $onlyPost = new WP_Query (
        array (
            'post_type' => 'support_feature',
            'posts_per_page' => 1,
            'tax_query' => array (
                array (
                    'taxonomy' => 'feature',
                    'field' => 'id',
                    'terms' => $taxonomy->term_id,
                ),
            ),
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date'
        )
    );
    // Get all post Of Feature Category By ID
    $allPost = get_posts (
        array (
            'post_type' => 'support_feature',
            'tax_query' => array (
                array (
                    'taxonomy' => 'feature',
                    'field' => 'id',
                    'terms' => $taxonomy->term_id,
                ),
            ),
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date'
        )
    );
    // Get related post
    $relatedPost = new WP_Query (
        array (
            'post_type' => 'support_feature',
            'posts_per_page' => 6,
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date'
        )
    );
    // echo "<pre>";var_dump($relatedPost);echo "</pre>";die();
?>
<section class="breadcrumb">
    <ul>
        <li>
            <a href="<?php echo esc_url(home_url('/')) ?>support">
                Trung tâm hỗ trợ
                <span>&rsaquo;</span>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/')) ?>support-feature">
                        Hướng dẫn sử dụng
                <span>
                    &rsaquo;
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo get_permalink() ?>" class="active">
                <?php echo $taxonomy->name ?>
            </a>
        </li>
    </ul>
</section>
<div class="main-option" id="feature-id-<?=$taxonomy->term_id?>">
    <div class="left-main">
        <section class="tab-content-support">
            <ul>
                <?php
                    foreach ( $features as $feature ) { ?>
                    <li>
                        <a href="<?php echo esc_url(home_url()) ?>/feature/<?php echo $feature->slug ?>" 
                            class="
                            <?php 
                                if ( $feature->slug === $taxonomy->slug ) {
                                    echo "active";
                                }
                            ?>
                            ">
                            <span class="icon-square">
                                <?php if ( count($allPost) > 0 && $feature->term_id === $taxonomy->term_id ) { ?>
                                    <svg viewbox="0 0 100 86.15" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                                .cls-1{fill:#f15822;}
                                            </style>
                                        </defs>
                                        <title>
                                            Asset 148
                                        </title>
                                        <g data-name="Layer 2" id="Layer_2">
                                            <g data-name="Layer 1" id="Layer_1-2">
                                                <path class="cls-1" d="M0,82.08v-78C2,1,4.77-.13,8.46,0c5.48.23,11,.25,16.48,0,3.73-.17,6.61.85,8.26,4.25s4.24,3.93,7.73,3.89C56.09,8,71.25,8.05,86.41,8.1c5.47,0,7.43,2.07,7.58,7.56,0,1.32,0,2.65,0,3.09l6,5.33v5a16.1,16.1,0,0,0-1,2.68c-3,15.82-6.06,31.62-8.82,47.48-.89,5.13-3.51,6.91-8.48,6.89q-36.63-.16-73.27,0C4.76,86.16,2,85.17,0,82.08Zm45.09,0c11.49,0,23-.29,34.45.14,4.92.18,6.6-1.49,7.37-6.12q3.89-23.37,8.52-46.6C96.33,25,95.12,24,90.86,24,67.23,24.15,43.6,24.21,20,24c-4.44,0-6,1.38-6.76,5.62Q9.16,53.43,4.47,77.16c-.78,4,.4,5,4.18,5C20.79,82,32.94,82.08,45.09,82.08Zm44.45-62c.95-7.93.9-8-6-8-14.48,0-29-.17-43.44.1-4.51.09-7.57-1.16-9.94-5a6.67,6.67,0,0,0-4.53-2.93,168.12,168.12,0,0,0-18,0C6.39,4.28,4.18,6,4.17,7,4,22.76,4,38.49,4,54.21c2.41-8.89,4.07-17.83,5.81-26.76,1.24-6.36,2.48-7.36,9-7.36q32.7,0,65.41,0Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                <?php } else { ?>
                                    <svg viewbox="0 0 92.02 84.19" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                                .cls-1{fill:#f15822;}
                                            </style>
                                        </defs>
                                        <title>
                                            Asset 146
                                        </title>
                                        <g data-name="Layer 2" id="Layer_2">
                                            <g data-name="Layer 1" id="Layer_1-2">
                                                <path class="cls-1" d="M46,84.18c-12.66,0-25.31,0-38,0-6,0-8-2-8-8.13q0-34,0-68C0,2.26,2,.28,7.77.19c3.33,0,6.69.25,10-.07,5.59-.53,10.06.53,13,6,.64,1.23,3.3,1.93,5,1.94,15.83.15,31.65.08,47.48.09,7,0,8.77,1.76,8.78,8.88q0,29.24,0,58.46c0,6.78-1.83,8.64-8.51,8.65C71,84.2,58.51,84.18,46,84.18Zm.51-62c-12.65,0-25.3.09-37.94-.06-3.46,0-4.66,1.08-4.63,4.59q.21,24.45,0,48.92c0,3.48,1.13,4.62,4.61,4.61q37.44-.17,74.88,0c3.46,0,4.66-1.09,4.63-4.59q-.21-24.47,0-48.92c0-3.49-1.13-4.66-4.61-4.61C71.15,22.28,58.83,22.18,46.52,22.18ZM87.66,18c1.26-4.92-.83-5.94-4.9-5.9-15.46.17-30.93-.08-46.39.16-4.64.07-8-1-10.31-5.22a6.08,6.08,0,0,0-4.15-2.74,110.75,110.75,0,0,0-14.46,0C6.27,4.38,4.31,5.86,4.2,6.86A106.43,106.43,0,0,0,4.05,18Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                <?php } ?>
                            </span>
                            <p>
                                <?php echo $feature->name; ?>
                            </p>
                        </a>
                        <?php if ( count($allPost) > 0 && $feature->term_id === $taxonomy->term_id ): ?>
                        <div class="sub-tab-content-support <?php echo "active"; ?>">
                            <ul>
                                <?php 
                                    foreach ( $allPost as $post ) : ?>
                                <li>
                                    <a href="<?php echo esc_url(home_url()); ?>/support_feature/<?php echo $post->post_name; ?>" class="sub-item">
                                        <div class="sub-menu-post-name">
                                            <?php echo $post->post_title; ?>
                                        </div>
                                    </a>
                                </li>
                                <?php
                                    endforeach;
                                ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </li>
                <?php } ?>
            </ul>
        </section>
    </div>
    <?php
        if ( $onlyPost->have_posts() ):
        while ( $onlyPost->have_posts() ) : $onlyPost->the_post();
    ?>
    <div class="center-main">
        <div id="main-post">
            <div class="the-title-post">
                <h1>
                    <?php the_title();?>
                </h1>
            </div>
            <div class="post-content">
                <?php the_content();?>
            </div>
        </div>
    </div>
    <?php
        endwhile;
        else: echo "
                        <div class=".'center-main'.">
                            <div id=".'main-post'.">
                                <div class=".'the-title-post'.">
                                    <h1>
                                        Chưa có nội dung
                                    </h1>
                                </div>
                            </div>
                        </div>
                    ";
        endif;
    ?>
    <div class="side-bar">
        <section class="border-box-side-bar related-post">
            <div class="title-in-side-bar">
                <h3>
                    Bài viết liên quan
                </h3>
            </div>
            <div class="list-post">
                <ul>
                    <?php
                        $i = 1;
                        if ( $relatedPost->have_posts() ):
                            while ( $relatedPost->have_posts() ) : $relatedPost->the_post();
                                
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php
                        $i++;
                            endwhile;
                        endif;
                    ?>
                </ul>
            </div>
        </section>
        <section class="border-box-side-bar faq-post">
            <div class="title-in-side-bar">
                <h3>
                    câu hỏi thường gặp
                </h3>
            </div>
            <div class="list-post">
                <ul>
                    <li>
                        <a href="">
                            Một quy trình công việc luôn phải có trạng thái Hoàn thành để có thể xác định tiến độ hay không?
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Người giao việc có thể thêm người thực hiện với công việc quy trình này?
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Người theo dõi có thể xem và nhận thông báo liên quan đến công việc không?
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Mô tả chi tiết cho công việc?
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<div class="side-bar-full-width">
    <div class="left-bar"></div>
    <div class="right-bar">
        <section class="border-box-side-bar related-post">
            <div class="title-in-side-bar">
                <h3>
                    Bài viết liên quan
                </h3>
            </div>
            <div class="list-post">
                <ul>
                    <?php
                        $i = 1;
                        if ( $relatedPost->have_posts() ):
                            while ( $relatedPost->have_posts() ) : $relatedPost->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php
                        $i++;
                            endwhile;
                        endif;
                    ?>
                </ul>
            </div>
        </section>
        <section class="border-box-side-bar faq-post">
            <div class="title-in-side-bar">
                <h3>
                    câu hỏi thường gặp
                </h3>
            </div>
            <div class="list-post">
                <ul>
                    <li>
                        <a href="">
                            Một quy trình công việc luôn phải có trạng thái Hoàn thành để có thể xác định tiến độ hay không?
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Người giao việc có thể thêm người thực hiện với công việc quy trình này?
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Người theo dõi có thể xem và nhận thông báo liên quan đến công việc không?
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Mô tả chi tiết cho công việc?
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
