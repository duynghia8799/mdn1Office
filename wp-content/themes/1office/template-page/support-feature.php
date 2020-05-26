<?php 
/*
*	Template Name: Support Feature
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
        <section class="first-page" id="page-feature">
        	<section class="breadcrumb">
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')) ?>support/">Trung tâm hỗ trợ <span>&rsaquo;</span> </a></li>
					<li><a class="active" href="<?php echo get_permalink() ?>">Hướng dẫn sử dụng</a></li>
				</ul>
			</section>
            <div class="main-option">
                <div class="left-main">
                    <section class="tab-content-support">
                        <ul>
                        	<?php
	                    		if (have_rows('list_feature')):
                            	while (have_rows('list_feature')) : the_row(); 
                            	$id_feature = get_sub_field('name_feature');
                                $feature = get_term_by('id',$id_feature,'feature');
	                        ?>
                            <li>
                                <a href="<?php echo esc_url(home_url()) ?>/feature/<?php echo $feature->slug ?>">
                                    <span class="icon-square">
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
	                            	</span>
                                    <p>
                                    	<?php echo $feature->name ?>
                                    </p>
                                </a>
                            </li>
                            <?php
			                    endwhile;
			                	else :endif;
			                ?>
                        </ul>
                    </section>
                </div>
                <div class="right-main">
                    <div class="title-page">
                        <h1>
                            <?php the_title() ?>
                        </h1>
                    </div>
                    <div class="list-option-feature">
                    	<?php
                    		if (have_rows('list_feature')):
                            while (have_rows('list_feature')) : the_row(); 
                            	$id_feature = get_sub_field('name_feature');
                                $feature = get_term_by('id',$id_feature,'feature');
                        ?>
                        <a class="feature-by-feature" href="<?php echo esc_url(home_url()) ?>/feature/<?php echo $feature->slug ?>">
                            <div class="icon-feature">
                                <?php the_sub_field('icon_feature_svg') ?>
                            </div>
                            <div class="name-feature">
                                <?php echo $feature->name; ?>
                            </div>
                        </a>
		                <?php
		                    endwhile;
		                	else :endif;
		                ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>