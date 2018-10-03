	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
        <?php $sliderlength=sizeof($newsforslider);
 for($row=0; $row<$sliderlength; $row++) { ?>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $newsforslider[$row]->image; ?>)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200"><?php echo $this->adminModel->gettagnamewhere($newsforslider[$row]->tag_id); ?></a></div>
										<div class="home_slider_item_title">
											<a href="<?php echo base_url().'home/news/'.$newsforslider[$row]->news_id; ?>"><?php echo mb_substr($newsforslider[$row]->title, 0,120); ?></a>
										</div>
										<div class="home_slider_item_link">
											<a href="<?php echo base_url().'home/news/'.$newsforslider[$row]->news_id; ?>" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">


         <?php foreach($newsforsliderside as $newsbubble): ?>
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200">
										<a href="<?php echo base_url().'home/news/'.$newsbubble->news_id; ?>"><?php echo mb_substr($newsbubble->title, 0,120); ?></a>
									</div>
								</div>

        <?php endforeach; ?>  

							</div>
						</div>
						
						<div class="home_slider_next_container">
	<?php $nextslide=$row+1; if ($row===$sliderlength-1) $nextslide=0; ?>
							<div class="home_slider_next" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $newsforslider[$nextslide]->image; ?>)">
								<div class="home_slider_next_background trans_400"></div>
								<div class="home_slider_next_content trans_400">
									<div class="home_slider_next_title">next</div>
									<div class="home_slider_next_link"><?php echo mb_substr($newsforslider[$nextslide]->title, 0,120); ?></div>
								</div>
							</div>

						</div>

					</div>
				</div>
        <?php } ?>  

			</div>

			<div class="custom_nav_container home_slider_nav_container">
				<div class="custom_prev custom_prev_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
					</svg>
				</div>
		     		<ul id="custom_dots" class="custom_dots custom_dots_home_slider">
					<li class="custom_dot custom_dot_home_slider active"><span></span></li>
					<li class="custom_dot custom_dot_home_slider"><span></span></li>
					<li class="custom_dot custom_dot_home_slider"><span></span></li>
				</ul>
				<div class="custom_next custom_next_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
					</svg>
				</div>
			</div>

		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Blog Section - Don't Miss -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Don't Miss</div>
								<!--div class="section_tags ml-auto">
									<ul>
  <?php foreach($catsc as $row): ?>
										<li class="active"><a href="<?php echo base_url().'home/category/'.$row->cat_id; ?>"><?php echo $row->title;  ?></a></li>
      <?php endforeach; ?>     
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>more
											<ul>
  <?php foreach($catsc as $row): ?>
										<li class="active"><a href="<?php echo base_url().'home/category/'.$row->cat_id; ?>"><?php echo $row->title;  ?></a></li>
      <?php endforeach; ?>     
											</ul>
										</li>
									</ul>
								</div-->
							</div>
							<div class="section_content">
								<div class="grid clearfix">

        <?php $card=0;
	foreach($mostread as $row):
	$card++;
	switch($card) { case '1': { ?>
									<!-- Largest Card With Image -->
									<div class="card card_largest_with_image grid-item">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>">
										<div class="card-body">
											<div class="card-title"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<p class="card-text"><?php echo mb_substr(strip_tags($row->content), 0,90); ?></p>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 2: { ?>
									<!-- Small Card Without Image -->
									<div class="card card_default card_small_no_image grid-item">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 3: { ?>
									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>
	<?php } break; case 4: { ?>
									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt="">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>
	<?php } break; default: { ?>
									<!-- Default Card No Image -->
									<div class="card card_default card_default_no_image grid-item">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
										</div>
									</div>

	<?php } break; } ?>

      <?php endforeach; ?>

								</div>
							</div>
						</div>

						<!-- Blog Section - What's Trending -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">What's Trending</div>
								<div class="section_tags ml-auto">
									<ul>
  <?php foreach($catsc as $row): ?>
										<li class="active"><a href="<?php echo base_url().'home/category/'.$row->cat_id; ?>"><?php echo $row->title;  ?></a></li>
      <?php endforeach; ?>     
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>more
											<ul>
  <?php foreach($catsc as $row): ?>
										<li class="active"><a href="<?php echo base_url().'home/category/'.$row->cat_id; ?>"><?php echo $row->title;  ?></a></li>
      <?php endforeach; ?>     
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="section_content">
								<div class="grid clearfix">

        <?php $card=0;
	foreach($mostread as $row):
	$card++;
	switch($card) { case '1': { ?>
									<!-- Large Card With Background -->
									<div class="card card_large_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 2: { ?>
									<!-- Large Card With Image -->
									<div class="card grid-item card_large_with_image">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>">
										<div class="card-body">
											<div class="card-title"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<p class="card-text"><?php echo mb_substr(strip_tags($row->content), 0,90); ?></p>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 3: { ?>

									<!-- Default Card With Image -->
									<div class="card card_small_with_image grid-item">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 4: { ?>
									<!-- Default Card With Background -->
									<div class="card card_default card_default_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
										</div>
									</div>

	<?php } break; default: { ?>
									<!-- Default Card No Image -->
									<div class="card card_default card_default_no_image grid-item">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>

										</div>
									</div>

	<?php } break; } ?>

      <?php endforeach; ?>

								</div>
								
							</div>
						</div>

						<!-- Blog Section - Videos -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Most Popular Videos</div>
							</div>
							<div class="section_content">
								<div class="row">
									<div class="col">
										<div class="videos">
											<div class="player_container">
												<div id="P1" class="player" 
												     data-property="{videoURL:'2ScS5kwm7nI',containment:'self',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}">
												</div>
											</div>
											<div class="playlist">
												<div class="playlist_background"></div>

        <?php $videos=0; foreach($mostread as $row): if($videos> 3) break; $videos++; ?>
												<!-- Video -->
												<div class="video_container video_command active" onclick="jQuery('#P1').YTPChangeVideo({videoURL: '2ScS5kwm7nI', mute:false, addRaster:true})">
													<div class="video d-flex flex-row align-items-center justify-content-start">
														<div class="video_image"><div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt=""></div><img class="play_img" src="<?php echo base_url(); ?>assets/images/play.png" alt=""></div>
														<div class="video_content">
															<div class="video_title"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></div>
															<div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
														</div>
													</div>
												</div>

      <?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Section - Latest -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Latest Articles</div>
							</div>
							<div class="section_content">
								<div class="grid clearfix">
									

        <?php $card=0;
	foreach($mostread as $row):
	$card++;
	switch($card) { case '1': { ?>
									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										<img class="card-img-top" src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt="">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 2: { ?>
									<!-- Small Card Without Image -->
									<div class="card card_default card_small_no_image grid-item">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; case 3: { ?>
									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
											<small class="post_meta"><a href="#"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?></a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

	<?php } break; default: { ?>
									<!-- Default Card With Background -->
									<div class="card card_default card_default_with_background grid-item">
										<div class="card_background" style="background-image:url(<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></a></div>
										</div>
									</div>

	<?php } break; } ?>

      <?php endforeach; ?>
								</div>
								
							</div>
						</div>

					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">View More</div>
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
									
        <?php $sidebar=0; foreach($mostread as $row): ?>
	<?php if($sidebar>3) break; $sidebar++; ?>
											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="<?php echo base_url().'home/news/'.$row->news_id; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></div>
															<small class="post_meta"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?><span>Sep 29</span></small>
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
									<div class="custom_nav_container si	debar_slider_nav_container">
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
									
        <?php $sidebar=0; foreach($mostread as $row): ?>
	<?php if($sidebar>3) break; $sidebar++; ?>
											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="<?php echo base_url().'home/news/'.$row->news_id; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->image; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo mb_substr(strip_tags($row->title), 0,90); ?></div>
															<small class="post_meta"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?><span>Sep 29</span></small>
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
								<div class="advertising_background" style="background-image:url(<?php echo base_url(); ?>assets/images/pexels-photo-887723.jpeg)"></div>
								<div class="advertising_2_content d-flex flex-column align-items-center justify-content-center">
									<div class="advertising_2_link"><a href="#">Gollu<span>Cafe</span></a></div>
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
									
        <?php $sidebar=0; foreach($mostread as $row): ?>
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
															<small class="post_meta"><?php echo $this->adminModel->getcatnamewhere($row->cat_id); ?><span>Sep 29</span></small>
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

