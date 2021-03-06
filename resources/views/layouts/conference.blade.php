<!DOCTYPE html>
<html>
  <head>
    <title>St. John&rsquo;s Church &ndash; Biscay, MN</title>
    <meta name="keywords" content="Christian, Church, Glencoe, Hutchinson, Minnesota, MN, Biscay, CCCC" />
    <meta name="description" content="St. John's CCCC Church &ndash; Near Biscay, Minnesota" />
    <link href="/style.css?v1.0" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link href="/style.css?v1.0" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="templatemo_container">
      <div id="templatemo_header">
        <img src="/images/header.jpg" usemap="#map" />
        <map name="map">
          <area shape="poly" coords="709, 297, 713, 258, 954, 257, 958, 350, 649, 352, 646, 323, 536, 321, 535, 285, 709, 291" href="http://www.ccccusa.com/" />
        </map>
      </div>
      <div id="templatemo_menu">
        <ul>
          <li><a href="/"<?php if ($_SERVER['REQUEST_URI'] == "/"): ?> class="current" <?php endif; ?>>Home</a></li>
          <li><a href="/downloads"<?php if ($_SERVER['REQUEST_URI'] == "/downloads/"): ?> class="current" <?php endif; ?>>Newsletters, Photos, and Downloads</a></li>
          <li><a href="https://www.youtube.com/channel/UCADuc53vyx21zzxjICn4NlQ">YouTube</a></li>
          <li><a href="/about"<?php if ($_SERVER['REQUEST_URI'] == "/about"): ?> class="current" <?php endif; ?>>About St. John&rsquo;s</a></li>
          <li><a href="/contact"<?php if ($_SERVER['REQUEST_URI'] == "/contact"): ?> class="current" <?php endif; ?>>Contact Us</a></li>
          <li><a href="/conference"<?php if ($_SERVER['REQUEST_URI'] == "/conference"): ?> class="current" <?php endif; ?> class="last">Conference</a></li>
        </ul>
      </div>

      <div id="templatemo_content">

        <div id="templatemo_left">
          <div id="templatemo_news_section">
	    <h1>Register</h1>
	    <p style="text-align:center;margin-top:-20px;margin-bottom:5px;font-size:1.3em">Problems with the form? <a href="https://docs.google.com/forms/d/e/1FAIpQLSdbzuAQYHCuSE5eVXHn5aPRcaXvfp85ppkrnCowiZF-jTUlRA/viewform?usp=sf_link">Click Here! <i style="float:none;font-size:inherit;color:inherit;" class="fa fa-external-link"></i></a></p>  
            <div class="scrollbar">
	      <div class="templatemo_news_box" style="margin:0">
                 <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdbzuAQYHCuSE5eVXHn5aPRcaXvfp85ppkrnCowiZF-jTUlRA/viewform?embedded=true" width="300" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
              </div>
            </div>
          </div>
          <div id="templatemo_contact_section">
            <h1>Contact</h1>
            <div class="templatemo_contact_box">
              <ul class="info">
		<li>
                  <h3 class="font-awesome-h3"><i class="fa fa-envelope"></i></h3>
                  <p>Andrea Wigern, Event Coordinator<br>
                    <a href="mailto:artsyannie2001@yahoo.com">artsyannie2001@yahoo.com</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div id="templatemo_right">
          @yield('content')
        </div> <!-- end of right -->
      </div> <!-- end of content -->

      <div id="templatemo_footer">
    	&copy; 2014-{{ date("Y") }} <a href="/">St. John's Church</a> &ndash; Site Design by <a href="https://chandlerswift.com">Chandler Swift</a> &ndash; <a href="admin/">Log In</a>
      </div> <!-- end of footer -->
    </div> <!-- end of container -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/jquery-ui.min.js"></script>
    <script>
      $( "#accordion" ).accordion({
        heightStyle: "content"
      });
      $('.embedded-map').click(function() {
        $('.embedded-map iframe').css("pointer-events", "auto");
      });
    </script>
    @yield('script')
  </body>
</html>
