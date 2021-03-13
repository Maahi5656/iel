        <footer class="footer sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget">
                        <?php
                           $query = "SELECT * FROM profile WHERE ID=1";
                           $result = mysqli_query($connection, $query);
                        ?>
                        <?php foreach($result as $row){ ?>
                            <a class="logo" href="<?php echo $row['website'] ?>">
                              <img class="img-thumbnail" src="<?php echo $row['image'] ?>" alt="Awesome Image" style="height: 80px;">
                            </a>
                      <?php } ?>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada fringilla sem, at dictum lectus ultricies quis. Etiam eu bibendum orci. Aliquam erat volutpat.</p>
                        <!-- <div class="link"><a href="#">MORE ABOUT US</a> </div>
 -->
                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Services</h4>

                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="#">Hotel Growth</a></li>
                                <li><a href="#">Hotel Loan</a></li>
                                <li><a href="#">Financial Planning</a></li>
                                <li><a href="#">Insurance Consulting</a></li>
                                <li><a href="#">Retirenment Planing</a></li>
                                <li><a href="#">Tax Planing</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget subscribe-widget">
                        <div class="title">
                          <h4>Subscribe Newsletter</h4>
                        </div>
                        <form action="#">
                          <p>Get latest updates and offers.</p>
                          <div class="newsletter-widget">
                            <input type="text" placeholder="Enter your email address">
                            <button type="submit" class="ped-btn-footer">SUBSCRIBE US</button>
                          </div>
                        </form>

                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php
                             $sql = "SELECT * FROM profile WHERE ID=1";
                             $result = mysqli_query($connection, $sql);
                        ?>                        
                        <div class="footer-widget subscribe-widget">
                          <?php foreach($result as $row){ ?>
                          <div class="title">
                            <h4>Contact Us</h4>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                              <p><?php echo $row['address'] ?></p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                              <p><?php echo $row['contact'] ?></p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="text">
                              <p><a href="#"><?php echo $row['email'] ?></a></p>
                            </div>
                          </div>

                          <ul class="social list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        <?php } ?>   
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </footer>
        <!-- End Footer bottom section -->
        <section class="footer-bottom">
                    <div class="container clearfix">
                      <div class="pull-left">
                        <p>Copyright © Marcho 2018. All rights reserved. </p>
                      </div>
                      <div class="pull-right">
                        <p>Created by: <a href="https://akaarit.com/">Akaar IT</a></p>
                      </div>
                    </div>
                  </section>

		<!-- all js files -->

		<!-- jquery latest version -->
		<script src="frontend_assets/js/marco/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="frontend_assets/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="frontend_assets/js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="frontend_assets/js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="frontend_assets/js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="frontend_assets/js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="frontend_assets/js/jquery.stellar.min.js"></script>
        <!-- stellar js -->
        <script src="frontend_assets/js/imagelightbox.min.js"></script>
		<!-- magnific js -->
        <script src="frontend_assets/js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="frontend_assets/js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="frontend_assets/js/jquery.meanmenu.js"></script>
        <!-- tabs js -->
        <script src="frontend_assets/js/tabs.js"></script>
		<!-- Form validator js -->
		<script src="frontend_assets/js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="frontend_assets/js/plugins.js"></script>
        <!-- datapicker js -->
        <script src="frontend_assets/js/zebra_datepicker.min.js"></script>
		<!-- main js -->
		<script src="frontend_assets/js/main.js"></script>
	</body>

</html>