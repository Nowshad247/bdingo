	<?php /* Template Name: Home page */ ?>
	<?php
    get_header();
    ?>
	<!-- ------------- hero banner slider-------- -->
	<div id="contents" class="sixteen columns">

	    <div class="eleven columns" id="left-content">
	        <div class="row mainwrapper">
	            <div class="pm">
	                <a href="https://www.youtube.com/watch?v=v1R-CB3e-pw" target="_blank">
	                    <!-- <img src="National-Portal-Card-PM.jpg"> -->
						<?php
							if(has_post_thumbnail()){
								the_post_thumbnail( 'full' );
							}
						?>
	                </a>
	            </div>
	            <div class="scroll">
	                <h3>
	                    <marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
	                        নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD
	                        অ্যাপ। ডাউনলোড করতে ক্লিক করুন <a href="https://bit.ly/coronatracerbd" target="_blank"
	                            style="color: blue;">https://bit.ly/coronatracerbd</a>। নিজে সুরক্ষিত থাকুন অন্যকেও
	                        নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর মাধ্যমে আর্থিক অনুদান
	                        পৌঁছে দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন <a
	                            href="http://ekdesh.ekpay.gov.bd/" target="_blank"
	                            style="color: blue;">ekdesh.ekpay.gov.bd</a> অথবা <a
	                            href="http://play.google.com/store/apps/details?id=com.synesis.donationapp" target="_blank"
	                            style="color: blue;">“Ek Desh”</a> অ্যাপ ডাউনলোড করুন। করোনার লক্ষণ
	                        দেখা দিলে গোপন না করে ডাক্তারের পরামর্শের জন্য ফ্রি কল করুন ৩৩৩ ও ১৬২৬৩ নম্বরে।
	                        করোনাভাইরাস প্রতিরোধে নিয়ম মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন।
	                        ভিজিট করুন <a href="http://corona.gov.bd/" target="_blank"
	                            style="color: blue;">corona.gov.bd</a>
	                    </marquee>
	                </h3>
	            </div>
	            <div class="scroll">
	                <h3>
	                    <marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
	                        শুরু হয়েছে সুবর্ণজয়ন্তী অনলাইন কুইজ প্রতিযোগিতা। কুইজে অংশ নিয়ে জিতে নিন উন্নতমানের
	                        ল্যাপটপসহ ১৫০টি আকর্ষণীয় পুরস্কার। অংশ নিতে ভিজিট করুন: <a href="https://bangladesh50.gov.bd/"
	                            style="color:blue">bangladesh50.gov.bd</a>
	                    </marquee>
	                </h3>
	            </div>


				<?php
				/**
				 * Setup query to show the top_banner_slider post type 
				 */
				$args = array(  
					'post_type' => 'top_banner_slider',
					'post_status' => 'publish',
					'post_formats' => 'gallery',
					'orderby' => 'date', 
					'order' => 'ASC', 
				);

				$loop = new WP_Query( $args ); 
					?>
				<ul class="rslides" id="front-image-slider">
					<?php
					while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
					<li>
	                    <a target="_blank" href="#">
						<?php
							if(has_post_thumbnail()){
								the_post_thumbnail( 'full' );
							}
							endwhile;
						?>
						</a>
					</li>
					<?php
				?>
				</ul>
				<?php
				wp_reset_postdata(); 
				wp_reset_query();
				?>


	            <!-- <ul class="rslides" id="front-image-slider">
	                <li>
	                    <a target="_blank" href="#">
	                        <img src="sites/top_banner/4-02.jpg" alt="" width="960" height="220" /> </a>

	                </li>
	                <li>

	                    <a target="_blank" href="#">
	                        <img src="sites/top_banner/Banner-1.jpg" alt="" width="960" height="220" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="#">
	                        <img src="sites/top_banner/333_gov.png" alt="" width="960" height="220" />
	                    </a>

	                </li>
	            </ul> -->






	            <div class="eservices-tabs">
	                <ul class="tab-links">
	                    <li class="active"><a href="#tab1">জনপ্রিয় সেবা</a></li>
	                    <li><a href="#tab2">নতুন সেবা</a></li>
	                    <li><a href="#tab3">মোবাইল সেবা</a></li>
	                    <li><a href="#tab4">দপ্তর ভিত্তিক সেবা</a></li>
	                    <li><a href="#tab5">সকল ই-সেবা</a></li>
	                </ul>

	                <div class="tab-content">
	                    <div id="tab1" class="tab active">
	                        <div class="slider-wrapper">

	                            <div class="slider slider1">


	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>


	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>
	                            </div>

	                        </div>
	                    </div>

	                    <div id="tab2" class="tab">
	                        <div class="slider-wrapper">
	                            <div class="eservice-block">
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                    </a>
	                                    <a href="#" class="service-type">
	                                        ইউটিলিটি বিল </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                            height="" /> </a>
	                                    <a href="#" class="service-type">
	                                        পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                    </a>
	                                    <a href="#" class="service-type">
	                                        ইউটিলিটি বিল </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                            height="" /> </a>
	                                    <a href="#" class="service-type">
	                                        পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                    </a>
	                                    <a href="#" class="service-type">
	                                        ইউটিলিটি বিল </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                            height="" /> </a>
	                                    <a href="#" class="service-type">
	                                        পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                    </a>
	                                    <a href="#" class="service-type">
	                                        ইউটিলিটি বিল </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                            height="" /> </a>
	                                    <a href="#" class="service-type">
	                                        পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                    </a>
	                                    <a href="#" class="service-type">
	                                        ইউটিলিটি বিল </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                            height="" /> </a>
	                                    <a href="#" class="service-type">
	                                        পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                    </a>
	                                    <a href="#" class="service-type">
	                                        ইউটিলিটি বিল </a>
	                                </div>
	                                <div class="eservice-cat">
	                                    <a href="#">
	                                        <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                            height="" /> </a>
	                                    <a href="#" class="service-type">
	                                        পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>


	                    <div id="tab3" class="tab">
	                        <div class="slider-wrapper">
	                            <div class="slider slider3">

	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>


	                            </div>
	                        </div>
	                    </div>





	                    <div id="tab4" class="tab">
	                        <div class="slider-wrapper">
	                            <div class="slider slider2 sector-wise-eservice">

	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>
	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>
	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>


	                            </div>
	                        </div>
	                    </div>



	                    <div id="tab5" class="tab">
	                        <div class="slider-wrapper all-eservices">
	                            <div class="slider slider2">
	                                <div class="eservice-block">
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/utility.png" alt="" width="" height="" />
	                                        </a>
	                                        <a href="#" class="service-type">
	                                            ইউটিলিটি বিল </a>
	                                    </div>
	                                    <div class="eservice-cat">
	                                        <a href="#">
	                                            <img src="sites/eservice_cat_icon/passport_visa.png" alt="" width=""
	                                                height="" /> </a>
	                                        <a href="#" class="service-type">
	                                            পাসপোর্ট, ভিসা ও ইমিগ্রেশন </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>


	                </div>
	            </div>
	            <ul class="graphical-result-btn" id="graphical-result-btn-mobile">
	                <li>
	                    <a target="_blank" href="https://surokkha.gov.bd/">
	                        <img src="https://bangladesh.gov.bd/sites/default/files/files/bangladesh.gov.bd/graphical_result_button/d58fb64e_d478_48dd_a0f2_1058a4f6ca8d/bangladesh-portal--batton-bangla.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="https://janatarsarkar.gov.bd/">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/00ed884a_8459_48ed_9f70_c08faeae5592/Jonotar%20Sorkar%20banner-Bangla.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="https://www.mygov.bd/">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/6b8058ef_c17d_4a2d_9b26_b4779731503b/mygov_bn.jpg"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank"
	                        href="site/view/job_category/%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%bf%20%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a7%8b%e0%a6%97%20%e0%a6%ac%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%aa%e0%a7%8d%e0%a6%a4%e0%a6%bf">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/f70597ae_c19a_4747_b124_74345d0c78f8/Tamplate_govtjob_bn.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank"
	                        href="site/view/gurd_files_category/%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2%20%e0%a6%97%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%a1%20%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%b2.html">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/15e8dd41_e7e2_41c9_b2de_f9b9ca76273a/Tamplate_guard_bn.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="site/view/policy/index.html">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/f5305465_6635_4ced_8ca0_8db653dfee7c/Tamplate_policy_bn.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="site/page/5c238920-a65f-4168-9c2b-70c39dc7cb1c.html">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/48de805b_74e3_46d8_8166_3209afc9e078/Tamplate_Apps_bn%20(5).png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://xn--d5by7bap7cc3ici3m.xn--54b7fta0cc/">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/a9e85a92_5cb5_48e1_b38b_f0102aca94a8/Tamplate_inherit_bn%20(4).png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.bangladesh.gov.bd/gpf/index.php?lang=bn">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/1c55061c_5726_4474_9972_87195b05be89/Tamplate_fund_bn.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://accessibledictionary.gov.bd/">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/55470c93_2944_41f9_990d_d9f644cdb05d/Tamplate_Dictonary_bn.png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank"
	                        href="site/view/district_branding_book/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be-%e0%a6%ac%e0%a7%8d%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a6%bf%e0%a6%82%20%e0%a6%ac%e0%a7%81%e0%a6%95.html">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/d2712647_cde4_4e80_afdc_a1ab27bcd2bd/Tamplate_DistrictBranding_b%20(3).png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.muktopaath.gov.bd/course-details/106">
	                        <img src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/deda7b23_8e65_4d6f_b68c_3e71c5a6352d/Tamplate_security_bn%20(1).png"
	                            alt="" width="315" height="60" /> </a>

	                </li>
	            </ul>
	            <div class="gov-news-initiatives">
	                <div class="gov-initiatives">
	                    <div class="full-row gov-init-header">
	                        <span style="float:left">
	                            <h5>উদ্যোগ</h5>

	                        </span>

	                    </div>
	                    <div class="gov-init-list">
	                        <ul>

	                            <li><a href="#">
	                                    বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
	                            </li>

	                            <li><a href="#">বাংলাদেশে
	                                    ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a>
	                            </li>
	                            <li><a href="#">
	                                    বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
	                            </li>

	                            <li><a href="#">বাংলাদেশে
	                                    ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a>
	                            </li>
	                            <li><a href="#">
	                                    বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
	                            </li>

	                            <li><a href="#">বাংলাদেশে
	                                    ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a>
	                            </li>
	                        </ul>

	                        <span style="float:right">
	                            <a class="btn" href="#">সকল</a>
	                        </span>

	                    </div>
	                </div>

	            </div>
	            <ul class="popular-portal">
	                <li>
	                    <a target="_blank" href="http://forms.gov.bd/">
	                        <img src="sites/popular_portal/forms_portal_logo%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.ebook.gov.bd/">
	                        <img src="sites/popular_portal/ebook_bangla%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://forms.gov.bd/">
	                        <img src="sites/popular_portal/forms_portal_logo%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.ebook.gov.bd/">
	                        <img src="sites/popular_portal/ebook_bangla%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://forms.gov.bd/">
	                        <img src="sites/popular_portal/forms_portal_logo%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.ebook.gov.bd/">
	                        <img src="sites/popular_portal/ebook_bangla%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://forms.gov.bd/">
	                        <img src="sites/popular_portal/forms_portal_logo%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.ebook.gov.bd/">
	                        <img src="sites/popular_portal/ebook_bangla%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://forms.gov.bd/">
	                        <img src="sites/popular_portal/forms_portal_logo%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	                <li>
	                    <a target="_blank" href="http://www.ebook.gov.bd/">
	                        <img src="sites/popular_portal/ebook_bangla%20(1).png" alt="" width="222" height="65" />
	                    </a>

	                </li>
	            </ul>
	            <div class="mostPopularPanel">
	                <h4 class="title">
	                    জনপ্রিয়
	                </h4>
	                <ul class="topList">
	                    <li>
	                        <h5>সেবাসমূহ</h5>
	                        <hr>
	                        <div class="topservices" id="topservices">
	                            <ul style="list-style-type:square">
	                                <li><a title="ই-টেন্ডারিং" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=https://www.eprocure.gov.bd/&amp;id=62ecfae5-b390-4508-af39-7a956411c4c2">ই-টেন্ডারিং</a>
	                                </li>
	                                <li><a title="জাতীয়" পরিচয়পত্রের="" তথ্য="" হালনাগাদকরন="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=https://services.nidw.gov.bd/&amp;id=4a1cddcb-4911-49ea-95fa-9ed214bb5511">জাতীয়
	                                        পরিচয়পত্রের তথ্য হালনাগাদকরন</a></li>
	                                <li><a title="জন্ম" ও="" মৃত্যু="" নিবন্ধন="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=http://bris.lgd.gov.bd/pub/?pg=application_form&amp;id=1663d183-93dd-41b8-a2ab-ac3d24fcca02">জন্ম
	                                        ও মৃত্যু নিবন্ধন</a></li>
	                                <li><a title="আয়কর" নিবন্ধন="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=http://secure.incometax.gov.bd/TINHome&amp;id=4f515695-a2db-4824-b79b-61e44ce6a3b4">আয়কর
	                                        নিবন্ধন</a></li>
	                                <li><a title="এসএসসি," দাখিল="" ও="" সমমানের="" পরীক্ষার="" ফলাফল="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=http://www.educationboardresults.gov.bd&amp;id=d3f492ba-fb21-453f-b4b2-11ca63ed426f">এসএসসি,
	                                        দাখিল ও সমমানের পরীক্ষার ফলাফল</a></li>
	                                <li><a title="অনলাইনে" পাসপোর্টের="" আবেদন="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a&amp;id=e81f879b-5c90-44e0-9482-0ec9cb65421f">অনলাইনে
	                                        পাসপোর্টের আবেদন</a></li>
	                                <li><a title="নতুন" ভোটার="" নিবন্ধন="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=https://services.nidw.gov.bd/&amp;id=cc923a94-b6a5-4885-ba8b-21f07e99db10">নতুন
	                                        ভোটার নিবন্ধন</a></li>
	                                <li><a title="অনলাইন" ভিসা="" যাচাই="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction&amp;id=01627421-2881-4215-afb5-78097de9dd11">অনলাইন
	                                        ভিসা যাচাই</a></li>
	                                <li><a title="কৃষি" গবেষণা="" তথ্য="" ব্যবস্থাপনা="" ডাটাবেজ="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=armis.barcapps.gov.bd&amp;id=40febdf8-cf86-4ed5-8b13-6ee0626087a8">কৃষি
	                                        গবেষণা তথ্য ব্যবস্থাপনা ডাটাবেজ</a></li>
	                                <li><a title="রেলওয়ে" টিকেটিং="" সিস্টেম="" target="_blank"
	                                        href="//www.bangladesh.gov.bd/redirector.php?url=https://www.esheba.cnsbd.com/&amp;id=cddf7702-5075-44b8-aac4-fd3f4efb920b">রেলওয়ে
	                                        টিকেটিং সিস্টেম</a></li>
	                            </ul>
	                        </div>
	                    </li>

	                    <li style="display:block;">
	                        <h5>পাতাসমূহ</h5>
	                        <hr>
	                        <div class="toppages" id="toppages">
	                            <span style="display: none;">Loading...</span>
	                        </div>
	                    </li>

	                    <li>
	                        <h5>পোর্টালসমূহ</h5>
	                        <hr>
	                        <div class="topsites" id="topsites">
	                            <span style="display: none;">Loading...</span>
	                        </div>
	                    </li>

	                    <br style="clear: both">
	                </ul>

	                <span style="float:right;margin-right:50px;">
	                    <a class="btn" title="বিস্তারিত তথ্য" target="_blank"
	                        href="http://103.48.16.100/analytics_template/">আরও...</a>
	                </span>
	            </div>
	            <div class="column block">
	                <h5 class="bk-org title">
	                    আশ্রয়ণের অধিকার শেখ হাসিনার উপহার
	                </h5>

	                <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
	                    <tbody>
	                        <tr>
	                            <td style="width:33%"><iframe frameborder="0"
	                                    src="https://www.youtube.com/embed/l7G3TPz6P24" width="100%"></iframe></td>
	                            <td style="width:33%"><iframe frameborder="0"
	                                    src="https://www.youtube.com/embed/z6llDxY5JFs" width="100%"></iframe></td>
	                            <td style="width:33%"><iframe frameborder="0"
	                                    src="https://www.youtube.com/embed/MvTLqrU9ZbQ" width="100%"></iframe></td>
	                        </tr>
	                    </tbody>
	                </table>
	                <p>
	                </p>
	            </div>
	            <div class="column block">
	                <h5 class="bk-org title">
	                    অন্যান্য ভিডিও
	                </h5>

	                <table border="1" cellpadding="1" cellspacing="1" style="height:220px; width:100%">
	                    <tbody>
	                        <tr>
	                            <td style="text-align:center">
	                                <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg"
	                                        width="100%"></iframe>
	                                </p>

	                                <p><strong>ফল আর্মিওয়ার্ম পর্যবেক্ষণ ও সনাক্তকরণ</strong></p>
	                            </td>
	                            <td style="text-align:center">
	                                <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg"
	                                        width="100%"></iframe>
	                                </p>

	                                <p><strong>বন্যার সময় কি করণীয়</strong></p>
	                            </td>
	                            <td style="text-align:center">
	                                <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/aI97ajpyq00"
	                                        title="YouTube video player" width="100%"></iframe></p>

	                                <p><strong>ভ্যাকসিনের জন্য নিবন্ধন করুন </strong></p>
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	                <p>
	                </p>
	            </div>
	        </div>

	    </div>

	    <div class="five columns ml10" id="right-content">
	        <ul class="graphical-result-btn" id="graphical-result-btn-desktop">
	            <li>
	                <a target="_blank" href="https://janatarsarkar.gov.bd/">
	                    <img src="https://bangladesh.gov.bd/sites/default/files/files/bangladesh.gov.bd/graphical_result_button/d58fb64e_d478_48dd_a0f2_1058a4f6ca8d/bangladesh-portal--batton-bangla.png"
	                        alt="" width="315" height="60" /> </a>

	            </li>
	            <?php
                if (is_active_sidebar("sidebar-1")) {
                    dynamic_sidebar("sidebar-1");
                }
                ?>
	        </ul>
	        <div class="nav_all_national_portal">
	            <h4>
	                সকল বাতায়ন
	            </h4>

	            <div class="batayon-con select-all-portal">
	                <select id="np-div-list">
	                    <option selected="" value="">ওয়েবসাইট বাছাই করুন</option>
	                    <option url="site/view/ministry_n_directorate_list" value="">মন্ত্রণালয়</option>
	                    <option url="site/page/3c1910f1-686d-4a57-9400-0b2743241438" value="">অধিদপ্তর </option>
	                    <option url="http://www.dhakadiv.gov.bd/" value="68">ঢাকা বিভাগ</option>
	                    <option url="http://www.chittagongdiv.gov.bd/" value="36">চট্টগ্রাম বিভাগ</option>
	                    <option url="http://www.rajshahidiv.gov.bd/" value="60">রাজশাহী বিভাগ</option>
	                    <option url="http://www.khulnadiv.gov.bd/" value="65">খুলনা বিভাগ</option>
	                    <option url="http://www.barisaldiv.gov.bd/" value="66">বরিশাল বিভাগ</option>
	                    <option url="http://www.rangpurdiv.gov.bd/" value="69">রংপুর বিভাগ</option>
	                    <option url="http://www.sylhetdiv.gov.bd/" value="67">সিলেট বিভাগ</option>
	                </select>
	                <input type="button" id="go-np-div-list" name="go-np" value="চলুন" />
	            </div>


	            <div id="div-np-dist-list" class="batayon-con select-all-portal" style="display: none;">
	                <select id="np-dist-list">
	                </select>
	                <input type="button" id="go-np-dist-list" name="go-np" value="চলুন" />
	            </div>

	            <div id="div-np-upz-list" class="batayon-con select-all-portal" style="display: none;">
	                <select id="np-upz-list">
	                </select>
	                <input type="button" id="go-np-upz-list" name="go-np" value="চলুন" />
	            </div>
	            <div id="div-np-union-list" class="batayon-con select-all-portal" style="display: none;">
	                <select id="np-union-list">
	                </select>
	                <input type="button" id="go-np-union-list" name="go-np" value="চলুন" />
	            </div>
	            <div style="text-align: right; float: right; display:none;" id="np-msg-loading-icon">
	                <img src="themes/responsive_npf/templates/bangladesh/images/ajax-loader.gif" />
	            </div>


	        </div>

	        <div class="column block">
	            <h5 class="bk-org title">
	                সুবর্ণজয়ন্তী কুইজ প্রতিযোগিতা-২০২২
	            </h5>
	        </div>
	        <style></style>
	        <script></script>
	        <div class="column block">
	            <h5 class="bk-org title">
	                মুজিব১০০ আ্যাপ
	            </h5>

	            <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU"
	                    width="100%"></iframe></p>
	            <p>
	            </p>
	        </div>
	        <style></style>
	        <script></script>
	        <div class="column block">
	            <h5 class="bk-org title">
	                মাস্ক পরুন সেবা নিন
	            </h5>

	            <p style="text-align:center"><img alt=""
	                    src="sites/default/files/files/bangladesh.gov.bd/graphical_result_button/4c824ed1_b7a3_404d_9a64_6ff3b75b7197/mask-bd-portal%20(1).jpg"
	                    style="height:200px; width:100%" /></p>
	            <p>
	            </p>
	        </div>
	        <style></style>
	        <script></script>
	        <div class="nav_all_national_portal right-side-video">
	            <h4>
	                ডেঙ্গু প্রতিরোধে করণীয়
	            </h4>
	            <p><a href="site/page/91530698-c795-4542-88f2-5da1870bd50c.html" target="_blank"><img alt=""
	                        src="sites/default/files/files/bangladesh.gov.bd/npfblock/dengue/dengu.jpg"
	                        style="height:200px; width:100%" /></a></p>
	            <p>
	            </p>
	        </div>
	        <div class="nav_all_national_portal right-side-video">
	            <h5 class="heading">
	                ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর
	            </h5>
	            <iframe width="100%" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY?rel=0" frameborder="0"
	                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
	                allowfullscreen></iframe>

	            <h5 class="heading">
	                রূপময় বাংলাদেশ
	            </h5>
	            <iframe width="100%" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI?showinfo=0&amp;rel=0"
	                frameborder="0" allowfullscreen></iframe>
	        </div>
	        <ul class="graphical-service-btn">
	            <li>
	                <a target="_blank" href="https://mof.portal.gov.bd/site/view/budget_mof/২০১৯-২০/">
	                    <img src="sites/graphical_service_button/budget_bn_new.png" alt="" width="315" height="60" /> </a>

	            </li>
	            <li>
	                <a target="_blank" href="http://www.dsebd.org/">
	                    <img src="sites/graphical_service_button/stock_bangla.png" alt="" width="315" height="60" /> </a>

	            </li>
	            <li>
	                <a target="_blank" href="https://mof.portal.gov.bd/site/view/budget_mof/২০১৯-২০/">
	                    <img src="sites/graphical_service_button/budget_bn_new.png" alt="" width="315" height="60" /> </a>

	            </li>
	            <li>
	                <a target="_blank" href="http://www.dsebd.org/">
	                    <img src="sites/graphical_service_button/stock_bangla.png" alt="" width="315" height="60" /> </a>

	            </li>
	        </ul>


	        <!-- Contact Form -->
	        <div id="contactdiv">
	            <form class="form" action="#" id="contact">

	                <div class="feedback-header">
	                    <span class="feedback-title">আপনার মতামত প্রদান করুন</span>
	                    <img src="#" class="feedback-cross-btn" alt="x" id="cancel" />
	                </div>
	                <div class="feedback-frm-content">
	                    <label>নাম:
	                        <span>*</span>
	                    </label>
	                    <input type="text" id="name" placeholder="নাম" />
	                    <label>ই-মেইল:
	                        <span>*</span>
	                    </label>
	                    <input type="text" id="email" placeholder="ই-মেইল" />
	                    <label>মতামত:</label>
	                    <textarea id="message" placeholder="মতামত"></textarea>

	                    <span style="display:none; width:100%; float: left;" id="msg-loading-icon">
	                        <img src="themes/responsive_npf/templates/bangladesh/images/ajax-loader.gif" />
	                    </span>
	                    <span style="display:none;" id="success-message">আপনার মতামত সফলভাবে পাঠানো হয়েছে! ধন্যবাদ
	                        ।</span>

	                    <input type="button" id="send" value="প্রেরণ করুন" />
	                    <input type="button" id="cancel-form" value="বাতিল করুন" />
	                </div>
	            </form>
	        </div>

	    </div>
	</div>

	<?php
    get_footer();