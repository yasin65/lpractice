@extends('layout')

@section('content')

    <div id="content_header"></div>
    <div id="site_content">

      <div id="content">
        <!-- insert the page content here -->


        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style="width:60%; border-spacing:0;">
          <tr>
            <th width="5%">Id. </th>
            <th width="10%">Day </th>
            <!-- <th width="10%">Name </th> -->
            <th width="25%">Location</th>
            <th width="5%">  Edit    </th>
            <th width="5%">  Delete    </th>
          </tr>

@foreach($chol as $go)

          <tr>
            <td>{{$go->id}}</td>
            <td>{{$go->day}}</td>
            <td>{{$go->location}}</td>
            <td><a href="{{url('edit/'.$go->id)}}">Edit</a></td>
            <td><a href="{{url('delete/'.$go->id)}}">Delete</a></td>
          </tr>


@endforeach

        </table>

      </div>
    </div>



        @endsection