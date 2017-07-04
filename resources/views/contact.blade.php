@extends('layouts.site')
@section('content')
    <form action="/contact/send" method="POST">
    {{ csrf_field() }}
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
      <tr>
        <td colspan="2" style="text-align: center;">
          <h2 style="padding:0;margin:0;">Contact Us</h2>
        </td>
      </tr>
      <tr>
        <td>Contact</td>
        <td>
          <select style="width:100%;" name="contact">
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
        <td>Your Email:</td>
        <td>
          <input type="email" name="email" placeholder="you@youremail.com" style="width:100%;" required>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <textarea placeholder="Message" name="message" style="width:100%;font-family:sans-serif;" rows="4" required></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input type="submit" value="Submit" /> 
          <input type="reset" value="Clear" />
        </td>
      </tr>
    </table>
    </form>
@stop
@section('script')
    @if(session()->has('status'))
        <script>alert('{{ session('status') }}');</script>
    @endif
@endsection
