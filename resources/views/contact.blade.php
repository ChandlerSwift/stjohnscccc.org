@extends('layout')
@section('content')
    <form action="sendmail.php" method="post">
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
      <tr>
        <td colspan="2" style="text-align: center;">
          <h2 style="padding:0;margin:0;">Contact Us</h2>
        </td>
      </tr>
      <?php if (isset($_GET['sent'])): ?>
      <tr>
        <td colspan="2" style="text-align: center;">
        <div><i style="font-size:150%;" id="message-sent-tag">Message Sent.</i></div>
        </td>
      </tr>
      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
          jQuery.fn.highlight = function () {
              $(this).each(function () {
                  var el = $(this);
                  $("<div/>")
                  .width(el.outerWidth())
                  .height(el.outerHeight())
                  .css({
                      "position": "absolute",
                      "left": el.offset().left,
                      "top": el.offset().top,
                      "background-color": "#ffff99",
                      "opacity": ".7",
                      "z-index": "9999999"
                  }).appendTo('body').fadeOut(1000).queue(function () { $(this).remove(); });
              });
          }
          $("#message-sent-tag").highlight();
        });
      </script>
      <?php endif; ?>
      <?php if (isset($_GET['error'])): ?>
      <tr>
        <td colspan="2" style="text-align: center;">
        <div><i style="font-size:150%;" id="message-sent-tag">There was an error.</i></div>
        </td>
      </tr>
      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
          jQuery.fn.highlight = function () {
              $(this).each(function () {
                  var el = $(this);
                  $("<div/>")
                  .width(el.outerWidth())
                  .height(el.outerHeight())
                  .css({
                      "position": "absolute",
                      "left": el.offset().left,
                      "top": el.offset().top,
                      "background-color": "#f00",
                      "opacity": ".7",
                      "z-index": "9999999"
                  }).appendTo('body').fadeOut(2000).queue(function () { $(this).remove(); });
              });
          }
          $("#message-sent-tag").highlight();
        });
      </script>
      <?php endif; ?>
      <tr>
        <td>Contact</td>
        <td>
          <select style="width:100%;" name="contact_id">
            <option value="pastor">Pastor</option>
            <option value="secretary">Secretary</option>
            <option value="council">Church Council</option>
            <option value="tech">Church Tech Support</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Your Name:</td>
        <td>
          <input type="text" name="name" placeholder="Firstname Lastname" style="width:100%;" required>
        </td>
      </tr>
      <tr>
        <td>Your E-mail:</td>
        <td>
          <input type="email" name="email" placeholder="you@youremail.com" style="width:100%;" required>
        </td>
      </tr>
      <tr style="display:none;">
        <td>Are you a robot?</td>
        <td>
          <input type="text" name="robot" placeholder="Yes/No" style="width:100%;" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <textarea placeholder="Message" name="message" style="width:100%;font-family:sans-serif;" rows="4" required></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input type="submit" /> 
          <input type="reset" value="Reset" />
        </td>
      </tr>
    </table>
    </form>
@stop
