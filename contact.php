<?php
include 'database.php';
?>
<?php include 'inc/frontend/header.php' ?>
        <!-- MAin menu ends -->
        <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Contact us</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-path">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->



        <section class="contact-us bg-color sec-padding">
            <div class="container">

                <div class="rox">
                    <div class="col-md-7">

                        <div class="main-title">
                            <h3>We'd Love to Hear From You</h3>
                            <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies dui, ut rhoncus libero augue. </p>
                        </div>

                        <div class="form">
                            <div class="row">
                                <p class="success" id="success"></p>
                                <p class="error" id="error"></p>
                                <form name="contact_form" id="contact_form" method="post" action="mail.php">
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Subject" name="contact_subject" id="contact_subject" class="input"></div>
                                    <div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
                                    <div class="col-md-3"><input name="message" type="submit" value="submit" onClick="validateContact();"></div>
                                </form>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">
                       <?php

                         $sql = "SELECT * FROM profile WHERE ID=1";
                         $result = mysqli_query($connection, $sql);
                       ?>
                        <div class="contact-get">
                            <div class="main-title">
                                <h3><span>GET IN</span> Touch</h3>
                                <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies.</p>
                            </div>
                            <?php foreach($result as $row){ ?>
                            <div class="get-in-touch">
                                <div class="detail">
                                    <span><b>Phone: </b><?php echo $row['contact'] ?></span>
                                    <span><b>Email: </b><?php echo $row['email'] ?></span>
                                    <span><b>Web: </b> <a href="<?php echo $row['website'] ?>"><?php echo $row['website'] ?></a></span>
                                    <span><b>Address: </b><?php echo $row['address'] ?></span>
                                </div>

                                <div class="social-icons">
                                    <a href="#." class="fb"><i class="icon-euro"></i></a>
                                    <a href="#." class="tw"><i class="icon-yen"></i></a>
                                    <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                                    <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                                </div>
                            </div>
                          <?php } ?>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- Start Footer bottom section -->
<?php include 'inc/frontend/footer.php' ?>
        <!--End of Galery section-->