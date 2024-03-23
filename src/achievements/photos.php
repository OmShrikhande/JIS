<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
  <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <!--[if IE]>
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
      <![endif]-->
  <title>Photo | Jain International School</title>
  <link rel="icon" type="image/png" href="/images/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Flying Penguins">
  <meta name="description" content="Students at JIS and Activities ">
  <link href="/src/extra/css/style.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/colors/color1.css" id="colors" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/select2.min.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/custom.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/funky.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/src/extra/css/jquery.fancybox.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <style type="text/css">
    .col-lg-3 {
      width: 24%;
    }

    .photo-title {
      background: #eeeeee91;
      color: black;
      padding: 1%;
      font-size: 18px;
      padding-left: 2%;
      margin-left: 1%;
      margin-bottom: 39px;
      margin-right: 1%;
      border-radius: 0px;
      border-left: 6px solid #3e3f95;
    }

    .gallery-full-width {
      position: relative;
      padding: 70px 0 70px;
    }


    .column {
      float: left;
      width: 33.33%;
      padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }


    @media(min-width:300px) and (max-width: 1025px) {
      .mobfooter {
        margin-right: -130px;
      }

      .prosfooter {
        margin-right: -124px;
      }

      .socialfooter {
        margin-right: -200px;
      }

      .quickfooter {
        margin-right: -100px;
      }

      .menufooter {
        margin-right: -182px;
      }

      .timefooter {
        margin-right: -72px;
      }

      .getfooter {
        margin-right: -177px
      }

      .appointfooter {
        margin-right: -275px;
      }

      .emailfooter {
        margin-right: -128px;
      }

      .photomob {
        width: 100% !important;
      }
    }
  </style>
  <style type="text/css">
    .new_tab {
      margin-top: -7%;
    }

    .trustee_logo {
      margin-top: -15%;
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149003061-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-149003061-1');
  </script>

  <script type="text/javascript">
    (function () {
      var options = {
        whatsapp: "+91(839)070-1917", // WhatsApp number
        call_to_action: "Talk to us !", // Call to action
        position: "left", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2496256817260330');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=2496256817260330&ev=PageView
                  &noscript=1" />
  </noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body class="header-sticky">

  <!--===================Header===========-->

  <?php include '../../header.html'?>
  <!--sticky panel-->
  <nav class="float-action-button hidden-xs">
    <a href="/index#events" class="buttons" title="Recent Events" data-toggle="tooltip" data-placement="left">
      <i class="fa fa-calendar-o" aria-hidden="true"></i>
    </a>
    <a class="buttons" title="News and Events" data-toggle="tooltip" data-placement="left" onclick="showpop()">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    </a>
    <a href="/index#achievements" class="buttons" title="Our Achievements" data-toggle="tooltip" data-placement="left">
      <i class="fa fa-trophy" aria-hidden="true"></i>
    </a>
    <a href="#" class="buttons" data-toggle="tooltip" data-placement="left">
      <i class="fa fa-times sticky-cross" aria-hidden="true"></i>
      <i class="fa fa-plus" aria-hidden="true"></i>
    </a>
  </nav>
  <!--end sticky panel-->
  <!--========Banner===============-->
  <section style="padding-bottom: 0%">
    <!-- <img src="/images/photo-banner.jpg" width="100%"> -->
  </section>
  <!--========End Banner===============-->


  <section class="gallery-full-width">
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="row">
          <div class="column">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="/media/event/achievements (1).jpg" alt="Snow" style="width:60%">
          </div>
          <div class="column">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="/media/event/achievements (11).jpg" alt="Forest" style="width:60%">
          </div>
          <div class="column">&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="/media/event/achievements (2).jpg" alt="Mountains" style="width:60%">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--https://drive.google.com/uc?export=view&id= the imp foe embeded link from drive to upload image-->


  <!--========Memorable Clicks===============-->
  <section class="gallery-full-width">
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <div class="gallery-item mix all campus  col-lg-6 col-md-4 col-sm-12 col-xs-12">
            
              <h3 class="photo-title" style="width: 53%;">Awareness Workshop For Girls </h3>
          
            <div class="col-lg-3 photomob" style="width: 60%; ">
              <figure class="image-box media-img" style="height:150%">
                <img  src="https://drive.google.com/uc?export=view&id=1eAGWRyJAAO9oSjQ5ZlDj2-CWrZvRufAu" alt="" style="width: 150%;">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="https://drive.google.com/uc?export=view&id=1eAGWRyJAAO9oSjQ5ZlDj2-CWrZvRufAu" class="link" data-fancybox="gallery"
                      data-caption="" ><span class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          


              <figure class="image-box media-img" style="height:150%">
                <img  src="https://drive.google.com/uc?export=view&id=1ziSJLFUeNSGdgvR0MXPu-_rw9fBiB5zV" alt="" style="width: 150%;">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="https://drive.google.com/uc?export=view&id=1ziSJLFUeNSGdgvR0MXPu-_rw9fBiB5zV" class="link" data-fancybox="gallery"
                      data-caption="" ><span class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>
          <div class="inner-box">
         
          <
          



            </div>
         
       
    
  </section>
 
  
  <section class="gallery-full-width">
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <div class="gallery-item mix all campus  col-lg-6 col-md-4 col-sm-12 col-xs-12">

          <!--   <div class="inner-box">
                  <div class="col-lg-3 photomob" style="width: 50%;">
                    <figure class="image-box media-img">
                    <img src="/images/event/achievements (1).jpg" alt="">
                      <div class="caption-box clearfix">
                        <div class="icon-box">
                          <a href="/images/event/achievements (1).jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
            </div>
            
            
            <div class="inner-box">
                  <div class="col-lg-3 photomob" style="width: 50%;">
                    <figure class="image-box media-img">
                    <img src="/images/event/achievements (1).mp4" alt="">
                      <div class="caption-box clearfix">
                        <div class="icon-box">
                          <a href="/images/event/achievements (1).mp4" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
            </div>
            
            
            <div class="inner-box">
                  <div class="col-lg-3 photomob" style="width: 50%;">
                    <figure class="image-box media-img">
                    <img src="/images/event/achievements (2).jpg" alt="">
                      <div class="caption-box clearfix">
                        <div class="icon-box">
                          <a href="/images/event/achievements (2).jpg" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                        </div>
                      </div>
                    </figure>
                  </div>
                </div>
            </div>
                -->




          <h3 class="photo-title" style="width: 53%;">Awareness Workshop For Girls </h3>
          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/girls-workshop1.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/girls-workshop1.jpg" class="link" data-fancybox="gallery"
                      data-caption=""><span class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>


          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/girls-workshop2.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/girls-workshop2.jpg" class="link" data-fancybox="gallery"
                      data-caption=""><span class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>




        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title">Cyber Crime </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/API-Mane.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/investiture-ceremony.jpg" class="link" data-fancybox="gallery"
                    data-caption=""><span class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob"
          style="padding-top: 3px; ">
          <h3 class="photo-title">Investiture Ceremony </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/investiture-ceremony.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/investiture-ceremony.jpg" class="link" data-fancybox="gallery"
                    data-caption=""><span class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="gallery-item mix all campus  col-lg-6 col-md-4 col-sm-6 col-xs-12">
          <h3 class="photo-title" style="width: 46%;">Career Counselling </h3>
          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/couselling.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/couselling.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                        class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>


          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/career-counselling.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/career-counselling.jpg" class="link" data-fancybox="gallery"
                      data-caption=""><span class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>

        <div class="gallery-item mix all campus  col-lg-6 col-md-4 col-sm-6 col-xs-12">
          <h3 class="photo-title" style="width: 46%;">Grandparents Day </h3>
          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/grandparents1.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/grandparents1.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                        class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>


          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/grandparents2.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/grandparents2.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                        class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title">Motivational Talk </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/motivational-talk.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/motivational-talk.jpg" class="link" data-fancybox="gallery"
                    data-caption=""><span class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title">Visit Bank </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/bank.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/bank.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title">Visit Japan </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/japan.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/japan.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title"> Raman Science Center </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/raman-science.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/raman-science.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <!--<div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="inner-box">
                <figure class="image-box media-img">
                  <img src="https://dummyimage.com/400x300/aaa/fff" alt="">
                  <div class="caption-box clearfix">
                    <div class="icon-box">
                      <a href="https://dummyimage.com/400x400/aaa/fff" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
            <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="inner-box">
                <figure class="image-box media-img">
                  <img src="https://dummyimage.com/400x300/aaa/fff" alt="">
                  <div class="caption-box clearfix">
                    <div class="icon-box">
                      <a href="https://dummyimage.com/400x400/aaa/fff" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
            <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="inner-box">
                <figure class="image-box media-img">
                  <img src="https://dummyimage.com/400x300/aaa/fff" alt="">
                  <div class="caption-box clearfix">
                    <div class="icon-box">
                      <a href="https://dummyimage.com/400x400/aaa/fff" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                    </div>
                  </div>
                </figure>
              </div>
            </div>-->
      </div>
    </div>

    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <div class="gallery-item mix all campus  col-lg-6 col-md-4 col-sm-6 col-xs-12">
          <h3 class="photo-title" style="width: 46%;">Trip To The Hospital</h3>
          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/hospital1.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/hospital1.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                        class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>

          <div class="inner-box">
            <div class="col-lg-3 photomob" style="width: 50%;">
              <figure class="image-box media-img">
                <img src="/media/event/hospital2.jpg" alt="">
                <div class="caption-box clearfix">
                  <div class="icon-box">
                    <a href="/media/event/hospital2.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                        class="icon fa fa-search"></span></a>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>




        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-12 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title">Yoga Day </h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/yoga.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/yoga.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-12 col-xs-12 photomob"
          style="padding-top: 3px;">
          <h3 class="photo-title">Trip To Senior Care Home</h3>
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior-care-home.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior-care-home.jpg" class="link" data-fancybox="gallery"
                    data-caption=""><span class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <h3 class="photo-title" style="width: 22%;"> Fast Track </h3>
        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track1.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track1.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track2.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track2.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track3.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track3.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track4.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track4.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track5.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track5.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track6.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track6.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/fast track7.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/fast track7.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

      </div>
    </div>
    <br><br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <h3 class="photo-title" style="width: 22%;"> Junior Concert </h3>
        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_4.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_4.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_5.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_5.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_6.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_6.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_9.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_9.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_10.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_10.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_13.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_13.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/junior_14.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/junior_14.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

      </div>
    </div>

    <br><br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <h3 class="photo-title" style="width: 22%;"> Senior Concert </h3>
        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_2.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_2.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_3.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_3.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_4.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_4.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_6.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_6.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_7.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_7.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_8.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_8.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/senior_9.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/senior_9.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

      </div>
    </div>






    <br><br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">
        <h3 class="photo-title" style="width: 22%;"> Assembly </h3>
        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/assembly.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/assembly.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all campus photos col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/assembly1.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/assembly1.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/assembly2.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/assembly2.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <div class="gallery-item mix all events  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/assembly3.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/assembly3.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="mixitup-gallery">
      <div class="filter-list row clearfix">

        <div class="gallery-item mix all activity  col-lg-3 col-md-4 col-sm-6 col-xs-12 photomob">
          <div class="inner-box">
            <figure class="image-box media-img">
              <img src="/media/event/assembly4.jpg" alt="">
              <div class="caption-box clearfix">
                <div class="icon-box">
                  <a href="/media/event/assembly4.jpg" class="link" data-fancybox="gallery" data-caption=""><span
                      class="icon fa fa-search"></span></a>
                </div>
              </div>
            </figure>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--========End Memorable Clicks===============-->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
      <button type="button" class="close" data-dismiss="modal"
        style="color: white;
          opacity: 1;z-index: 99999;opacity: 1;position: absolute;right: 4%;font-size: 38px;color: black;">&times;</button>
      <div class="row">
        <div class="col-md-12">
          <div class="col-lg-12">
            <div class="tl-countdown-box">
              <div class="countdown-timer">
                <h2>News & Events</h2>
              </div>
              <div class="header-form">
                <div class="holder">
                  <div class="marquee">
                    <a href="/media-speaks/media-coverage.html#news-01">
                      <p style="line-height: 1.3;margin-bottom: 15px">Awareness Programme for School
                        Girls<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-02">
                      <p style="line-height: 1.3;margin-bottom: 15px">Inter Class Best Out of Waste Competition (Std. I
                        & II)<br>
                        <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-03">
                      <p style="line-height: 1.3;margin-bottom: 15px">Career Counselling Workshop at Jain International
                        School<br>
                        <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-04">
                      <p style="line-height: 1.3;margin-bottom: 15px">Inter School Chess Tournament<br>
                        <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-05">
                      <p style="line-height: 1.3;margin-bottom: 15px">Classical Dance
                        Competition<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-06">
                      <p style="line-height: 1.3;margin-bottom: 15px">JIS Shines Again<br>
                        <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-07">
                      <p style="line-height: 1.3;margin-bottom: 15px">Cyber Crime Workshop at JIS<br>
                        <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-08">
                      <p style="line-height: 1.3;margin-bottom: 15px">Essay Writing Competition
                        Achievements<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-09">
                      <p style="line-height: 1.3;margin-bottom: 15px">English Extempore Competition<br>
                        <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                    </a>
                    <a href="/media-speaks/media-coverage.html#news-10">
                      <p style="line-height: 1.3;margin-bottom: 15px">Press Release Fast Track Your Future
                        <br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                      </p>
                      <a href="/media-speaks/media-coverage.html#news-11">
                        <p style="line-height: 1.3;margin-bottom: 15px">Another Feather in JIS’ Cap<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-12">
                        <p style="line-height: 1.3;margin-bottom: 15px">JIS Girls Shine in Censport Football
                          Tournament<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-13">
                        <p style="line-height: 1.3;margin-bottom: 15px">Grandparents Day at Jain International
                          School<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-14">
                        <p style="line-height: 1.3;margin-bottom: 15px">Kudos to JIS
                          Teachers<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-15">
                        <p style="line-height: 1.3;margin-bottom: 15px">Hitavada Trophies to Jain International School
                          Toppers <br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-16">
                        <p style="line-height: 1.3;margin-bottom: 15px">Jain International School Wins Second Position
                          at Instrumental Band Competition<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-17">
                        <p style="line-height: 1.3;margin-bottom: 15px">Jain International School Conducts Investiture
                          Ceremony<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-18">
                        <p style="line-height: 1.3;margin-bottom: 15px">District Level Inter School Karate
                          Championship<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-19">
                        <p style="line-height: 1.3;margin-bottom: 15px">Khelo Karate All India Open
                          Championship<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span>  -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-20">
                        <p style="line-height: 1.3;margin-bottom: 15px">Motivational Talk Inspires JIS Students<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span>  -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-21">
                        <p style="line-height: 1.3;margin-bottom: 15px">Another Feather in JIS’ Cap<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-22">
                        <p style="line-height: 1.3;margin-bottom: 15px">Science Scholarship Examination<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-23">
                        <p style="line-height: 1.3;margin-bottom: 15px">Science
                          Quiz<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-24">
                        <p style="line-height: 1.3;margin-bottom: 15px">Jain International School Wins Second Prize in
                          Spelling Bee Competition 2018<br> <span class="span-p" style="line-height: 1.7"><i
                              class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-25">
                        <p style="line-height: 1.3;margin-bottom: 15px">DSO Sqay Martial Art District Level<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-26">
                        <p style="line-height: 1.3;margin-bottom: 15px">Commerce Students Turn Bankers for a Day
                          !<br><!--  <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-27">
                        <p style="line-height: 1.3;margin-bottom: 15px">Press Release Trip to the St. Joseph Hospital
                          (Std. I and II)<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-28">
                        <p style="line-height: 1.3;margin-bottom: 15px">Youth Exchange Programme , Fukuyama , Japan<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span>  -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-29">
                        <p style="line-height: 1.3;margin-bottom: 15px">Press Release Trip to Raman Science Center (Std.
                          I & II)<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-30">
                        <p style="line-height: 1.3;margin-bottom: 15px">Press Release Trip to the Senior Care Home (Std.
                          I and II)<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-31">
                        <p style="line-height: 1.3;margin-bottom: 15px">Voice of Ramdaspeth<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-32">
                        <p style="line-height: 1.3;margin-bottom: 15px">Jain International Student Sets World Record<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-33">
                        <p style="line-height: 1.3;margin-bottom: 15px">Press Release International Yoga Day
                          Celebration<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>

                  </div>
                </div>
              </div>

              <!-- Header form end -->
            </div>
            <!-- Countdown box end -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--============Footer==============-->
<div class="footerr">
  </div>  
  
  <script type="text/javascript" src="footer.js">
  </script>
  <!--============End Bottom==============-->
  <a class="go-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Javascript -->
  <script type="text/javascript" src="/src/extra/javascript/jquery.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.easing.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/imagesloaded.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/owl.carousel.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.mb.YTPlayer.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery-waypoints.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.cookie.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.fitvids.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery-validate.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/parallax.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.countdown.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.sticky.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/main.js"></script>
  <!-- Revolution Slider -->
  <script type="text/javascript" src="/src/extra/javascript/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/slider.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/mixitup.js"></script>
  <script type="text/javascript" src="/src/extra/js/jquery.fancybox.js"></script>
  <script src="/src/extra/js/jquery.counterup.js"></script>
  <script src="/src/extra/javascript/wow.js"></script>
  <script src="/src/extra/javascript/funky-script.js"></script>
  <script type="text/javascript">
    // $(window).on('click',function(){
    //  setTimeout(function(){
    //     $('#login-modal').modal('show');
    //   },5000);
    // });

    function showpop() {
      setTimeout(function () {
        $('#login-modal').modal('show');
      }, 1000);
    }
  </script>
</body>

</html>