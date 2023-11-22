<!DOCTYPE html>
<html >

  <x-admin.head/>
  @stack('css')
 

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
       <x-admin.header/>

      <div class="main-sidebar sidebar-style-2">
          <x-admin.aside/>

       
      </div>

      <!-- Main Content -->
      <div class="main-content">
          @yield('content')
         
      
      </div>
     
    </div>
  </div>

  <!-- General JS Scripts -->
   <x-admin.footer/>
   @stack('js')
     @notifyJs
</body>
</html>