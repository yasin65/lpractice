@extends('layout')

@section('content')

    <div id="content_header"></div>
    <div id="site_content">

      <div id="content">
        <!-- insert the page content here -->


        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style="width:100%; border-spacing:0;">
          <tr>
            <th width="10%">R id </th>

            <th width="25%">E-mail </th>
            <th width="35%">Message</th>
            <th width="10%">  Edit  </th>
            <th width="10%">Delete</th>
          </tr>


@foreach($boss as $rock)
          <tr>
            <td>{{$rock->r_id}}</td>

            <td>{{$rock->email}}</td>
            <td>{{$rock->message}}</td>
            <td><a href="{{url('edit1'.$rock->id)}}">Edit</a></td>
            <td><a href="{{url('delete1'.$rock->id)}}">Delete</a></td>
          </tr>


@endforeach

        </table>

      </div>
    </div>



        @endsection