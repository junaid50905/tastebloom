<!DOCTYPE html>
<html lang="en">
{{-- head start--}}
  @include('back-end.layouts.includes.head')
{{-- head end --}}
  <body>
    <div class="container-scroller">


      <!-- partial:partials/_sidebar.html -->
      @include('back-end.layouts.includes.sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('back-end.layouts.includes.topbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('main_panel')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('back-end.layouts.includes.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('back-end.layouts.includes.scripts')
    <!-- End custom js for this page -->
  </body>
</html>
