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


        <div style="position: relative ; top: 60px ; right: -150px;">
            <form action="{{url('/uploadpackage')}}" method="post" enctype="multipart/form-data">

                @csrf


                <div>
                   <label>Title</label>
                   <input style="color: blue" type = "text" name = "title" placeholder="Write a title" required>
                </div>

                <div>
                    <label>Image</label>
                    <input style="color: blue" type = "file" name = "image"  required>
                 </div>

                 <div>
                    <label>Description</label>
                    <input style="color: blue" type = "text" name = "description" placeholder="Write a description" required>
                 </div>

                 <div>
                    <label>Price</label>
                    <input style="color: blue" type = "number" name = "price" placeholder="Write price" required>
                 </div>

                 <div>
                    <input style="color: black ; background-color: white" type = "submit" value = "save" >
                 </div>

            </form>


        </div>

    <div style = "position: relative;margin-top: 300px ; margin-right: 100px ; margin-left:-140px" >
        <div>
        <table bgcolor = "black">
        <tr >
            <th style="padding: 30px">Package Name</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Description</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Action</th>
            <th style="padding: 30px">Action2</th>

        </tr>

        @foreach ($data as $data)
        <tr align="center">
            <td style="padding: 30px">{{$data->title}}</td>
            <td style="padding: 0px"><img src="packageimage/{{$data->image}}" alt=""></td>
            <td style="padding: 30px">{{$data->description}}</td>
            <td style="padding: 30px">{{$data->price}}</td>
            <td style="padding: 30px"><a href="{{url('/deletepackage' , $data->id)}}">Delete</a></td>
            <td style="padding: 30px"><a href="{{url('/updatepackage' , $data->id)}}">Update</a></td>

        </tr>
        @endforeach


    </table>
</div>


        </div>


@include("admin.adminscript");
  </body>
</html>
