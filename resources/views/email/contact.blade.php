<!DOCTYPE html>
<html>
    <head>
        <title>Message from Contact Form</title>
    </head>
    <body>
        <h1>New Contact Form Message</h1>
        <h4>Someone left a note for you on the St. John's Contact Form.</h4>
        <div><b>From:</b> {{ $from_name }} (<a href="mailto:{{ $from_email }}">{{ $from_email }}</a>)</div>
        <div><b>Message:</b> {{ $message_text }}</div>
    </body>
</html>
