            <!-- ------------- footer-------- -->
            <div class="sixteen columns">
                <div class="footer-artwork" id="footer-artwork">&nbsp;</div>
                <div class="footer-wrapper full-width" id="footer-wrapper">
                    <div id="footer-menu">
                        <div class="ten columns">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'footer-menu',
                                'items_wrap'        => '<ul>%3$s</ul>',
                                'add_li_class'  => 'test',
                            ));
                            ?>
                            <!-- <ul>
                                <li><a href="#">গোপনীয়তার
                                        নীতিমালা</a></li>
                                <li><a href="#">ব্যবহারের
                                        শর্তাবলি</a></li>
                                <li><a href="#">সার্বিক
                                        সহযোগিতায়</a></li>
                                <li><a href="#">সাইট
                                        ম্যাপ</a></li>
                                <li><a href="#">সচরাচর
                                        জিজ্ঞাসা</a></li>
                            </ul> -->
                            <div class="full-row">
                                <div style="float:left; margin-left:20px; font-size:.9em;">
                                    সাইটটি শেষ হাল-নাগাদ করা হয়েছে:
                                    <span style="font-style:italic;">
                                        &#x09E8;&#x09E6;&#x09E8;&#x09E8;-&#x09E6;&#x09E8;-&#x09E8;&#x09E9;
                                        &#x09E7;&#x09E7;:&#x09E9;&#x09E8;:&#x09E7;&#x09EA; </span>
                                </div>
                            </div>

                        </div>

                        <div class="six columns credit-org">
                            <div class="full-row">

                                পরিকল্পনা ও বাস্তবায়নে:

                                <a href="https://a2i.gov.bd/">
                                    এটুআই,
                                </a>

                                <a target="_blank" href="https://cabinet.gov.bd/">
                                    মন্ত্রিপরিষদ বিভাগ,
                                </a>


                                <a target="_blank" href="http://www.bcc.net.bd/">
                                    বিসিসি,
                                </a>

                                <a target="_blank" href="https://basis.org.bd/">
                                    বেসিস,
                                </a>
                                <a target="_blank" href="http://doict.gov.bd/">
                                    ডিওআইসিটি </a>
                            </div>
                            <div class="full-row">
                                <span>
                                    কারিগরি সহায়তায়: </span>
                                <img style="vertical-align: baseline;" src="sites/images/np-logo-set.png" alt="">
                            </div>

                        </div>


                    </div>

                </div>
            </div>
            </div>
            <?php wp_footer(); ?>

            </body>

            </html>