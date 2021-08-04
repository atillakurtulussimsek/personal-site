<?php 
 require('functions.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title><?php echo $Utils->getConfig('TITLE'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="AlbaySIMSEK" />
    <script async src="https://arc.io/widget.min.js#Wo8U9qA1"></script>
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/animations.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/main.css" type="text/css">

    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/modernizr.custom.js"></script>
  <script async src='<?php echo $Utils->getConfig('CDN_URL'); ?>/cdn-cgi/bm/cv/669835187/api.js'></script>
</head>
  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(<?php echo $Utils->getConfig('CDN_URL'); ?>/img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="<?php echo $Utils->getConfig('CDN_URL'); ?>/img/avatar.jpg" alt="<?php echo $Utils->getConfig('FULL_NAME'); ?>">
              </div>
              <div class="header-titles">
                <h2><?php echo $Utils->getConfig('FULL_NAME'); ?></h2>
                <h4><?php echo $Utils->getConfig('SUBTITLE'); ?></h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Ana Sayfa</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Özgeçmiş</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-camera"></span>
                  <span class="link-text">Resim Galerisi</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">İletişim</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <?php
                 $Links = $Utils->getSocialMediaLinks();
                 foreach($Links as $Data)
                 {
                ?>
                 <li><a href="<?php echo $Data['url']; ?>" alt="<?php echo $Data['url']; ?>" target="_blank"><i class="<?php echo $Data['icon']; ?>"></i></a></li>
                <?php
                 }
                ?>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="<?php echo $Utils->getConfig('CONTACT_URL'); ?>" target="_blank" class="btn btn-primary">İletişime Geç</a>
            </div>

            <div class="copyrights"><?php echo $Utils->getConfig('FOOTER'); ?></div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">
                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2><?php echo $Utils->getConfig('FULL_NAME'); ?></h2>
                          <div class="owl-carousel text-rotation">                                    
                            <?php
                             $Subtitles = $Utils->getSubtitles();
                             foreach($Subtitles as $Data)
                             {
                            ?>
                             <div class="item">
                              <div class="sp-subtitle"> 
                               <?php echo $Data['subtitle']; ?>
                              </div>
                             </div>
                             <?php
                                }
                             ?>      
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2><span>Hakkımda</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p><?php echo $Utils->getConfig('ABOUT_ME'); ?></p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Yaş</span>
                            <span class="value"><?php echo $Utils->getConfig('AGE'); ?></span>
                          </li>

                          <li>
                            <span class="title">Ülke</span>
                            <span class="value"><?php echo $Utils->getConfig('COUNTRY'); ?></span>
                          </li>

                          <li>
                            <span class="title">Adres</span>
                            <span class="value"><?php echo $Utils->getConfig('ADRESS'); ?></span>
                          </li>

                          <li>
                            <span class="title">E-Mail</span>
                            <span class="value"><?php echo $Utils->getConfig('MAIL'); ?></span>
                          </li>

                          <li>
                            <span class="title">WhatsApp Telefon: </span>
                            <span class="value"><?php echo $Utils->getConfig('PHONE_NUMBER'); ?></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-30"></div>

                  <!-- Testimonials -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Müşteri Yorumları</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-xs-12 col-sm-12">
                      <div class="testimonials owl-carousel">
                          <h4>Bu kısımda yakın bir zamanda müşteri yorumları yer alacak.</h4>
                        <!-- Testimonial 1
                        <div class="testimonial">
                          <div class="img">
                            <img src="<?php echo $Utils->getConfig('CDN_URL'); ?>/img/testimonials/testimonial-1.jpg" alt="Alex Smith">
                          </div>
                          <div class="text">
                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Julia Hickman</h4>
                            <h5 class="company">Omni Source</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                          End of Testimonial 1 -->
                      </div>
                    </div>
                  </div>
                  <!-- End of Testimonials -->
                  <div class="white-space-50"></div>

                  <!-- Pricing -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Fiyatlandırma</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="fw-pricing clearfix row">
                        
                        <div class="fw-package-wrap col-md-6 ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Özel Paket</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span></span>
                              <small></small>
                            </div>
                            
                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-secondary">Teklif Al</a>
                            </div>

                            <div class="fw-default-row">Yaptırmak istediğiniz proje hakkında detaylı bilgi vererek fiyat alın.</div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- End of Pricing -->

                  <div class="white-space-50"></div>

                  <!-- Fun Facts -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Fun <span>Facts</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-heart"></i>
                        <h4>Mutlu Müşteri</h4>
                        <span class="fun-fact-block-value">46</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-clock"></i>
                        <h4>Çalışma Saati</h4>
                        <span class="fun-fact-block-value">5,955</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 ">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-star"></i>
                        <h4>Sertifika & Ödül</h4>
                        <span class="fun-fact-block-value">12</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>
                  </div>
                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Özgeçmiş</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Eğitim</h3>
                      </div>
                      
                      <div class="timeline timeline-second-style clearfix">
                        <?php
                         $Schools = $Utils->getSchools();
                         foreach ($Schools as $School)
                         {
                          ?>
                             <div class="timeline-item clearfix">
                                 <div class="left-part">
                                     <h5 class="item-period"><?php echo $School['start_year']; ?></h5>
                                     <span class="item-company"><?php echo $School['episode']; ?></span>
                                 </div>
                                 <div class="divider"></div>
                                 <div class="right-part">
                                     <h4 class="item-title"><?php echo $School['name']; ?></h4>
                                     <p><?php echo $School['comment']; ?></p>
                                 </div>
                             </div>
                          <?php
                         }
                        ?>
                      </div>
                      <div class="white-space-50"></div>
                      <div class="block-title">
                        <h3>iş Geçmişi</h3>
                      </div>
                        <?php
                        $Works = $Utils->getWorks();
                        foreach ($Works as $Data)
                        {
                        ?>
                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <?php
                             if($Data['now_working'] == 'true'){
                                 echo '<h5 class="item-period">'.$Data["start_year"].' - Halen</h5>';
                             }else{
                                 echo '<h5 class="item-period">'.$Data["start_year"].' - '.$Data["leave_year"].'</h5>';
                             }
                            ?>
                            <span class="item-company"></span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title"><?php echo $Data['name']; ?></h4>
                            <p><?php echo $Data['degree']; ?></p>
                          </div>
                        </div>
                      </div>
                        <?php
                        }
                        ?>
                    </div>

                    <!-- Skills -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Coding Skills -->
                      <div class="block-title">
                        <h3>Yazılım <span>Yeteneklerim</span></h3>
                      </div>
                      <div class="skills-info skills-second-style">
                      <?php
                       $CodingSkills = $Utils->getSkills('coding_skills');
                       foreach($CodingSkills as $Data)
                       {
                      ?>
                        <div class="skill clearfix">
                          <h4><?php echo $Data['name']; ?></h4>
                          <div class="skill-value"><?php echo $Data['skill_complete_value']; ?>%</div>
                        </div>
                        <div class="skill-container skill-<?php echo $Data['id']; ?>">
                          <div class="skill-percentage"></div>
                        </div>
                      <?php 
                       }
                      ?>
                      </div>
                      <!-- End of Coding Skills -->
                      <div class="white-space-10"></div>
                      <!-- Knowledges -->
                      <div class="block-title">
                        <h3>Bildiklerim</h3>
                      </div>
                      <ul class="knowledges">
                        <?php
                         $Knowledges = $Utils->getKnowledges();
                         foreach ($Knowledges as $Data)
                         {
                             echo '<li>'.$Data["title"].'</li>';
                         }
                        ?>
                      </ul>
                      <!-- End of Knowledges -->
                    </div>
                  <div class="white-space-50"></div>
                </div>
              </section>
              <!-- End of Resume Subpage -->
              <!-- Gallery Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Resim Galerisi</h2>
                </div>
                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">Tümü</a>
                          </li>
                          <?php
                           $Categories = $Utils->getGalleryCategories();
                           foreach ($Categories as $Data){
                          ?>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_<?php echo $Data['slug']; ?>"><?php echo $Data['name']; ?></a>
                          </li>
                          <?php
                           }
                          ?>
                        </ul>

                        <div class="portfolio-grid three-columns">
                            <?php
                             $Photos = $Utils->getAllGalleryPhotos();
                             foreach ($Photos as $Photos){
                            ?>
                          <figure class="item lbimage" data-groups='["category_all", "category_<?php echo $Photos['category']; ?>"]'>
                            <div class="portfolio-item-img">
                              <img src="<?php echo $Utils->getConfig('CDN_URL'); ?>/img/gallery/<?php echo $Photos['photo_name']; ?>" alt="<?php echo $Photos['name']; ?>" title="<?php echo $Photos['name']; ?>" />
                              <a class="lightbox" title="<?php echo $Utils->getGalleryCategoryInfo($Photos['category'])['name']; ?>" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/img/gallery/<?php echo $Photos['photo_name']; ?>"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name"><?php echo $Photos['name']; ?></h4>
                            <span class="category"><?php echo $Utils->getGalleryCategoryInfo($Photos['category'])['name']; ?></span>
                          </figure>
                           <?php
                             }
                           ?>
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Kişisel Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">
                        <?php
                        try{
                        $Posts = $Utils->getBlogPosts();
                        if($Posts != false){
                        foreach ($Posts as $Posts){
                        ?>
                        <!-- Blog Post 1 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="<?php echo $Posts['category']; ?>"><?php echo $Posts['category']; ?></a>
                              </div>
                              <a href="/blog/<?php echo $Posts['slug']; ?>">
                                <img src="img/blog/<?php echo $Posts['photo_name']; ?>" class="size-blog-masonry-image-two-c" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date"><?php echo $Posts['date']; ?></div>
                              <a href="/blog/<?php echo $Posts['slug']; ?>">
                                <h4 class="blog-item-title"><?php echo $Posts['title']; ?></h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 1 -->
                        <?php
                        }
                        }else{
                            echo 'Henüz yazı girişi yapılmamış.';
                        }
                        }catch(Exception $e){
                            echo 'Henüz yazı girişi yapılmamış.';
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>İletişim</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4><?php echo $Utils->getConfig('ADRESS'); ?></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4><?php echo $Utils->getConfig('PHONE_NUMBER'); ?></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4><?php echo $Utils->getConfig('MAIL'); ?></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>İş Alımı Açık</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>
                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map">
                          <div class="lmpixels-map">
                            </div>
                      </div>
                      <div class="block-title">
                        <h3>Size Nasıl <span>Yardımcı Olabilirim?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Adınız</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>E-Mail Adresi</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Konu</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Mesajınız</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>
                          <input type="submit" class="button btn-send" value="Mesajı Gönder">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
      </div>
    </div>
    <script data-cfasync="false" src="<?php echo $Utils->getConfig('CDN_URL'); ?>/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/modernizr.custom.js"></script>
    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/animating.js"></script>

    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/imagesloaded.pkgd.min.js"></script>

    <script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/perfect-scrollbar.min.js'></script>
    <script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/jquery.shuffle.min.js'></script>
    <script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/masonry.pkgd.min.js'></script>
    <script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/owl.carousel.min.js'></script>
    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/jquery.magnific-popup.min.js"></script>

    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/validator.js"></script>
    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/main.js"></script>
</body>
</html>