	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url().'assets/uploads/'.$news->image; ?>" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200"><a href="<?php echo base_url(); ?>home/category/<?php echo $news->cat_id; ?>"><?php echo $cat; ?></a></div>
			<div class="post_title"> <?php echo $news->title; ?> </div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-9">
					<div class="post_content">

						<!-- Top Panel -->
						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><div><img src="<?php echo base_url(); ?>assets/images/author.jpg" alt=""></div></div>
							<div class="post_meta"><a href="#"><?php echo $username; ?></a><span><?php echo $news->dateposted; ?></span></div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- Post Body -->

						<div class="post_body">
							<?php echo $news->content; ?>
							<!-- Post Tags -->
							<div class="post_tags">
								<ul>
									<?php foreach($tags as $row): ?>
										<li class="post_tag"><a href="#"><?php echo $row; ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						
						<!-- Bottom Panel -->
						<div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><div><img src="<?php echo base_url(); ?>assets/images/author.jpg" alt=""></div></div>
							<div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- Similar Posts -->
						<div class="similar_posts">
							<div class="grid clearfix">
        <?php $card=0;
	foreach($mostreadnews as $row): ?>
									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt="">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#">Nitesh Kumar</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

      <?php endforeach; ?>

							</div>

							<!-- Post Comment -->
							<div class="post_comment">
								<div class="post_comment_title">Post Comment</div>
								<div class="row">
									<div class="col-xl-8">
      <?php echo validation_errors(); ?>
										<div class="post_comment_form_container">
											<form action="<?php echo base_url(); ?>home/news/<?php echo $news->news_id; ?>">
												<input type="text" name="postname" class="comment_input comment_input_name" placeholder="Your Name" required="required">
												<input type="email" name="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
												<textarea class="comment_text" name="comment" placeholder="Your Comment" required="required"></textarea>
												<button type="submit" class="comment_button">Post Comment</button>
											</form>
										</div>
									</div>
								</div>
							</div>

