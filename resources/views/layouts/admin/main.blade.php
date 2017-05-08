<!DOCTYPE html>
<html lang="en">
  @include('layouts.admin.header')
  <body>
    <div class="be-wrapper">
      @include('layouts.admin.navbar')
      <div class="be-left-sidebar">
        @include('layouts.admin.sidebar')
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          @yield('content')
        </div>
      </div>
    </div>
    @include('layouts.admin.footer')
  </body>
</html>
