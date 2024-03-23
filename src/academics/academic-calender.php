<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>Academic-Calendar | The Jain International School</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Flying Penguins">
  <meta name="description"
    content="At JIS, We provide annual academic calander at the starting of the session. So, the students, parents, and teachers are on the same page throughout the academic session.">
    <link href="/src/extra/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/style.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/colors/color1.css" id="colors" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/select2.min.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/custom.css" rel="stylesheet" type="text/css" />
  <link href="/src/extra/css/funky.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 50px auto;
    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
      background: #fff;
    }

    tr {
      border-bottom: 1px solid #65B84F;
    }

    th {
      background: #65b84f;
      color: white;
      font-weight: bold;
    }

    td,
    th {
      padding: 10px;
      /*border: 1px solid #ccc; */
      text-align: left;
      font-size: 17px;
      color: black;
      vertical-align: middle;
    }

    /*
      Max width before this PARTICULAR table gets nasty
      This query will take effect for any screen smaller than 760px
      and also iPads specifically.
      */
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {
      table {
        width: 100%;
        box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, .19);
        /*box-shadow: 3px 3px 4px 0 rgba(0,0,0,.19);*/
      }

      /* Force table to not be like tables anymore */
      table,
      thead,
      tbody,
      th,
      td,
      tr {
        display: block;
      }

      /* Hide table headers (but not display: none;, for accessibility) */
      thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }

      tr {
        border: 1px solid #ccc;
      }

      td {
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee;
        color: black;
        position: relative;
        padding-left: 50%;
      }

      td:before {
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        /* Label the data */
        content: attr(data-column);
        color: #000;
        font-weight: bold;
      }
    }

    .stm-btn-download__body {
      display: table;
      width: 100%;
    }

    .stm-btn-download__icon {
      display: table-cell;
      vertical-align: middle;
    }

    .stm-btn-download__icon img {
      display: inline-block;
      width: 1em;
      height: auto;
    }

    .stm-btn-download_icon-left .stm-btn-download__content {
      padding-left: 10px;
    }

    .stm-btn-download__content {
      display: table-cell;
      vertical-align: middle;
    }

    .stm-btn-download {
      background-color: #fff;
      display: inline-block;
      padding: 20px 25px;
      white-space: nowrap;
      -webkit-transform: translateZ(0);
      transform: translateZ(0);
      -webkit-transition: all .3s ease;
      transition: all .3s ease;
      box-shadow: 3px 3px 4px 0 rgba(0, 0, 0, .19);
    }

    .pad-left-6 {
      padding-left: 6%;
    }

    .stm-btn-download_white .stm-btn-download__text {
      color: #011b3a;
      font-size: 18px;
    }

    .stad-head {
      margin: 0 0 20px;
      font-size: 36px;
      font-weight: 300;
      color: #011b3a;
    }

    .hr-separater {
      background: #81ca00;
      width: 60px;
      height: 2px;
    }

    .span-author {
      color: gray;
      font-size: 15px;
    }

    .year {
      font-size: 36px;
      font-weight: 300;
      color: #011b3a !important;
      margin: 0 0 34px;
      font-family: inherit;
      line-height: 1.1;
    }

    .separator {
      background: #81ca00;
      width: 60px;
      height: 2px;
      margin-bottom: 56px;
    }

    .month {
      color: #011b3a !important;
      /*margin: 0 0 27px;*/
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: 400;
      /*line-height: 1.1*/
      ;
    }

    .calendar-icon {
      /*content: "\e906";*/
      color: #81ca00 !important;
      font-family: 'stm-icon' !important;
      /*speak: none;
        font-style: normal;*/
      font-weight: 400;
      /*font-variant: normal;
        text-transform: none;*/
      line-height: 1;
      /*-webkit-font-smoothing: antialiased;*/
    }

    .text-margin-left {
      margin-left: 7px;
    }

    .text {
      font-size: 13px;
      color: #011b3a !important;
    }

    .row-margin-top {
      margin-top: 50px;
    }

    .row-margin-top-2 {
      margin-top: 40px;
    }

    .row-background {
      background-color: #f8f8f8;
    }

    .button {
      background: #fff;
      display: inline-block;
      padding: 10px 22px;
      white-space: nowrap;
      transform: translateZ(0);
      transition: all .5s ease;
      z-index: 2;
      position: relative;
    }

    .acrobat-margin {
      padding-left: 10px;
      /*display: table-cell;*/
      /*vertical-align: middle;*/
    }

    /*acrobat download calendar text */
    .download-calendar {
      color: #011b3a;
      /*display: block;*/
      /* line-height: 20px;*/
    }

    .acrobat-subtext {
      color: gray;
      /*display: block;*/
      font-size: 13px;
      /*line-height: 20px;*/
      padding-left: 55px;
      margin-top: -20px;
    }

    .date-th {
      font-size: 12px;
    }


    .button-2 {
      background: #f8f8f8;
      display: inline-block;
      padding: 10px 22px;
      white-space: nowrap;
      transform: translateZ(0);
      transition: all .3s ease;
    }

    .subtext-left-pad {
      margin-left: 23px;
    }

    .text {
      font-size: 13px;
      color: #011b3a !important;
      line-height: 1.1;
    }

    .pad-bottom {
      margin-bottom: 2%;
    }

    @media(max-width: 600px) {
      .separator {
        margin-bottom: 40px;
      }

      .media-margin {
        margin-bottom: 30px;
      }

    }

    @media(min-width: 768px) {
      .media-margin {
        margin-bottom: 30px;
      }

      .media-button {
        margin-top: 18px;
        margin-bottom: -40px;
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

<body>
  <!--===================Header===========-->
  <? include'./Header/header.php' ?>

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


  <div class="row" style="padding-top: 98px;">
    <div class="col-md-12" align="center">
      <img src="/media/academics/academic_calender/academic-calender.jpeg" style="width: 90%; padding-bottom: 1.5rem; height:1300px;">
    </div>
  </div>

  <!-- </div> -->
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
                        <p style="line-height: 1.3;margin-bottom: 15px">Hitavada Trophies to The Jain International School
                          Toppers <br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-16">
                        <p style="line-height: 1.3;margin-bottom: 15px">The Jain International School Wins Second Position
                          at Instrumental Band Competition<br>
                          <!-- <span class="span-p" style="line-height: 1.7"><i class="fa fa-calendar" aria-hidden="true"></i> 10/18</span> -->
                        </p>
                      </a>
                      <a href="/media-speaks/media-coverage.html#news-17">
                        <p style="line-height: 1.3;margin-bottom: 15px">The Jain International School Conducts Investiture
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
                        <p style="line-height: 1.3;margin-bottom: 15px">The Jain International School Wins Second Prize in
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

  <p><!--============Footer==============--></p>

  <div class="footerr">
  </div>  
  
  <script type="text/javascript" src="footer.js">
  </script>
  <!--============End Bottom==============-->
  <a class="go-top">
    <i class="fa fa-angle-up"></i>
  </a>
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
  <script type="text/javascript" src="/src/extra/javascript/smoothscroll.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/main.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/jquery.themepunch.revolution.min.js"></script>
  <script src="/src/extra/js/jquery.counterup.js"></script>
  <script src="/src/extra/js/countdown.js"></script>
  <script src="/src/extra/js/wow.min.js"></script>
  <script src="/src/extra/js/main.js"></script>
  <script type="text/javascript" src="/src/extra/javascript/parallax.js"></script>
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