<?php if($commentsnum != 0): ?> 
							<!-- Comments -->
							<div class="comments">
								<div class="comments_title">Comments <span>(<?php echo $commentsnum; ?> )</span></div>
								<div class="row">
									<div class="col-xl-8">
										<div class="comments_container">
											<ul class="comment_list">
        <?php foreach($comments as $row): ?>
												<li class="comment">
													<div class="comment_body">
														<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author_image"><div><img src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/images/demo/avatar.gif" alt=""></div></div>
															<small class="post_meta"><a href="#"><?php echo $row->poster_name; ?></a><span>echo $row->date;</span></small>
															<button type="button" class="reply_button ml-auto">Reply</button>
														</div>
														<div class="comment_content">
															<p><?php echo $row->comment; ?></p>
														</div>
													</div>
												</li>
        <?php endforeach; ?>  
											</ul>
										</div>
									</div>
								</div>	
							</div>

        <?php else: ?>
          <p>There is no comments .</p>
        <?php endif; ?>  

						</div>
					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>

				<!-- Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_background"></div>

						<!-- Top Stories -->

						<div class="sidebar_section">
							<div class="sidebar_title_container">
								<div class="sidebar_title">Top Stories</div>
								<div class="sidebar_slider_nav">
									<div class="custom_nav_container sidebar_slider_nav_container">
										<div class="custom_prev custom_prev_top">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
										</div>
								        <ul id="custom_dots" class="custom_dots custom_dots_top">
											<li class="custom_dot custom_dot_top active"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
										</ul>
										<div class="custom_next custom_next_top">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="sidebar_section_content">

								<!-- Top Stories Slider -->
								<div class="sidebar_slider_container">
									<div class="owl-carousel owl-theme sidebar_slider_top">

										<!-- Top Stories Slider Item -->
	<?php for ($i=0; $i<3; $i++) { ?>
										<div class="owl-item">
									
        <?php $sidebar=0; foreach($mostreadnews as $row): ?>
	<?php if($sidebar>3) break; $sidebar++; ?>
											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="<?php echo base_url().'home/news/'.$row->news_id; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></div>
															<small class="post_meta">Nitesh Kumar<span>Sep 29</span></small>
														</div>
													</div>
												</a>
											</div>
        <?php endforeach; ?>
										</div>
	<?php } ?>

									</div>
								</div>
							</div>
						</div>

						<!-- Advertising -->

						<div class="sidebar_section">
							<div class="advertising">
								<div class="advertising_background" style="background-image:url(<?php echo base_url(); ?>assets/images/post_17.jpg)"></div>
								<div class="advertising_content d-flex flex-column align-items-start justify-content-end">
									<div class="advertising_perc">-15%</div>
									<div class="advertising_link"><a href="#">How Did van Gogh’s Turbulent Mind</a></div>
								</div>
							</div>
						</div>

						<!-- Newest Videos -->

						<div class="sidebar_section newest_videos">
							<div class="sidebar_title_container">
								<div class="sidebar_title">Newest Videos</div>
								<div class="sidebar_slider_nav">
									<div class="custom_nav_container sidebar_slider_nav_container">
										<div class="custom_prev custom_prev_vid">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
										</div>
								        <ul id="custom_dots" class="custom_dots custom_dots_vid">
											<li class="custom_dot custom_dot_vid active"><span></span></li>
											<li class="custom_dot custom_dot_vid"><span></span></li>
											<li class="custom_dot custom_dot_vid"><span></span></li>
										</ul>
										<div class="custom_next custom_next_vid">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="sidebar_section_content">

								<!-- Sidebar Slider -->
								<div class="sidebar_slider_container">
									<div class="owl-carousel owl-theme sidebar_slider_vid">

										<!-- Top Stories Slider Item -->
	<?php for ($i=0; $i<3; $i++) { ?>
										<div class="owl-item">
									
        <?php $sidebar=0; foreach($relatednews as $row): ?>
	<?php if($sidebar>3) break; $sidebar++; ?>
											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="<?php echo base_url().'home/news/'.$row->news_id; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></div>
															<small class="post_meta">Nitesh Kumar<span>Sep 29</span></small>
														</div>
													</div>
												</a>
											</div>
        <?php endforeach; ?>
										</div>
	<?php } ?>

									</div>
								</div>
							</div>
						</div>

						<!-- Advertising 2 -->

						<div class="sidebar_section">
							<div class="advertising_2">
								<div class="advertising_background" style="background-image:url(<?php echo base_url(); ?>assets/images/post_18.jpg)"></div>
								<div class="advertising_2_content d-flex flex-column align-items-center justify-content-center">
									<div class="advertising_2_link"><a href="#">Turbulent <span>Mind</span></a></div>
								</div>
							</div>
						</div>

						<!-- Future Events -->

						<div class="sidebar_section future_events">
							<div class="sidebar_title_container">
								<div class="sidebar_title">Future Events</div>
								<div class="sidebar_slider_nav">
									<div class="custom_nav_container sidebar_slider_nav_container">
										<div class="custom_prev custom_prev_events">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
										</div>
								        <ul id="custom_dots" class="custom_dots custom_dots_events">
											<li class="custom_dot custom_dot_events active"><span></span></li>
											<li class="custom_dot custom_dot_events"><span></span></li>
											<li class="custom_dot custom_dot_events"><span></span></li>
										</ul>
										<div class="custom_next custom_next_events">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="sidebar_section_content">

								<!-- Sidebar Slider -->
								<div class="sidebar_slider_container">
									<div class="owl-carousel owl-theme sidebar_slider_events">

										<!-- Future Events Slider Item -->
										<!-- Top Stories Slider Item -->
	<?php for ($i=0; $i<3; $i++) { ?>
										<div class="owl-item">
									
        <?php $sidebar=0; foreach($relatednews as $row): ?>
	<?php if($sidebar>3) break; $sidebar++; ?>
											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="<?php echo base_url().'home/news/'.$row->news_id; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></div>
															<small class="post_meta">Nitesh Kumar<span><?php echo $row->lastdate ?></span></small>
														</div>
													</div>
												</a>
											</div>
        <?php endforeach; ?>
										</div>
	<?php } ?>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
