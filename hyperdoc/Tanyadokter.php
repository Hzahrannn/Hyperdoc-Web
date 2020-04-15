<?php
									session_start();
									if(!isset($_SESSION['email_user'])) {
									header('location:index.php'); }
									else{
									$email_user=$_SESSION['email_user'];}
									?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HyperDoc</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <?php
    include "header.php";
    ?>

    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Tanya Dokter</h3>
                    </div>
                    <div class="comment-form">
                  <h4>Silahkan Bertanya!</h4>
                  <form class="form-contact comment_form" action="etanya.php" method="Get" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="tanya" id="comment" cols="70" rows="9"
                                 placeholder="Tulis Pertanyaan Anda"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           
                        </div>
                        <div class="col-sm-6">
                           
                        </div>
                        <div class="col-12">
                           <input type="text" name="penanya" placeholder="Nama" class="form-control"> <br>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim!</button>
                     </div>
                  </form>
                </div>
                <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h2>Lihat juga Pertanyaan Yang Lain Yang telah Terjawab
                     </h2>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                  </div>
                  
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        </div>
                     </div>
                  </div>
               </div>
                    <?php
                                    include "db.php";
                                    $sql = "SELECT * FROM pertanyaan INNER JOIN jawab ON pertanyaan.id_pertanyaan = jawab.id_pertanyaan;";
                                    $result = $db->query($sql);
                                    ?>

                                    <?php while($row = $result->fetch_assoc()){
                                    ?>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo $row["penanya"]; ?></h4>
                        </a>
                        <p><?php echo $row["pertanyaan"]; ?></p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4>Reply</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 <?php echo $row["jawaban"]; ?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?php echo $row["penjawab"]; ?></a>
                                    </h5>
                                 </div>
                                 <div class="reply-btn">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
           <?php } ?>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
            </div>
        </div>
    </div>
    <!-- bradcam_area_start  -->
    
    <!-- service_area_end -->

    <!-- offers_area_start -->
    

    <!-- offers_area_end -->

  
   
    <!-- Emergency_contact end -->

<!-- footer start -->
<footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="img/footer_logo.png" alt="">
                                    </a>
                                </div>
                                <p>
                                       
                                </p>
                           
    
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Contact
                                </h3>
                                <p>
                                 Hyperdoc@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
  
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>