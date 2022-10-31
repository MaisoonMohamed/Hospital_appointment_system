<!DOCTYPE html>
<html lang="en">
  <head>

<style type="text/css">
 label{
    display:inline-block;
    width:200px;
 }
</style>

   @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');
      <!-- partial -->
        @include('admin.navbar');
        <!-- partial -->
        
           <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top:100px">

            @if(session()->has('message'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">
                   x
                </button>
                {{session()->get('message')}}
             </div>
            @endif
              <form  action= "{{url('upload_doctor')}}"  method="GET" enctype="multipart/form-data">
              <div styple="padding:15px">
             <label>Doctor Name</label>
             <input type="text" style="color:black" name="name" placeholder="Write the name">   
             </div>

             <div styple="padding:15px">
             <label>Phone Number</label>
             <input type="number" style="color:black" name="number" placeholder="Write the number">   
             </div>

             <div styple="padding:15px" >
             <label>Specality</label>
             <select id="speciality" name="speciality" style="color:black; width:200px;">
                <option>--Select--</option>
                <option value="skin">Skin</option>
                <option value="nose">Nose</option>
                <option value="heart">Heart</option>
                
                </select>
             </div>

            <div styple="padding:15px">
             
            <label>Room Number</label>
             <input type="text" style="color:black" name="room" placeholder="Write the room number">   
             </div>

             <div styple="padding:60px">
             
            <label>Email Address</label>
             <input type="text" style="color:black" name="email" placeholder="Write the Email">   
             </div>

             <div styple="padding:15px">
             
            
             <input type="submit" class="btn btn-success">   
           
             </form>
            
            </div>

           </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>