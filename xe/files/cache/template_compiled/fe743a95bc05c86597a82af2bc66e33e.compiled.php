<?php if(!defined("__XE__"))exit;?>			<div class="section sub_section">
				<?php if($__Context->layout_info->sub0_size){ ?><div class="sub_top_section line_section">
					<div class="in_section">
						<div>
							<div class="tab_top tab_top_none">
								<ul class="wrapTab clearBoth list3">
									<li class="tab_li on tab_li_first">
										<a class="tab_a tab_a_first" name="tab101" href="#">
										<i class="xi-comment"></i>최신글
										</a>
									</li>
									<li class="tab_li tab_a_second">
										<a class="tab_a" name="tab102" href="#">
										<i class="xi-message"></i>최신댓글
										</a>
									</li>
										
								</ul>
							</div>
							<div class="tab_bottom tab_bottom4">
								<div id="tab101" class="wrapTab_on tab_div">
									<?php if($__Context->layout_info->sub0_style=='B'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub0_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub0_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub0_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
									<?php } ?>
									<?php if($__Context->layout_info->sub0_style=='C'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub0_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub0_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub0_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
									<?php } ?>
								</div>
								<div id="tab102" class="tab_div">
									<?php if($__Context->layout_info->sub0_style=='B'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="comment" module_srls="<?php echo $__Context->layout_info->sub0_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub0_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub0_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
									<?php } ?>
									<?php if($__Context->layout_info->sub0_style=='C'){ ?>
									<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="comment" module_srls="<?php echo $__Context->layout_info->sub0_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub0_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub0_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="list_order" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div><?php } ?>
				<?php if($__Context->layout_info->sub1_size){ ?><div class="line_section">
					<div class="in_section">
						<?php if($__Context->layout_info->sub1_title||$__Context->layout_info->sub1_title_img){ ?><div class="widget_box_h2">
							<?php if($__Context->layout_info->sub1_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub1_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->sub1_title_img ?>" alt="<?php echo $__Context->layout_info->sub1_title ?>" /></a> <?php if($__Context->layout_info->sub1_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub1_more ?>">more +</a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->sub1_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub1_more ?>"><?php echo $__Context->layout_info->sub1_title ?></a> <?php if($__Context->layout_info->sub1_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub1_more ?>">more +</a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->sub1_style=='A'){ ?>
						<?php if($__Context->layout_info->sub1_banner){ ?><div class="wrap_banner"><a href="<?php echo $__Context->layout_info->sub1_banner_url ?>"><img src="<?php echo $__Context->layout_info->sub1_banner ?>" alt="" /></a></div><?php } ?>
						<?php } ?>
						<?php if($__Context->layout_info->sub1_style=='B'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub1_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub1_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub1_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub1_style=='C'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub1_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub1_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub1_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub1_style=='D'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub1_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub1_list ?>" page_count="1" subject_cut_size="80" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub1_date ?>" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub1_style=='E'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub1_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub1_list ?>" cols_list_count="2" page_count="1" subject_cut_size="52" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub1_date ?>,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="145" thumbnail_height="145" />
						<?php } ?>
						
						<?php if($__Context->layout_info->sub1_style=='H'){ ?>
						<div class="wrap_banner"><?php echo $__Context->layout_info->sub1_html ?></div>
						<?php } ?>
					</div>
				</div><?php } ?>
				<?php if($__Context->layout_info->sub2_size){ ?><div class="line_section">
					<div class="in_section">
						<?php if($__Context->layout_info->sub2_title||$__Context->layout_info->sub2_title_img){ ?><div class="widget_box_h2">
							<?php if($__Context->layout_info->sub2_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub2_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->sub2_title_img ?>" alt="<?php echo $__Context->layout_info->sub2_title ?>" /></a> <?php if($__Context->layout_info->sub2_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub2_more ?>">more +</a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->sub2_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub2_more ?>"><?php echo $__Context->layout_info->sub2_title ?></a> <?php if($__Context->layout_info->sub2_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub2_more ?>">more +</a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->sub2_style=='A'){ ?>
						<?php if($__Context->layout_info->sub2_banner){ ?><div class="wrap_banner"><a href="<?php echo $__Context->layout_info->sub2_banner_url ?>"><img src="<?php echo $__Context->layout_info->sub2_banner ?>" alt="" /></a></div><?php } ?>
						<?php } ?>
						<?php if($__Context->layout_info->sub2_style=='B'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub2_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub2_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub2_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub2_style=='C'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub2_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub2_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub2_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub2_style=='D'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub2_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub2_list ?>" page_count="1" subject_cut_size="80" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub2_date ?>" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub2_style=='E'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub2_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub2_list ?>" cols_list_count="2" page_count="1" subject_cut_size="52" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub2_date ?>,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="145" thumbnail_height="145" />
						<?php } ?>
						
						<?php if($__Context->layout_info->sub2_style=='H'){ ?>
						<div class="wrap_banner"><?php echo $__Context->layout_info->sub2_html ?></div>
						<?php } ?>
					</div>
				</div><?php } ?>
				<?php if($__Context->layout_info->sub3_size){ ?><div class="line_section">
					<div class="in_section">
						<?php if($__Context->layout_info->sub3_title||$__Context->layout_info->sub3_title_img){ ?><div class="widget_box_h2">
							<?php if($__Context->layout_info->sub3_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub3_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->sub3_title_img ?>" alt="<?php echo $__Context->layout_info->sub3_title ?>" /></a> <?php if($__Context->layout_info->sub3_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub3_more ?>">more +</a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->sub3_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub3_more ?>"><?php echo $__Context->layout_info->sub3_title ?></a> <?php if($__Context->layout_info->sub3_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub3_more ?>">more +</a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->sub3_style=='A'){ ?>
						<?php if($__Context->layout_info->sub3_banner){ ?><div class="wrap_banner"><a href="<?php echo $__Context->layout_info->sub3_banner_url ?>"><img src="<?php echo $__Context->layout_info->sub3_banner ?>" alt="" /></a></div><?php } ?>
						<?php } ?>
						<?php if($__Context->layout_info->sub3_style=='B'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub3_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub3_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub3_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub3_style=='C'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub3_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub3_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub3_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub3_style=='D'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub3_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub3_list ?>" page_count="1" subject_cut_size="80" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub3_date ?>" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub3_style=='E'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub3_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub3_list ?>" cols_list_count="2" page_count="1" subject_cut_size="52" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub3_date ?>,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="145" thumbnail_height="145" />
						<?php } ?>
						
						<?php if($__Context->layout_info->sub3_style=='H'){ ?>
						<div class="wrap_banner"><?php echo $__Context->layout_info->sub3_html ?></div>
						<?php } ?>
					</div>
				</div><?php } ?>
				<?php if($__Context->layout_info->sub4_size){ ?><div class="line_section">
					<div class="in_section">
						<?php if($__Context->layout_info->sub4_title||$__Context->layout_info->sub4_title_img){ ?><div class="widget_box_h2">
							<?php if($__Context->layout_info->sub4_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub4_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->sub4_title_img ?>" alt="<?php echo $__Context->layout_info->sub4_title ?>" /></a> <?php if($__Context->layout_info->sub4_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub4_more ?>">more +</a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->sub4_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub4_more ?>"><?php echo $__Context->layout_info->sub4_title ?></a> <?php if($__Context->layout_info->sub4_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub4_more ?>">more +</a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->sub4_style=='A'){ ?>
						<?php if($__Context->layout_info->sub4_banner){ ?><div class="wrap_banner"><a href="<?php echo $__Context->layout_info->sub4_banner_url ?>"><img src="<?php echo $__Context->layout_info->sub4_banner ?>" alt="" /></a></div><?php } ?>
						<?php } ?>
						<?php if($__Context->layout_info->sub4_style=='B'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub4_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub4_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub4_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub4_style=='C'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub4_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub4_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub4_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub4_style=='D'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub4_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub4_list ?>" page_count="1" subject_cut_size="80" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub4_date ?>" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub4_style=='E'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub4_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub4_list ?>" cols_list_count="2" page_count="1" subject_cut_size="52" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub4_date ?>,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="145" thumbnail_height="145" />
						<?php } ?>
						
						<?php if($__Context->layout_info->sub4_style=='H'){ ?>
						<div class="wrap_banner"><?php echo $__Context->layout_info->sub4_html ?></div>
						<?php } ?>
					</div>
				</div><?php } ?>
				<?php if($__Context->layout_info->sub5_size){ ?><div class="line_section">
					<div class="in_section">
						<?php if($__Context->layout_info->sub5_title||$__Context->layout_info->sub5_title_img){ ?><div class="widget_box_h2">
							<?php if($__Context->layout_info->sub5_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub5_more ?>"><img class="h2_img" src="<?php echo $__Context->layout_info->sub5_title_img ?>" alt="<?php echo $__Context->layout_info->sub5_title ?>" /></a> <?php if($__Context->layout_info->sub5_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub5_more ?>">more +</a><?php } ?></h2><?php } ?>
							<?php if(!$__Context->layout_info->sub5_title_img){ ?><h2><a href="<?php echo $__Context->layout_info->sub5_more ?>"><?php echo $__Context->layout_info->sub5_title ?></a> <?php if($__Context->layout_info->sub5_more){ ?><a class="h2_more_a" href="<?php echo $__Context->layout_info->sub5_more ?>">more +</a><?php } ?></h2><?php } ?>
						</div><?php } ?>
						<?php if($__Context->layout_info->sub5_style=='A'){ ?>
						<?php if($__Context->layout_info->sub5_banner){ ?><div class="wrap_banner"><a href="<?php echo $__Context->layout_info->sub5_banner_url ?>"><img src="<?php echo $__Context->layout_info->sub5_banner ?>" alt="" /></a></div><?php } ?>
						<?php } ?>
						<?php if($__Context->layout_info->sub5_style=='B'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub5_widget ?>" list_type="normal" tab_type="none" markup_type="list" list_count="<?php echo $__Context->layout_info->sub5_list ?>" page_count="1" subject_cut_size="44" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub5_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub5_style=='C'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub5_widget ?>" list_type="normal" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub5_list ?>" page_count="1" subject_cut_size="50" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub5_date ?>" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub5_style=='D'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub5_widget ?>" list_type="image_title_content" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub5_list ?>" page_count="1" subject_cut_size="80" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub5_date ?>" show_browser_title="Y" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="64" thumbnail_height="64" />
						<?php } ?>
						<?php if($__Context->layout_info->sub5_style=='E'){ ?>
						<img class="zbxe_widget_output" widget="content" skin="Door_cpB" colorset="white" content_type="document" module_srls="<?php echo $__Context->layout_info->sub5_widget ?>" list_type="image_title" tab_type="none" markup_type="table" list_count="<?php echo $__Context->layout_info->sub5_list ?>" cols_list_count="2" page_count="1" subject_cut_size="52" content_cut_size="140" option_view="<?php echo $__Context->layout_info->sub5_date ?>,content" show_browser_title="N" show_comment_count="Y" show_trackback_count="N" show_category="N" show_icon="N" order_target="regdate" order_type="desc" thumbnail_type="crop" thumbnail_width="145" thumbnail_height="145" />
						<?php } ?>
						
						<?php if($__Context->layout_info->sub5_style=='H'){ ?>
						<div class="wrap_banner"><?php echo $__Context->layout_info->sub5_html ?></div>
						<?php } ?>
					</div>
				</div><?php } ?>
			</div>