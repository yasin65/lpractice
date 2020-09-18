@extends('layout')
@section('content')


    <div id="content_header"></div>
    <div id="site_content">



      <div id="content">
        <!-- insert the page content here -->
        <h1>About me</h1>
        <p>Below is an example of how a contact form might look with this template:</p>


        <form method="post" action="{{url('update2'.$otheredit->id)}}">

          @csrf
          <div class="form_settings">


            <p><span>Name</span><input class="contact" type="text" name="name" value="{{ $otheredit->name }}" /></p>

            <p><span>E-mail</span><input class="contact" type="text" name="email" value="{{ $otheredit->email }}" /></p>



            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="message">{{ $otheredit->message }}</textarea></p>

            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit"name="update" value="update" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><li></li></p>

          </div>

        </form>




        <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
      </div>




  </div>
</body>
</html>

@endsection