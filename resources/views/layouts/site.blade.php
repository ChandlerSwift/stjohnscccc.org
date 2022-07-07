<!DOCTYPE html>
<!-- @includeIf('version') -->
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
          <li><a href="/contact"<?php if ($_SERVER['REQUEST_URI'] == "/contact"): ?> class="current" <?php endif; ?> class="last">Contact Us</a></li>
        </ul>
      </div>

      <div id="templatemo_content">

        <div id="templatemo_left">
	  @if($events->count())
          <div id="templatemo_news_section">
            <h1>Happenings</h1>
            <div class="scrollbar" style="max-height:225px;overflow-y:auto;">
              @foreach($events as $event)
              <div class="templatemo_news_box">
                <h2>{{ $event->title }}</h2>
                <h3>{{ date("F j", strtotime($event->date)) }}</h3>
                <p>
                  {{ $event->description }}
                  @if($event->link_title != "" && $event->link != "")
                    <a href="{{ $event->link }}">{{ $event->link_title }}</a>
                  @endif
                </p>
              </div>
              @endforeach
            </div>
          </div>
	  @endif
          <div id="templatemo_contact_section">
            <h1>Contact</h1>
            <div class="templatemo_contact_box">
              <ul class="info">
                <li>
                  <h3 class="font-awesome-h3"><i class="fa fa-phone"></i></h3>
                  <p>Church: <a href="tel:320-587-5104">320-587-5104</a><br/><!--Pastor: <a href="tel:612-644-0628">612-644-0628</a>--></p>
                </li>
                <li>
                  <h3 class="font-awesome-h3"><i class="fa fa-home"></i></h3>
                  <p><a href="https://www.google.com/maps/place/13372+Nature+Ave,+Hutchinson,+MN+55350">13372 Nature Ave<br/>Hutchinson, MN 55350</a></p>
                </li>
                <li>
                  <h3 class="font-awesome-h3"><i class="fa fa-envelope"></i></h3>
                  <p>
                    <a href="mailto:secretary@stjohnscccc.org">secretary@stjohnscccc.org</a>
                    <br/>
                    <!--<a href="mailto:pastor@stjohnscccc.org">pastor@stjohnscccc.org</a>-->
                  </p>
                </li>
                <li>
                  <h3 class="font-awesome-h3"><i class="fa fa-video-camera"></i></h3>
                  <p>
                    <a href="https://www.youtube.com/channel/UCADuc53vyx21zzxjICn4NlQ">Check us out on YouTube:<br/>
                      VBS, music, and more!</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <!-- note to self: use this! It's cool
               <div class="left_col_section">
               <a href="subpage.html"><img src="images/templatemo_ca.jpg" alt="Church Activities" border="0" /></a>
               </div> -->
        </div> <!-- end of left -->

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
