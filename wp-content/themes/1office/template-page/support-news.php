<?php
/*
* Template name: Tính Năng Mới
*/
	get_header('custom');
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$getPost = new WP_Query (
        array (
            'post_type' => 'support_news',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged        
        )
    );
?>
<div id="layout-support-page">
	<section class="search-section-support">
		<div class="title-page text-center">
			<h1>Trung tâm hỗ trợ khách hàng <br>
				<span><i class="fa fa-phone"></i> 1900 3232 - 0834 838888 (08h:00 - 18h00)</span>
			</h1>
		</div>
		<div class="form-search-support-page">
			<form  class="flex-form" action="<?php bloginfo('url');?>">
			        <input type="search" name="s" placeholder="Nhập từ khóa tìm kiếm" class="form-control" autocomplete="off">
			        <button type="submit" class="submit-search">
			        <i class="fa fa-search"></i>
			    </button>
			</form>
		</div>
	</section>
	<div class="border-page">
			<section class="first-page" id="page-news">
				<section class="breadcrumb text-center">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')) ?>support/">Trung tâm hỗ trợ <span>&rsaquo;</span> </a></li>
						<li><a class="active" href="<?php echo get_permalink() ?>">Tin tức nâng cấp sản phẩm</a></li>
					</ul>
				</section>
				<section class="header-page">
					<div class="title-page text-center">
						<h1>Tính năng mới</h1>
					</div>
					<div class="description text-center">
						<p>
							Cập nhật về những tính năng mới hoặc những thay đổi của phần mềm. Giúp cho khách hàng và người dùng có thể thuận tiện trong việc theo dõi.
						</p>
					</div>
				</section>
				<div class="list-post-news">
					<?php
						if ( $getPost->have_posts() ):
							while ( $getPost->have_posts() ) : $getPost->the_post();
					?>
					<div class="item-post">
						<a href="<?php the_permalink(); ?>">
							<div class="thumb-post">
								<!-- <img src="<?php echo home_url() ?>/wp-content/uploads/2020/05/thumb.png" alt=""> -->
								<?php if ( has_post_thumbnail() ) : the_post_thumbnail('',array('class' => 'img-responsive center-block')); endif ?>
							</div>
						</a>
						<div class="list-tag">
							<!-- <a href="">
								#Loremipsumal
							</a> -->
						</div>
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
						<div class="description-post">
							<p>
								<a href="<?php the_permalink(); ?>">
									<?php the_excerpt(); ?>
								</a>
							</p>
						</div>
					</div>
					<?php endwhile;wp_reset_query();endif;?>
				</div>
			</section>	
	</div>
</div>
<?php get_footer(); ?>
