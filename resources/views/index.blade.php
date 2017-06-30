@extends('layouts.site')
@section('content')
  <div class="right_col_section">
    <div id="welcome_title"></div>
    <p>
      <img src="images/pastor.jpg" alt="Rev. Robert Taylor" />
      Thank you for visiting our church's website.  St. John's is a welcoming, bible-centered church in rural McLeod County.  God has richly blessed and continues to bless this small country church.  In 2015 we celebrated the 150th anniversary of our existence as a congregation.  Given our rich history, we continue to look forward to what the Lord will do in and through us as a congregation for decades to come.  The leaders and members of our church are deeply committed to biblical truth and a desire to honor the Lord Jesus Christ in all that we do and stand for.  If you have a chance to visit our church, I trust, you too will sense that the Spirit of God inhabits this place and this people. <i>&mdash;Bob Taylor, Pastor</i></p>
  </div>
  <div class="cleaner_with_height">&nbsp;</div>

  <div class="right_col_section">
    <div class="right_two_col">
      <h2>Worship Information</h2>
      <h3>This Sunday: {{ $worship_time }}</h3>
      <p><a onclick ="more();" style="cursor:pointer;display:none;font-style:italic;color:#bbb;" id="time-link">More Information&hellip;</a></p>
      <div id="time-paragraph" style="max-width:300px;font-size:inherit;font-style:inherit;">
        <p>
          Regular Sunday worship services are held each Sunday at 10:30am. Adult Bible Study and Children's Sunday School meet Sunday mornings from September thru May; the children meet at 9:15am, and the adults meet at 9:00am.
        </p>
        <p>
          Worship services are 9:30am during the Summer (Memorial Day Weekend through Labor Day Weekend).
        </p>
      </div>
      <script>
        document.getElementById("time-paragraph").style.display = "none";
        document.getElementById("time-link").style.display = "initial";
        function more()
        {
          if (document.getElementById("time-paragraph").style.display == "none")
            {
              document.getElementById("time-paragraph").style.display = "initial";
            }
          else
            {
              document.getElementById("time-paragraph").style.display = "none";
            }
        }
      </script>
      <br>
      <h3>Directions:</h3>
      <div class="embedded-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127845.57585860079!2d-94.16701523113841!3d44.92997417569654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f584609ca69297%3A0xe4e6b5093be890d6!2s13372+Nature+Ave%2C+Hutchinson%2C+MN+55350!5e0!3m2!1sen!2sus!4v1443552092515" width="225" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="right_cleaner_with_10px">&nbsp;</div>

  </div>
  <div class="cleaner">&nbsp;</div>
@stop
