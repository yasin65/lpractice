@extends('layout')

@section('content')


    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>New Website Launched</h4>
            <h5>February 1st, 2014</h5>
            <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>About Details</h1>
        <p>Below is an example of how a contact form might look with this template:</p>


        <form method="post" action="{{URL::to('submit2')}}">
          @csrf
          <div class="form_settings">
            <!-- <p><span>Day</span><input class="contact" type="text" name="day" value="" /></p> -->
            <p><span>Name</span><input class="contact" type="text" name="name" value="" /></p>
            <p><span>Email</span><input class="contact" type="text" name="email" value="" /></p>
            <p><span>Message</span><input class="contact" type="text" name="message" value="" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit"name="submit" value="submit" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><li></li></p>
          </div>
        </form>

        <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
      </div>
    </div>


        @endsection