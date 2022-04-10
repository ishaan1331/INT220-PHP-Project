<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('categorystyle.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <x-app-layout>

    </x-app-layout>

    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss");
      </head>
      <body>
        <div class="container-scroller">

    @include("admin.navbar");

<div style = "position: relative ; top: 60px ; right: -150px">

    <table bgcolor="grey" border="3px">
<tr>
    <th style="padding:30px">Name</th>
    <th style="padding:30px">Email</th>
    <th style="padding:30px">Action</th>
</tr>


@foreach ($data as $data)
<tr align="Center">
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>

    @if ($data->usertype=="0")
    <td><a href="{{url('/deleteuser' , $data->id)}}">Delete</a></td>
    @else
    <td><a>Not Allowed</a></td>
    @endif


</tr>
@endforeach

    </table>


</div>
        </div>

    @include("admin.adminscript");
      </body>
    </html>

