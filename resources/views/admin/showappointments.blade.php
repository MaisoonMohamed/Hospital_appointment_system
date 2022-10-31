<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');
      <!-- partial -->
        @include('admin.navbar');
        
        <x-app-layout>
        </x-app-layout>
       
        <div class="container-fluid page-body-wrapper"> 
        <div align="center" style="padding:50px;" >
       <table>
         <tr style="background-color:black;">
          <th style="padding:5px; font-size:20px; color:white;">Customer Name</th>
          <th style="padding:5px; font-size:20px; color:white;">Email</th>
          <th style="padding:5px; font-size:20px; color:white;">Phone</th>
          <th style="padding:5px; font-size:20px; color:white;">Doctor Name</th>
          <th style="padding:5px; font-size:20px; color:white;">Date</th>
          <th style="padding:5px; font-size:20px; color:white;">Time</th>
          <th style="padding:5px; font-size:20px; color:white;">Message</th>
          <th style="padding:5px; font-size:20px; color:white;">Cancel Appointment</th>
          
         </tr>
         @foreach($appoints as $app)  
        <tr align="center" style="background-color:skyblue;">
            <td style="padding:5px; font-size:20px; color:white;">{{$app->name}}</td>
            <td style="padding:5px; font-size:20px; color:white;">{{$app->email}}</td>
            <td style="padding:5px; font-size:20px; color:white;">{{$app->phone}}</td>
            <td style="padding:5px; font-size:20px; color:white;">{{$app->doctor}}</td>
            <td style="padding:5px; font-size:20px; color:white;">{{$app->date}}</td>
            <td style="padding:5px; font-size:20px; color:white;">{{$app->timestart}}</td>
            <td style="padding:5px; font-size:20px; color:white;">{{$app->message}}</td>
            <td><a class="bt btn-danger" href="{{url('cancel_appointmentAdmin',$app->id)}}" onclick="return confrim('are you sure?')">Cancel</a></td>
        </tr>

        @endforeach
        <div id="app">
       <front-page></front-page>
       </div>

       </table>
            
   </div>
</div>
          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
        
        <!-- partial -->
        
           
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>