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

           <form action="{{url('/uploademployee')}}" method="Post" enctype="multipart/form-data">

            @csrf
               <div>
                   <label>Name</label>
                   <input style="color: blue"  type="text" name="name" placeholder="Enter name" required>
               </div>

               <div>
                <label>Position</label>
                <input style="color: blue"  type="text" name="position" placeholder="Enter position" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" placeholder="" required>
            </div>


            <div>

                <input style="color: white ; background-color: blue" type="submit" value="Save">
            </div>
           </form>

           <div style = "position: relative ; top: 60px ; right: -150px">
           <table>
            <tr>
                <th style="padding: 30px ; height: 100px ; width:100px;" >Name</th>
                <th style="padding: 30px ; height: 100px ; width:100px;">Position</th>
                <th style="height: 100px ; width:100px;">Image</th>
                <th style="padding: 30px ; height: 100px ; width:100px;">Action</th>
                <th style="padding: 30px ; height: 100px ; width:100px;">Action2</th>
            </tr>

            @foreach ($data as $data)
            <tr align="center">
                 <td style="padding: 30px;" >{{$data->name}}</td>
                 <td style="padding: 30px ;">{{$data->position}}</td>
                 <td style="padding: 0px ;"><img height="100px" width="100px" src="/employeeimage/{{$data->image}}"></td>
                 <td style="padding: 30px ;"><a href="{{url('/updateemployee' , $data->id)}}">Update</a></td>
                 <td style="padding: 30px ;"><a href="{{url('/deleteemployee' , $data->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </div>


        </table>

    </div>



@include("admin.adminscript");
  </body>
</html>
