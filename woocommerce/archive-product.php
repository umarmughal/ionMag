<?php

td_global::$current_template = 'woo';


get_header();

//set the template id, used to get the template specific settings
$template_id = 'woo';


$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)



// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}

?>
	<div class="td-main-content-wrap td-main-page-wrap">
		<div class="td-container <?php echo $td_sidebar_position; ?>">
			<div class="td-pb-row">
				<?php
				switch ($loop_sidebar_position) {
					case 'sidebar_left':
						?>
						<div class="td-pb-span4 td-main-sidebar" role="complementary">
							<div class="td-ss-main-sidebar">
								<?php get_sidebar(); ?>
							</div>
						</div>
						<div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
							<div class="td-ss-main-content">
								<?php
									//woocommerce_breadcrumb();
									woocommerce_content();
								?>
							</div>
						</div>
						<?php
						break;

					case 'no_sidebar':
						?>
						<div class="td-pb-span12 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
							<div class="td-ss-main-content">
								<?php
									//woocommerce_breadcrumb();
									woocommerce_content();
								?>
							</div>
						</div>
						<?php
						break;


					default:
						?>
							<div class="td-pb-span8 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
								<div class="td-ss-main-content">
									<?php
										//woocommerce_breadcrumb();
										woocommerce_content();
									?>
								</div>
							</div>
							<div class="td-pb-span4 td-main-sidebar" role="complementary">
								<div class="td-ss-main-sidebar">
									<?php get_sidebar(); ?>
								</div>
							</div>
						<?php
						break;
				}?>
			</div>
		</div>
	</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();
?>