@extends('layouts.app')

@section('content')
<section class="content">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					

					<!-- <div class="breaking-news">
						<div class="breaking-title">
							<h3>Breaking News</h3>
						</div>
						<div class="breaking-block">
							<ul>
								<li><a href="#" class="break-category" style="background-color: #276197;">Tech News</a><h4><a href="#">Prize pool for The International 2014 surges to $5.7 million</a></h4><a href="##comments" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
								<li><a href="#" class="break-category" style="background-color: #429d4a;">Contests</a><h4><a href="#">An rebum nusquam cum duo invenire mundi</a></h4><a href="##comments" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
								<li><a href="#" class="break-category" style="background-color: #ffd800; color: #232323;">World News</a><h4><a href="#">An rebum nusquam cum duo invenire mundi</a></h4><a href="##comments" class="comment-link"><i class="fa fa-comment-o"></i>0</a></li>
							</ul>
						</div>
					</div> -->


					<div class="main-content has-sidebar">
					<!-- <div class="main-content has-double-sidebar"> -->
					<!-- <div class="main-content"> -->

						<!-- BEGIN .ot-slider -->
						<div class="ot-slider owl-carousel">

							<!-- BEGIN .ot-slide -->
							<div class="ot-slide">
								<div class="ot-slider-layer first">
									<a href="post-review.html">
										<strong><i style="background-color: #ed2d00; color: #fff;">Breaking News</i>a fight club on the top of the world</strong>
										<img src="{{ URL::asset('assets/images/photos/1.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer second">
									<a href="#">
										<strong><i style="background-color: #ffd800; color: #232323;">World News</i>SAMENWERKING GOLIATH SPORTSWEAR &amp; TWEE NEDERLANDSE PINTEREST INFLUENCERS</strong>
										<img src="{{ URL::asset('assets/images/photos/2.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer third">
									<a href="#">
										<strong><i style="background-color: #1985e1; color: #fff;">Nostalgia</i>Game Boy Camera images from 2000 seem 10 times as old</strong>
										<img src="{{ URL::asset('assets/images/photos/7.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer fourth">
									<a href="#">
										<strong><i style="background-color: #429d4a; color: #fff;">Contests</i>Contest: Win one of two Watch Dogs duffle bags by Frank &amp; Oak</strong>
										<img src="{{ URL::asset('assets/images/photos/image-9.jpg') }}" alt="" />
									</a>
								</div>
							<!-- END .ot-slide -->
							</div>

							<!-- BEGIN .ot-slide -->
							<div class="ot-slide">
								<div class="ot-slider-layer first">
									<a href="post-review.html">
										<strong><i style="background-color: #ed2d00; color: #fff;">Breaking News</i>a fight club on the top of the world</strong>
										<img src="{{ URL::asset('assets/images/photos/1.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer second">
									<a href="#">
										<strong><i style="background-color: #ffd800; color: #232323;">World News</i>SAMENWERKING GOLIATH SPORTSWEAR &amp; TWEE NEDERLANDSE PINTEREST INFLUENCERS</strong>
										<img src="{{ URL::asset('assets/images/photos/2.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer third">
									<a href="#">
										<strong><i style="background-color: #1985e1; color: #fff;">Nostalgia</i>Game Boy Camera images from 2000 seem 10 times as old</strong>
										<img src="{{ URL::asset('assets/images/photos/7.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer fourth">
									<a href="#">
										<strong><i style="background-color: #429d4a; color: #fff;">Contests</i>Contest: Win one of two Watch Dogs duffle bags by Frank &amp; Oak</strong>
										<img src="{{ URL::asset('assets/images/photos/image-9.jpg') }}" alt="" />
									</a>
								</div>
							<!-- END .ot-slide -->
							</div>

							<!-- BEGIN .ot-slide -->
							<div class="ot-slide">
								<div class="ot-slider-layer first">
									<a href="post-review.html">
										<strong><i style="background-color: #ed2d00; color: #fff;">Breaking News</i>a fight club on the top of the world</strong>
										<img src="{{ URL::asset('assets/images/photos/1.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer second">
									<a href="#">
										<strong><i style="background-color: #ffd800; color: #232323;">World News</i>SAMENWERKING GOLIATH SPORTSWEAR &amp; TWEE NEDERLANDSE PINTEREST INFLUENCERS</strong>
										<img src="{{ URL::asset('assets/images/photos/2.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer third">
									<a href="#">
										<strong><i style="background-color: #1985e1; color: #fff;">Nostalgia</i>Game Boy Camera images from 2000 seem 10 times as old</strong>
										<img src="{{ URL::asset('assets/images/photos/7.jpg') }}" alt="" />
									</a>
								</div>
								<div class="ot-slider-layer fourth">
									<a href="#">
										<strong><i style="background-color: #429d4a; color: #fff;">Contests</i>Contest: Win one of two Watch Dogs duffle bags by Frank &amp; Oak</strong>
										<img src="{{ URL::asset('assets/images/photos/image-9.jpg') }}" alt="" />
									</a>
								</div>
							<!-- END .ot-slide -->
							</div>

						<!-- END .ot-slider -->
						</div>

						<!-- BEGIN .left-content -->
						<div class="left-content">

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="main-title">
									<a href="#" class="right button">View More Posts</a>
									<h2>Hottest news of today</h2>
									<span>Most recent news from all categories</span>
								</div>

								<!-- BEGIN .article-list-block -->
								<div class="article-list-block">

									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover" data-path-hover="M 37,53 45,34 58.5,37.5 61,59 48.5,69 z">
												<figure>
													<img src="{{ URL::asset('assets/images/photos/01.jpg') }}" />
													<svg viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0,100 0,99 50,97 100,99 100,100 z" fill="#276197" /></svg>
													<figcaption>
														<span class="hover-text"><i class="fa fa-camera"></i><span>Photo</span></span>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #276197;">Southern BBQ</a>
											</div>
											<h3><a href="#">YouTube to acquire Twitch for $1 billion</a></h3>
											<!-- <div class="ot-star-rating">
												<span style="width: 100%;" class=""><strong class="rating">5</strong> out of 5</span>
												<strong>Rating: 5 out of 5 stars</strong>
											</div> -->
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...</p>
											<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>

									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover" data-path-hover="M 37,53 45,34 58.5,37.5 61,59 48.5,69 z">
												<figure>
													<img src="{{ URL::asset('assets/images/photos/07.jpg') }}" />
													<svg viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0,100 0,99 50,97 100,99 100,100 z" fill="#ef8722" /></svg>
													<figcaption>
														<span class="hover-text"><i class="fa fa-camera"></i><span>Photo</span></span>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #ef8722;">World news</a>
											</div>
											<h3><a href="#">Erant aeque ne ius nonumes electram ad nam</a></h3>
											<!-- <div class="ot-star-rating">
												<span style="width: 100%;" class=""><strong class="rating">5</strong> out of 5</span>
												<strong>Rating: 5 out of 5 stars</strong>
											</div> -->
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's s...</p>
											<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>

									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover" data-path-hover="M 37,53 45,34 58.5,37.5 61,59 48.5,69 z">
												<figure>
													<img src="{{ URL::asset('assets/images/photos/03.jpg') }}" />
													<svg viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0,100 0,99 50,97 100,99 100,100 z" fill="#6bab32" /></svg>
													<figcaption>
														<span class="hover-text"><i class="fa fa-camera"></i><span>Photo</span></span>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #6bab32;">Nature</a>
											</div>
											<h3><a href="#">Mel an modo debitis, quo id wisi graeci nec in nulla dolore</a></h3>
											<!-- <div class="ot-star-rating">
												<span style="width: 100%;" class=""><strong class="rating">5</strong> out of 5</span>
												<strong>Rating: 5 out of 5 stars</strong>
											</div> -->
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...</p>
											<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>

									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover" data-path-hover="M 37,53 45,34 58.5,37.5 61,59 48.5,69 z">
												<figure>
													<img src="{{ URL::asset('assets/images/photos/06.jpg') }}" />
													<svg viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0,100 0,99 50,97 100,99 100,100 z" fill="#276197" /></svg>
													<figcaption>
														<span class="hover-text"><i class="fa fa-camera"></i><span>Photo</span></span>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #276197;">Tech news</a>
											</div>
											<h3><a href="#">YouTube to acquire Twitch for $1 billion</a></h3>
											<div class="ot-star-rating">
												<span style="width: 100%;" class=""><strong class="rating">5</strong> out of 5</span>
												<strong>Rating: 5 out of 5 stars</strong>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...</p>
											<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>

									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover" data-path-hover="M 37,53 45,34 58.5,37.5 61,59 48.5,69 z">
												<figure>
													<img src="{{ URL::asset('assets/images/photos/05.jpg') }}" />
													<svg viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0,100 0,99 50,97 100,99 100,100 z" fill="#dc1010" /></svg>
													<figcaption>
														<span class="hover-text"><i class="fa fa-camera"></i><span>Photo</span></span>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #dc1010;">Sport News</a>
											</div>
											<h3><a href="#">Erant aeque ne ius nonumes electram ad nam</a></h3>
											<div class="ot-star-rating">
												<span style="width: 100%;" class=""><strong class="rating">5</strong> out of 5</span>
												<strong>Rating: 5 out of 5 stars</strong>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...</p>
											<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>

									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover" data-path-hover="M 37,53 45,34 58.5,37.5 61,59 48.5,69 z">
												<figure>
													<img src="{{ URL::asset('assets/images/photos/08.jpg') }}" />
													<svg viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M 0,100 0,99 50,97 100,99 100,100 z" fill="#ef8722" /></svg>
													<figcaption>
														<span class="hover-text"><i class="fa fa-camera"></i><span>Photo</span></span>
													</figcaption>
												</figure>
											</a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #ef8722;">World news</a>
											</div>
											<h3><a href="#">Mel an modo debitis, quo id wisi graeci nec in nulla dolore</a></h3>
											<div class="ot-star-rating">
												<span style="width: 100%;" class=""><strong class="rating">5</strong> out of 5</span>
												<strong>Rating: 5 out of 5 stars</strong>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...</p>
											<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>

								<!-- END .article-list-block -->
								</div>
								
							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="main-title" style="border-left: 4px solid #A161DD">
									<a href="#" class="right button" style="background: #A161DD; color: #A161DD;">View More Posts</a>
									<h2>Latest From Nostalgia</h2>
									<span>Most recent old school articles</span>
								</div>

								<!-- BEGIN .category-default-block -->
								<div class="category-default-block paragraph-row">

									<!-- BEGIN .column6 -->
									<div class="column6">
										<div class="item-main">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-81.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<div class="content-category">
													<a href="#" style="color: #A161DD;">Nostalgia</a>
												</div>
												<h3><a href="#">Two Icelandic developers took me underground to discuss the future of VR</a></h3>
												<p>Modus novum oportere quo ex. No eos agam ludus ponderum, in pri justo facete, eos tollit ponderum torquatos ut. Meis verterem ullamcorper in per...</p>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>
									<!-- END .column6 -->
									</div>

									<!-- BEGIN .column6 -->
									<div class="column6 smaller-articles">

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-21.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Affert ignota persius vim solum suavitate est et in ius nonumy invenire indoctum</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-22.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Quo id  in habeo inimicus liber sonet pertinax ipsum facilis qui in</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-23.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Saepe veniam menandri ea has duo neglegentur no vix eu posse perpetua dissentiunt</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-79.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Affert ignota persius vim solum suavitate est et in ius nonumy invenire indoctum</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-80.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Quo id  in habeo inimicus liber sonet pertinax ipsum facilis qui in</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

									<!-- END .column6 -->
									</div>

								<!-- END .category-default-block -->
								</div>

							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="main-title" style="border-left: 4px solid #429d4a">
									<a href="#" class="right button" style="background: #429d4a; color: #429d4a;">View More Posts</a>
									<h2>Latest From Contests</h2>
									<span>Most recent contest articles</span>
								</div>

								<!-- BEGIN .category-default-block -->
								<div class="category-default-block paragraph-row">

									<!-- BEGIN .column6 -->
									<div class="column6">
										<div class="item-main">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-78.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<div class="content-category">
													<a href="#" style="color: #429d4a;">Contests</a>
												</div>
												<h3><a href="#">Two Icelandic developers took me underground to discuss the future of VR</a></h3>
												<p>Modus novum oportere quo ex. No eos agam ludus ponderum, in pri justo facete, eos tollit ponderum torquatos ut. Meis verterem ullamcorper in per...</p>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>
									<!-- END .column6 -->
									</div>

									<!-- BEGIN .column6 -->
									<div class="column6 smaller-articles">

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-21.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Affert ignota persius vim solum suavitate est et in ius nonumy invenire indoctum</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-22.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Quo id  in habeo inimicus liber sonet pertinax ipsum facilis qui in</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-23.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Saepe veniam menandri ea has duo neglegentur no vix eu posse perpetua dissentiunt</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-79.jpg') }}g" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Affert ignota persius vim solum suavitate est et in ius nonumy invenire indoctum</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

										<div class="item">
											<div class="item-header">
												<a href="#" class="image-hover"><img src="{{ URL::asset('assets/images/photos/image-80.jpg') }}" alt="" /></a>
											</div>
											<div class="item-content">
												<h3><a href="#">Quo id  in habeo inimicus liber sonet pertinax ipsum facilis qui in</a></h3>
												<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
											</div>
										</div>

									<!-- END .column6 -->
									</div>

								<!-- END .category-default-block -->
								</div>

							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="main-title" style="border-left: 4px solid #ef8722">
									<a href="#" class="right button" style="background: #ef8722; color: #ef8722;">View More Reviews</a>
									<h2>Latest Reviews</h2>
									<span>Most recent reviews</span>
								</div>

								<!-- BEGIN .article-review-block -->
								<div class="article-review-block">

									<div class="item">
										<a href="#">
											<span>
												<small>15.Aug 2014</small>
												<span class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></span>
												<span>Ei his case meis vivendum</span>
											</span>
											<img src="images/photos/image-75.jpg" alt="" />
										</a>
									</div>

									<div class="item">
										<a href="#">
											<span>
												<small>15.Aug 2014</small>
												<span class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></span>
												<span>Gloriatur eu his adolescens mel</span>
											</span>
											<img src="images/photos/image-76.jpg" alt="" />
										</a>
									</div>

									<div class="item">
										<a href="#">
											<span>
												<small>15.Aug 2014</small>
												<span class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></span>
												<span>Alienum inciderint ei vim vel ei</span>
											</span>
											<img src="images/photos/image-77.jpg" alt="" />
										</a>
									</div>

								<!-- END .article-review-block -->
								</div>

							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							<div class="home-block">

								<!-- BEGIN .article-links-block -->
								<div class="article-links-block">

									<div class="item">
										<h3 style="color: #ef8722; border-bottom: 3px solid #ef8722;">World News</h3>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Vis lobortis partiendo dissentiet quo</a></h3>
											<div class="item-details">
												<div class="item-head">
													<a href="#" class="image-hover"><img src="images/photos/image-64.jpg" alt="" /></a>
												</div>
												<div class="item-content">
													<!-- <p>Aperiam argumentum eos an, no zril iuvaret aliquid per, laudem erroribus mel ex. Ea pro meis ocurreret volutpat ex...</p> -->
													<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
												</div>
												<div class="clear-float"></div>
											</div>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Quo id wisi graeci nec in altera eloquentiam ad nulla dolore</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Ullum liber virtute mei altera eloquentiam ad ut mutat pri ut</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Duo scripta an pri eirmod</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">In offendit probatus altera eloquentiam ad audire labores</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Quo id wisi graeci altera eloquentiam ad ec in nulla dolore</a></h3>
										</div>
										<a href="#" class="archive-button" style="background-color: #ef8722;">More Articles</a>
									</div>

									<div class="item">
										<h3 style="color: #276197; border-bottom: 3px solid #276197;">Technology News</h3>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Vis lobortis partiendo dissentiet quo</a></h3>
											<div class="item-details">
												<div class="item-head">
													<a href="#" class="image-hover"><img src="images/photos/image-65.jpg" alt="" /></a>
												</div>
												<div class="item-content">
													<!-- <p>Aperiam argumentum eos an, no zril iuvaret aliquid per, laudem erroribus mel ex. Ea pro meis ocurreret volutpat ex...</p> -->
													<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
												</div>
												<div class="clear-float"></div>
											</div>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Quo id wisi graeci nec in altera eloquentiam ad nulla dolore</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Ullum liber virtute mei altera eloquentiam ad ut mutat pri ut</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Duo scripta an pri eirmod</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">In offendit probatus altera eloquentiam ad audire labores</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Quo id wisi graeci altera eloquentiam ad ec in nulla dolore</a></h3>
										</div>
										<a href="#" class="archive-button" style="background-color: #276197;">More Articles</a>
									</div>

									<div class="item">
										<h3 style="color: #6bab32; border-bottom: 3px solid #6bab32;">Nature</h3>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Vis lobortis partiendo dissentiet quo</a></h3>
											<div class="item-details">
												<div class="item-head">
													<a href="#" class="image-hover"><img src="images/photos/image-66.jpg" alt="" /></a>
												</div>
												<div class="item-content">
													<!-- <p>Aperiam argumentum eos an, no zril iuvaret aliquid per, laudem erroribus mel ex. Ea pro meis ocurreret volutpat ex...</p> -->
													<a href="#" class="read-more-link">Read More<i class="fa fa-angle-double-right"></i></a>
												</div>
												<div class="clear-float"></div>
											</div>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Quo id wisi graeci nec in altera eloquentiam ad nulla dolore</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Ullum liber virtute mei altera eloquentiam ad ut mutat pri ut</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Duo scripta an pri eirmod</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">In offendit probatus altera eloquentiam ad audire labores</a></h3>
										</div>
										<div class="post-item">
											<span class="itemdate left">25.07.14</span>
											<h3><a href="#">Quo id wisi graeci altera eloquentiam ad ec in nulla dolore</a></h3>
										</div>
										<a href="#" class="archive-button" style="background-color: #6bab32;">More Articles</a>
									</div>

								<!-- END .article-links-block -->
								</div>

							<!-- END .home-block -->
							</div>



							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="main-title" style="border-left: 4px solid #ef8722">
									<a href="#" class="right button" style="background: #ef8722; color: #ef8722;">View More Posts</a>
									<h2>Featured From World News</h2>
									<span>Most recent photo galleries</span>
								</div>
								<div class="home-featured-article">
									<a href="#" class="home-featured-item active">
										<span class="feature-text">
											<strong>Vocent saperet platonem mei eu</strong>
											<span>Et sit nobis alterum adversarium, qui ex elit integre, ea scribentur signiferumque usu. An duo stet etiam tritani, qui eruditi tibique iracundia an. Quidam delenit at vis, eam civibus menandri ut. Cu duo nisl probo dicunt.</span>
										</span>
										<img src="images/photos/image-71.jpg" alt="" />
									</a>
									<a href="#" class="home-featured-item">
										<span class="feature-text">
											<strong>Quidam delenit at vis eam</strong>
											<span>Debitis adolescens vim no, eu meis atqui eos, duo id dolorem deserunt hendrerit. Quo etiam mollis interesset in. Veniam appetere abhorreant ad cum, hinc viderer has an.</span>
										</span>
										<img src="images/photos/image-72.jpg" alt="" />
									</a>
									<a href="#" class="home-featured-item">
										<span class="feature-text">
											<strong>Vocent saperet platonem mei eu</strong>
											<span>Et sit nobis alterum adversarium, qui ex elit integre, ea scribentur signiferumque usu. An duo stet etiam tritani, qui eruditi tibique iracundia an. Quidam delenit at vis, eam civibus menandri ut. Cu duo nisl probo dicunt.</span>
										</span>
										<img src="images/photos/image-73.jpg" alt="" />
									</a>
									<a href="#" class="home-featured-item">
										<span class="feature-text">
											<strong>Quidam delenit at vis eam</strong>
											<span>Debitis adolescens vim no, eu meis atqui eos, duo id dolorem deserunt hendrerit. Quo etiam mollis interesset in. Veniam appetere abhorreant ad cum, hinc viderer has an.</span>
										</span>
										<img src="images/photos/image-74.jpg" alt="" />
									</a>
									<div class="home-featured-menu">
										<a href="#" class="active">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#">4</a>
									</div>
								</div>
							<!-- END .home-block -->
							</div>

							<!-- BEGIN .home-block -->
							<div class="home-block">
								<div class="banner">
									<a href="#" target="_blank"><img src="images/no-banner-728x90.jpg" alt="" /></a>
								</div>
							<!-- END .home-block -->
							</div>


							<div class="main-title">
								<h2>Shortcode Home Block</h2>
								<span>You can drop any shortcode you like</span>
							</div>

							<div class="article-content">

								<div class="paragraph-row">
									<div class="column6">

										<div class="accordion">
											<div class="active">
												<a href="#">Sea elitr verterem doctus nominati doctus</a>
												<div style="display: block;">
													<p>His ea legendos molestiae, veri illud facete per cu. Ferri temporibus disputando pro. Nonum deterruisset quo et, pri id case dolor iudicabit. Nam putent mnesarchum ut, quem appetere referrentur duo. Vis modus ubique indoctum no, nec legere assentior in.</p>
												</div>
											</div>
											<div>
												<a href="#">Ei eos natum constituam deterruisset minim probatus mel at</a>
												<div>
													<p>Quo causae omnium ut, ut dicit noluisse cum. Ei eos natum constituam deterruisset, minim probatus mel at. Sea elitr verterem cu, an doctus nominati vis. His id doctus numquam, vel postulant accommodare cu, id nec prima movet perpetua.</p>
												</div>
											</div>
											<div>
												<a href="#">Unum probo solum eum ei natum deserunt</a>
												<div>
													<p>His ea legendos molestiae, veri illud facete per cu. Ferri temporibus disputando pro. Nonum deterruisset quo et, pri id case dolor iudicabit. Nam putent mnesarchum ut, quem appetere referrentur duo. Vis modus ubique indoctum no, nec legere assentior in. Quo causae omnium ut, ut dicit noluisse cum. Ei eos natum constituam deterruisset, minim probatus mel at. Sea elitr verterem cu, an doctus nominati vis. His id doctus numquam, vel postulant accommodare cu, id nec prima movet perpetua.</p>
												</div>
											</div>
										</div>

									</div>
									<div class="column6">

										<div class="wp-caption aligncenter">
											<a href="images/photos/image-30.jpg" class="lightbox-photo"><img class="size-thumbnail" alt="" src="images/photos/image-30.jpg" /></a>
											<p class="wp-caption-text">Ludus zril eu est, pro an elit ornatus facilisi, vis ex aeque accumsan recteque. Duis repudiare reprehendunt vim ex, nonumes intellegebat quo an.</p>
										</div>

									</div>
								</div>
							</div>

						<!-- END .left-content -->
						</div>

						<!-- BEGIN #sidebar -->
						<aside id="sidebar">
							
		                    <div class="widget">
								<h3>Trending On TechRadar</h3>
								
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover"><img src="images/photos/mobile1.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<!-- <div class="content-category">
												<a href="#" style="color: #276197;">Tech News</a>
											</div> -->
											<h4><a href="#">Xiaomi Redmi 4A First Impressions: All-round package under a budget</a></h4>
											<span><a href="#">September 11, 2014</a></span>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover"><img src="images/photos/mobile2.jpg" alt="" /></a>
										</div>
										<div class="item-content">
										
											<h4><a href="#">Electronics larger than phones banned from cabins of some flights to the US</a></h4>
											<span><a href="#">September 11, 2014</a></span>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover"><img src="images/photos/mobile3.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											
											<h4><a href="#">How to download and install the Windows 10 Creators Update right now</a></h4>
											<span><a href="#">September 11, 2014</a></span>
										</div>
									</div>
								
							</div>
							
							<div class="widget">
								<h3>Comments</h3>
								<div class="comments-block">
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-avatar"><img src="images/photos/avatar-1.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<h4><a href="#">Portal-World</a></h4>
											<p>Cum an officiis integebat necessitatibus, impedi tes menandri has clita...</p>
											<a href="#" class="read-more-link">View article<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-avatar"><img src="images/photos/avatar-2.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<h4><a href="#">Keir Donato</a></h4>
											<p>Simul albucius accusata per in, ei soleat insolens.</p>
											<a href="#" class="read-more-link">View article<i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="widget">
								<h3>Latest Photo Galleries</h3>
								<div class="photo-gallery-widget">
									<div class="item">
										<div class="item-header">
											<div class="gallery-navi">
												<a href="#gal-left"><i class="fa fa-angle-left"></i></a>
												<a href="#gal-right"><i class="fa fa-angle-right"></i></a>
											</div>
											<div class="gallery-change">
												<a href="#" class="active"><img src="images/photos/image-67.jpg" alt="" /></a>
												<a href="#"><img src="images/photos/image-68.jpg" alt="" /></a>
												<a href="#"><img src="images/photos/image-69.jpg" alt="" /></a>
												<a href="#"><img src="images/photos/image-70.jpg" alt="" /></a>
											</div>
										</div>
										<div class="item-content">
											<h4><a href="#">Partem causae ut mee vix error impedit ex</a></h4>
											<p>Te lorem libris iracundia eos. Ne eam liber veritus, eos eu agam recteque, exerci reformidans sea no.</p>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<div class="gallery-navi">
												<a href="#gal-left"><i class="fa fa-angle-left"></i></a>
												<a href="#gal-right"><i class="fa fa-angle-right"></i></a>
											</div>
											<div class="gallery-change">
												<a href="#" class="active"><img src="images/photos/image-69.jpg" alt="" /></a>
												<a href="#"><img src="images/photos/image-70.jpg" alt="" /></a>
												<a href="#"><img src="images/photos/image-67.jpg" alt="" /></a>
												<a href="#"><img src="images/photos/image-68.jpg" alt="" /></a>
											</div>
										</div>
										<div class="item-content">
											<h4><a href="#">Has eu ceteros periculis ullamcorper illum quaeque adversarium est</a></h4>
											<p>Ex aeque civibus maiestatis nam, aliquip complectitur sea an. Autem viris dissentiet.</p>
										</div>
									</div>
								</div>
							</div>
							
							<div class="widget">
								<h3>Popular Articles</h3>
								<div class="article-block">
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover"><img src="images/photos/image-17.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #276197;">Tech News</a>
											</div>
											<h4><a href="#">Eum ex civibus pertinax antur his ea dicam</a></h4>
											<span><a href="#">September 11, 2014</a></span>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover"><img src="images/photos/image-18.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #ef8722;">World News</a>
											</div>
											<h4><a href="#">Eum ex civibus pertinax antur his ea dicam</a></h4>
											<span><a href="#">September 11, 2014</a></span>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="#" class="image-hover"><img src="images/photos/image-19.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<div class="content-category">
												<a href="#" style="color: #1985e1;">Nostalgia</a>
											</div>
											<h4><a href="#">Eum ex civibus pertinax antur his ea dicam</a></h4>
											<span><a href="#">September 11, 2014</a></span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="widget">
								<h3>Subscribe Newsletter</h3>
								<div class="subscribe-feed">
									<p>Te lorem libris iracundia eos. Ne eam liber veritus, eos eu agam recteque, exerci reformidans sea no.</p>

									<!-- <div class="coloralert aweber-success">
										<i class="fa fa-check"></i>
										<p>Success! Everything went well, You are now subscribed !</p>
										<a href="#close-alert"><i class="fa fa-times-circle"></i></a>
									</div> -->

									<!-- <div class="coloralert aweber-fail">
										<i class="fa fa-warning"></i>
										<p>Error Occurred!</p>
										<a href="#close-alert"><i class="fa fa-times-circle"></i></a>
									</div> -->

									<div class="coloralert aweber-loading">
										<i class="fa fa-refresh fa-spin"></i>
										<p>Loading.. <br>This may take a few seconds !</p>
										<a href="#close-alert"><i class="fa fa-times-circle"></i></a>
									</div>

									<form name="aweber-form" action="#" class="subscribe-form aweber-form">
										<p class="sub-name">
											<input type="text" value="" placeholder="Your name" name="u_name" class="u_name">
										</p>
										<p class="sub-email">
											<input type="text" value="" placeholder="E-mail address" name="email" class="email">
										</p>
										<p class="sub-submit">
											<input type="submit" value="Subscribe" class="button aweber-submit">
										</p>
									</form>
								</div>
							</div>
							
							<div class="widget">
								<h3>Trending Topics</h3>
								<div class="tagcloud">
									<a href="#">Yogi adithyanath</a>
									<a href="#">Trivendra sing rawat</a>
									<a href="#">Virat Kohli</a>
									<a href="#">Donald Trumph</a>
									<a href="#">Narendra modi</a>
									<a href="#">Rhul Gandhi</a>
									<a href="#">BCCI</a>
									<a href="#">Kapil Sharma</a>
								</div>
							</div>

							<div class="sidebar-fixed">

								<div class="widget">
									<h3>Socialize</h3>
									<div class="socialize-widget">
										<p>Te lorem libris iracundia eos. Ne eam liber veritus, eos eu agam recteque, exerci reformidans sea no.</p>
										<div class="ot-social-block">
											<a href="#" class="soc-link soc-facebook">
												<strong>2k<small>likes</small></strong>
												<span>facebook</span>
											</a>
											<a href="#" class="soc-link soc-twitter">
												<strong>901<small>tweets</small></strong>
												<span>twitter</span>
											</a>
											<a href="#" class="soc-link soc-google">
												<strong>81<small>+1's</small></strong>
												<span>google+</span>
											</a>
											<a href="#" class="soc-link soc-linkedin">
												<strong>34<small>shares</small></strong>
												<span>linkedin</span>
											</a>
										</div>
									</div>
								</div>

								<div class="widget">
									<div class="banner">
										<a href="#" target="_blank"><img src="images/no-banner-300x250.png" alt="" /></a>
									</div>
								</div>

							</div>

						<!-- END #sidebar -->
						</aside>


					</div>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- BEGIN .content -->
			</section>
			@endsection
