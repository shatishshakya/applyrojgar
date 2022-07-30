<?php include("include/header.php") ?> 
	<?php include("employment_news.php") ?> 		
			
	<div class="main-page-wrapper">

				<div class="home-service-section">
					<div class="container">
						<div class="col-md-12 main-container">
							<div class="theme-title text-center">
								<h2>Sarkari Result</h2>
							</div>

							<ul id="owl-carousel" class="rounded-circle owl-carousel owl-theme">
								<?php if($admit_card) { ?>
									<?php foreach($admit_card as $admit) {?>
										<li class="item">
											<div id="box">
												<div class="inner-box">
													<h5><a href="#" class="tran3s"><?php echo $admit ['IndexViewHeading'] ?? '' ?> </a></h5>
													<p><a href="#" class="tran3s">Apply Online</a></p>
												</div>
											</div>
										</li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div> 
				
				<div class="our-portfolio">
					<div class="container">
						<div class="theme-title">
							<h2>Lorem ipsum dollar sit</h2>
						</div> 
					</div> 
					<div class="wrapper">
						<div class="row">
							<div class="portfolio-slider">
								<div class="item">
									<div class="image">
										<img src="/assets/front-end/images/college_students.jpg" alt="">
									</div>
								</div>
								<div class="item">
									<div class="image">
										<img src="/assets/front-end/images/questions-college-kids.jpg" alt="">
									</div>
								</div>
								<div class="item">
									<div class="image">
										<img src="/assets/front-end/images/Abstract_Design_Background.jpg" alt="">
									</div>
								</div>
								<div class="item">
									<div class="image">
										<img src="/assets/front-end/images/Abstract_Design_Background.jpg" alt="">
									</div>
								</div>
								<div class="item">
									<div class="image">
										<img src="/assets/front-end/images/Abstract_Design_Background.jpg" alt="">
									</div>
								</div>
							</div> 
						</div>
					</div> 
				</div>

				<div class="pricing-plan-one">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-xs-12 wow fadeInRight">
								<div class="tab-content">
									<div id="monthly" class="tab-pane fade in active">
										<div class="clearfix">
											<div class="top-side-pro first-result-tab"><h4><strong> Results</strong> <i class="fa fa-users"></i></h4></div>
											<div class="right-side first-result-panel">	
												<ul>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Exam Final Result &amp; Selection Letter 2021</a></li>
													<li><a href="#" target="_blank">Indian Coast Guard Navik & Yantrik 01/2022 Batch Exam Result 2021</a></li>
													<li><a href="#" target="_blank">IB Intelligence Bureau ACIO Gr-II Tier-II Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Final Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Exam Final Result &amp; Selection Letter 2021</a></li>
													<li><a href="#" target="_blank">Indian Coast Guard Navik & Yantrik 01/2022 Batch Exam Result 2021</a></li>
													<li><a href="#" target="_blank">IB Intelligence Bureau ACIO Gr-II Tier-II Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Final Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Exam Final Result &amp; Selection Letter 2021</a></li>
													<li><a href="#" target="_blank">Indian Coast Guard Navik & Yantrik 01/2022 Batch Exam Result 2021</a></li>
													<li><a href="#" target="_blank">IB Intelligence Bureau ACIO Gr-II Tier-II Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Final Exam Result 2021</a></li>
												</ul>
												<div class="job-btn">
													<a href="<?php echo base_url('/results') ?>" target="_blank" class="more">View More </a><br>
												</div>
											</div> 
										</div>
									</div> 						  	
								</div>
							</div>
							<div class="col-md-4 col-xs-12 wow fadeInRight">
								<div class="tab-content">
									<div id="monthly" class="tab-pane fade in active">
										<div class="clearfix">
											<div class="top-side-pro second-result-tab"><h4><strong>Admit Card</strong> <i class="fa fa-users"></i></h4></div>
											<div class="right-side second-result-panel">
												<ul>
													<!----------------Admit Card start----------------------------------->
													<?php if($admit_card) { ?>
														<?php foreach($admit_card as $admit) {?>
															<li><a href="#" target="_blank"><?php echo $admit['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Admit Card end---------------------------->
												</ul>
												<div class="job-btn">
												<a href="<?php echo base_url('/admitcard') ?>" target="_blank" class="more">View More </a><br>
												</div>
											</div> 
										</div>
									</div> 						  	
								</div>
							</div>
							<div class="col-md-4 col-xs-12 wow fadeInRight">
								<div class="tab-content">
									<div id="monthly" class="tab-pane fade in active">
										<div class="clearfix">
											<div class="top-side-pro third-result-tab"><h4><strong> Goverment Jobs</strong> <i class="fa fa-users"></i></h4></div>
											<div class="right-side third-result-panel">
												<ul>
                                                    <!----------------Goverment JOb start----------------------------------->
													<?php if($goverment_job) { ?>
														<?php foreach($goverment_job as $goverment) {?>
															<li><a href="#" target="_blank"><?php echo $goverment['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Goverment job end---------------------------->

												
													<!--<li><a href="#" target="_blank">Bihar Police Steno ASI Exam Final Result &amp; Selection Letter 2021</a></li>
													<li><a href="#" target="_blank">Indian Coast Guard Navik & Yantrik 01/2022 Batch Exam Result 2021</a></li>
													<li><a href="#" target="_blank">IB Intelligence Bureau ACIO Gr-II Tier-II Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Final Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Exam Final Result &amp; Selection Letter 2021</a></li>
													<li><a href="#" target="_blank">Indian Coast Guard Navik & Yantrik 01/2022 Batch Exam Result 2021</a></li>
													<li><a href="#" target="_blank">IB Intelligence Bureau ACIO Gr-II Tier-II Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Final Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Exam Final Result &amp; Selection Letter 2021</a></li>
													<li><a href="#" target="_blank">Indian Coast Guard Navik & Yantrik 01/2022 Batch Exam Result 2021</a></li>
													<li><a href="#" target="_blank">IB Intelligence Bureau ACIO Gr-II Tier-II Exam Result 2021</a></li>
													<li><a href="#" target="_blank">Bihar Police Steno ASI Final Exam Result 2021</a></li>-->
												</ul>
												<div class="job-btn">
													<a href="<?php echo base_url('/goverment-job') ?>" target="_blank" class="more">View More </a><br>
												</div>
											</div> 
										</div>
									</div> 						  	
								</div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="pricing-plan-one pricing-plan-cro">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-xs-12 wow fadeInRight">
								<div class="row">
									<div class="col-md-6">
										<div class="tab-content">
											<div id="monthly" class="tab-pane fade in active">
												<div class="clearfix">
													<div class="top-side-pro four-result-tab"><h4><strong>Answer Key</strong> <i class="fa fa-users"></i></h4></div>
													<div class="right-side four-result-panel">
														<ul>
															<!---------------- Answr kEy start----------------------------------->
													<?php if($answer_key) { ?>
														<?php foreach($answer_key as $answer_keylist) {?>
															<li><a href="#" target="_blank"><?php echo $answer_keylist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Answer Key  end---------------------------->
														</ul>
														<div class="job-btn">
														<a href="<?php echo base_url('/answey-key') ?>" target="_blank" class="more">View More </a><br>
														</div>
													</div> 
												</div>
											</div> 						  	
										</div>
									</div>
									<div class="col-md-6">
										<div class="tab-content">
											<div id="monthly" class="tab-pane fade in active">
												<div class="clearfix">
													<div class="top-side-pro five-result-tab"><h4><strong>Syllabus</strong> <i class="fa fa-users"></i></h4></div>
													<div class="right-side five-result-panel">
														<ul>
															<!----------------syllabusstart----------------------------------->
													<?php if($syllabus) { ?>
														<?php foreach($syllabus as $syllabus_index) {?>
															<li><a href="#" target="_blank"><?php echo $syllabus_index['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------syllabus end---------------------------->
														</ul>
														<div class="job-btn">
														<a href="<?php echo base_url('/syllabus') ?>" target="_blank" class="more">View More </a><br>
														</div>
													</div> 
												</div>
											</div> 						  	
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6">
										<div class="tab-content">
											<div id="monthly" class="tab-pane fade in active">
												<div class="clearfix">
													<div class="top-side-pro six-result-tab"><h4><strong>Private Job</strong> <i class="fa fa-users"></i></h4></div>
													<div class="right-side six-result-panel">
														<ul>
															<!----------------private_job start----------------------------------->
													<?php if($private_job) { ?>
														<?php foreach($private_job as $private_joblist) {?>
															<li><a href="#" target="_blank"><?php echo $private_joblist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------private_job  end---------------------------->
														</ul>
														<div class="job-btn">
															<a href="<?php echo base_url('/private-job') ?>" target="_blank" class="more">View More </a><br>
														</div>
													</div> 
												</div>
											</div> 						  	
										</div>
									</div>
									<div class="col-md-6">
										<div class="tab-content">
											<div id="monthly" class="tab-pane fade in active">
												<div class="clearfix">
													<div class="top-side-pro seven-result-tab"><h4><strong>Admission </strong> <i class="fa fa-users"></i></h4></div>
													<div class="right-side seven-result-panel">
														<ul>
															<!----------------Admission start----------------------------------->
													<?php if($admission) { ?>
														<?php foreach($admission as $admissionlist) {?>
															<li><a href="#" target="_blank"><?php echo $admissionlist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Admission  end---------------------------->
														</ul>
														<div class="job-btn">
															<a href="<?php echo base_url('/admission') ?>" target="_blank" class="more">View More </a><br>	
														</div>
													</div> 
												</div>
											</div> 						  	
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-4 col-xs-12 wow fadeInRight">
								<div class="tab-content">
									<div id="monthly" class="tab-pane fade in active">
										<div class="clearfix">
											<div class="top-side-pro eight-result-tab"><h4><strong>Study Notes</strong> <i class="fa fa-users"></i></h4></div>
											<div class="right-side eight-result-panel">
												<ul>
													<!----------------study_notes start----------------------------------->
													<?php if($study_notes) { ?>
														<?php foreach($study_notes as $study_noteslist) {?>
															<li><a href="#" target="_blank"><?php echo $study_noteslist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------study_notes  end---------------------------->
												</ul>
												<div class="job-btn">
													<a href="<?php echo base_url('/study-notes') ?>" target="_blank" class="more">View More </a><br>
												</div>
											</div> 
										</div>
									</div> 						  	
								</div>
							</div>
						</div>
					</div>
				</div> 
            </br>
			<div class="pricing-plan-one">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-12 wow fadeInRight">
							<div class="tab-content">
								<div id="monthly" class="tab-pane fade in active">
									<div class="clearfix">
										<div class="top-side-pro first-result-tab"><h4><strong> Important Link </strong> <i class="fa fa-users"></i></h4></div>
										<div class="right-side first-result-panel">	
											<ul>
												<!----------------Important Link start----------------------------------->
												<?php if($important_link) { ?>
														<?php foreach($important_link as $important_linklist) {?>
															<li><a href="#" target="_blank"><?php echo $important_linklist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Important Link  end---------------------------->
											</ul>
											<div class="job-btn">
												<a href="<?php echo base_url('/important-link') ?>" target="_blank" class="more">View More </a><br>
											</div>
										</div> 
									</div>
								</div> 						  	
							</div>
						</div>
						<div class="col-md-4 col-xs-12 wow fadeInRight">
							<div class="tab-content">
								<div id="monthly" class="tab-pane fade in active">
									<div class="clearfix">
										<div class="top-side-pro second-result-tab"><h4><strong>Offline Form</strong> <i class="fa fa-users"></i></h4></div>
										<div class="right-side second-result-panel">
											<ul>
												<!----------------Offline Form start----------------------------------->
												<?php if($offline_job) { ?>
														<?php foreach($offline_job as $offline_joblist) {?>
															<li><a href="#" target="_blank"><?php echo $offline_joblist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Offline Form  end---------------------------->
											</ul>
											<div class="job-btn">
												<a href="<?php echo base_url('/offline-forms') ?>" target="_blank" class="more">View More </a><br>
											</div>
										</div> 
									</div>
								</div> 						  	
							</div>
						</div>
						<div class="col-md-4 col-xs-12 wow fadeInRight">
							<div class="tab-content">
								<div id="monthly" class="tab-pane fade in active">
									<div class="clearfix">
										<div class="top-side-pro third-result-tab"><h4><strong>Video Link</strong> <i class="fa fa-users"></i></h4></div>
										<div class="right-side third-result-panel">
											<ul>
													<!----------------Offline Form start----------------------------------->
													<?php if($vedio_link) { ?>
														<?php foreach($vedio_link as $vedio_linklist) {?>
															<li><a href="#" target="_blank"><?php echo $vedio_linklist['IndexViewHeading'] ?? '' ?></a></li>
														<?php } ?>
													<?php } ?>

													<!-----------------------Offline Form  end---------------------------->
											
												
											</ul>
											<div class="job-btn">
												<a href="<?php echo base_url('/vedio-link') ?>" target="_blank" class="more">View More </a><br>
											</div>
										</div> 
									</div>
								</div> 						  	
							</div>
						</div>
					</div>
				</div>
			</div> 


			</div>
			
            <?php include("include/footer.php") ?> 
	