@extends('layout')
@section('content')
<div id="content_header"></div>
    <div id="site_content">



      <div id="content">
        <!-- insert the page content here -->
        <h1>About me</h1>
        <p>Below is an example of how a contact form might look with this template:</p>


        <form method="post" action="{{url('update'.$choledit->id)}}">

          @csrf
          <div class="form_settings">


            <p><span>Day</span><input class="contact" type="text" name="day" value="{{$choledit->day}}" /></p>

            <p><span>Location</span><input class="contact" type="text" name="location" value="{{$choledit->location}}" /></p>





            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit"name="update" value="update" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><li></li></p>

          </div>

        </form>




        <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
      </div>




  </div>

@endsection