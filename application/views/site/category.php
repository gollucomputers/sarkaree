	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>assets/images/category.jpg" data-speed="0.8"></div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Category -->

						<div class="category">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Don't Miss</div>
								<div class="section_tags ml-auto">
									<ul>
										<li class="active"><a href="category.html">all</a></li>
										<li><a href="category.html">style hunter</a></li>
										<li><a href="category.html">vogue</a></li>
										<li><a href="category.html">health & fitness</a></li>
										<li><a href="category.html">travel</a></li>
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>more
											<ul>
												<li><a href="category.html">new look 2018</a></li>
												<li><a href="category.html">street fashion</a></li>
												<li><a href="category.html">business</a></li>
												<li><a href="category.html">recipes</a></li>
												<li><a href="category.html">sport</a></li>
												<li><a href="category.html">celebrities</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

<?php if($total_rows == 0): ?>
          <?php echo "There is no news in this category"; ?>
        <?php else: ?>

							<div class="section_content">
								<div class="grid clearfix">
        <?php $card=0; $cardnum=array(1,2,3,4,5,6,7,8,9,10,11,12,13);
        foreach($catnews as $row):
	if ($card===4)
		$card=0;
	if($card===0) {
		shuffle($cardnum);
	}
	$card++;
	switch($cardnum[$card]) { case '1': { ?>
									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt="">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,150); ?></a></div>
											<small class="post_meta"><a href="#">Nitesh Kumar</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 2: { ?>
									<!-- Small Card Without Image -->
									<div class="card card_default card_small_no_image grid-item">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,150); ?></a></div>
											<small class="post_meta"><a href="#">Nitesh Kumar</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 3: { ?>
									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,150); ?></a></div>
											<small class="post_meta"><a href="#">Nitesh Kumar</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; default: { ?>
									<!-- Default Card With Background -->
									<div class="card card_default card_default_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,150); ?></a></div>
										</div>
									</div>

	<?php } break; } ?>

      <?php endforeach; ?>
        <?php endif; ?>

								</div>
							</div>
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

										<!-- Newest Videos Slider Item -->
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

										<!-- Top Stories Slider Item -->
	<?php for ($i=0; $i<3; $i++) { ?>
										<div class="owl-item">
									
        <?php $sidebar=0; foreach($mostreadnews as $row): ?>
	<?php if($sidebar>3) break; $sidebar++; ?>
											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="<?php echo base_url().'home/news/'.$row->news_id; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="event_date d-flex flex-column align-items-center justify-content-center">
															<div class="event_day">13</div>
															<div class="event_month">apr</div>
														</div>
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

					</div>
				</div>

			</div>
		</div>
	</div>
