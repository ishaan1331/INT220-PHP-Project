<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss");
  </head>
  <body>


    <div class="container-scroller">
        @include("admin.navbar");

        <form action="{{url('/updatetouremployee' , $data->id)}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Employee name</label>
                <input style="color: blue" ; type = "text" name = "name" value = "{{$data->name}}">
            </div>

            <div>
                <label>Employee position</label>
                <input style="color: blue" ; type = "text" name = "position" value = "{{$data->position}}">
            </div>


            <div>
                <label>Old Image</label>
               <img height="60%" width="60%" src="/employeeimage/{{$data->image}}">
            </div>

            <div>
                <label>New Image</label>
               <input type="file" name="image">
            </div>


            <div>

               <input style="color: blue" type="submit" value = "Update Chef" required>
            </div>

        </form>

    </div>


@include("admin.adminscript");
  </body>
</html>
