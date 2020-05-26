<?php 
/*
*	Template Name: Support Center
*/
get_header();
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
			<section class="first-page" id="page-center">
				<div class="list-option-support">
					<dix class="box-option-support">
						<div class="icon text-center">
							<img src="<?= home_url();  ?>/wp-content/themes/mdntheme/common/images/icons/support-center/huong-dan-su-dung.svg" />
						</div>
						<div class="title">
							<a href="<?php echo esc_url(home_url()) ?>/support-feature/">
								<h2>
									Hướng dẫn sử dụng
								</h2>
							</a>
						</div>
					</dix>
					<dix class="box-option-support">
						<div class="icon text-center">
							<img src="<?= home_url();  ?>/wp-content/themes/mdntheme/common/images/icons/support-center/tinh-nang-moi.svg" />
						</div>
						<div class="title">
							<a href="<?php echo home_url() ?>/support-news/">
								<h2>
									Tính năng mới
								</h2>
							</a>
						</div>
					</dix>
					<dix class="box-option-support">
						<div class="icon text-center">
							<img src="<?= home_url();  ?>/wp-content/themes/mdntheme/common/images/icons/support-center/nang-cao-kien-thuc.svg" />
						</div>
						<div class="title">
							<a href="<?php echo home_url() ?>/support-tip/">
								<h2>
									Nâng  cao, kiến thức
								</h2>
							</a>
						</div>
					</dix>
				</div>
			</section>	
	</div>
</div>
<?php get_footer(); ?>