 <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"><img src="{{url('images/footer_logo.svg')}}" alt="logo" width="150" class=""></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">W</a>
          </div>
          <ul class="sidebar-menu pt-5">
            
     
           
            <li class="menu-header mt-4">Dashboard</li>

            <li class= {{(request()->routeIs('admin.dashboard'))? "active":""}}><a class="nav-link" href="{{route('admin.dashboard')}}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>

            
             {{-- <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Manage Ads</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.ads.create')}}">Ads Create</a></li>
                <li><a class="nav-link" href="{{route('admin.ads.list')}}">Ads List</a></li>
              </ul>
            </li>  --}}
           
           
           {{--  <li class="menu-header">Stisla</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="components-article.html">Article</a></li>                <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>                <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>                <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>                <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>                <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>                <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>                <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                <li><a class="nav-link" href="components-table.html">Table</a></li>
                <li><a class="nav-link" href="components-user.html">User</a></li>                <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>              </ul>
            </li> --}}
                     
          </ul>

        </aside>