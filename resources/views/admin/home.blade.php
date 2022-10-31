<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css');
  </head>
  <body>
    <div class="container-scroller" id="app">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');
      <!-- partial -->
        @include('admin.navbar');
        
        <x-app-layout>
        </x-app-layout>
         
        
        
        <!-- partial -->
        
           
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>