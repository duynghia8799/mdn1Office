<?php
/*
* Template name: Nâng Cao Kiến Thức
*/
	get_header('custom');
	$getPost = new WP_Query (
		array (
            'post_type' => 'support_tip',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date'
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
	<div class="border-page width-1200">
			<section class="first-page" id="page-tip">
				<section class="breadcrumb text-center">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')) ?>support/">Trung tâm hỗ trợ <span>&rsaquo;</span> </a></li>
						<li><a class="active" href="<?php echo get_permalink() ?>">Nâng cao, kiến thức</a></li>
					</ul>
				</section>
				<section class="header-page">
					<div class="title-page text-center">
						<h1>Nâng cao, kiến thức</h1>
					</div>
					<div class="description text-center">
						<p>
							Nâng cao kiến thức với những câu hỏi thường gặp mà chúng tôi đã chọn lọc lại. Giúp cho khách hàng và người dùng có thể giải quyết nhanh chóng vấn đề.
						</p>
					</div>
				</section>
				<div class="list-post-tip">
					<div class="style-faq">
						<ul>
							<?php
								if ( $getPost->have_posts() ) :
									$n = 1;
									while ( $getPost->have_posts() ) : $getPost->the_post();
							?>
							<li class="<?php echo ($n == 1) ? 'active' : ''; ?>" data-active="<?= $n ?>">
								<span class="question">
									<?php the_title(); ?>
								</span>
								<span class="answer">
									<p>
										<?php the_field('content'); ?>
									</p>
								</span>
							</li>
							<?php
									$n++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
			</section>	
	</div>
</div>
<?php get_footer(); ?>
