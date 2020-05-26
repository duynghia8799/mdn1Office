<?php
/**
 * The Template for displaying Custom Template Taxonamy Feature.
 */
get_header();
?>
<div class="layout-single" id="layout-support-page">
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
    <div class="border-page width-1800">
        <section class="first-page">
        	<?php
                get_template_part( 'template-page/taxonomy-page/content', 'feature' );	
            ?>
        </section>
    </div>
</div>
<?php get_footer();?>
