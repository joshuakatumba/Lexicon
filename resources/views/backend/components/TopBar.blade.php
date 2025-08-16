<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      <!-- LEXICON Logo in Top Bar -->
      <li class="nav-item d-none d-md-inline-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">
          <img src="{{ asset('uploads/website/lexicon-logo.svg') }}" alt="LEXICON" height="30" style="margin-right: 10px;">
        </a>
      </li>
      

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('backend')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('backend')}}/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('backend')}}/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

    <!-- User Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#" style="padding: 8px 15px;">
        <div class="user-avatar">
          @if(Auth::user() && Auth::user()->profile_picture)
            <img src="{{ asset('uploads/profiles/' . Auth::user()->profile_picture) }}" alt="User Avatar" class="img-circle" style="width: 35px; height: 35px; object-fit: cover;">
          @else
            <img src="{{ asset('backend')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-circle" style="width: 35px; height: 35px; object-fit: cover;">
          @endif
        </div>
        <div class="user-info ml-2 d-none d-md-block">
          <div class="user-name" style="font-size: 14px; font-weight: 500; color: #333; line-height: 1.2;">{{ Auth::user()->name ?? 'Admin User' }}</div>
          <div class="user-role" style="font-size: 12px; color: #6c757d; line-height: 1.2;">Administrator</div>
        </div>
        <i class="fas fa-chevron-down ml-2" style="font-size: 12px; color: #6c757d;"></i>
      </a>

      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right modern-profile-dropdown">
        <!-- Profile Header -->
        <div class="profile-header">
          <div class="profile-avatar">
            @if(Auth::user() && Auth::user()->profile_picture)
              <img src="{{ asset('uploads/profiles/' . Auth::user()->profile_picture) }}" alt="User Avatar" class="img-circle">
            @else
              <img src="{{ asset('backend')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-circle">
            @endif
          </div>
          <div class="profile-info">
            <h5 class="profile-name">{{ Auth::user()->name ?? 'Admin User' }}</h5>
            <p class="profile-email">{{ Auth::user()->email ?? 'admin@lexicon.com' }}</p>
            <span class="profile-role">Administrator</span>
          </div>
        </div>

        <div class="dropdown-divider"></div>

        <!-- Profile Actions -->
        <div class="profile-actions">
          <a href="{{ route('admin.dashboard') }}" class="dropdown-item profile-action-item">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
          <a href="{{ route('admin.profile') }}" class="dropdown-item profile-action-item">
            <i class="fas fa-user-edit"></i>
            <span>My Profile</span>
          </a>
          <a href="{{ route('setting.website') }}" class="dropdown-item profile-action-item">
            <i class="fas fa-cog"></i>
            <span>Website Settings</span>
          </a>
          <a href="{{ route('setting.mail-setting') }}" class="dropdown-item profile-action-item">
            <i class="fas fa-envelope"></i>
            <span>Mail Settings</span>
          </a>
          <a href="{{ route('contact.index') }}" class="dropdown-item profile-action-item">
            <i class="fas fa-phone"></i>
            <span>Contact Messages</span>
          </a>
        </div>

        <div class="dropdown-divider"></div>

        <!-- Logout -->
        <a href="#" class="dropdown-item profile-logout" onclick="logoutUser()">
          <i class="fas fa-sign-out-alt"></i>
          <span>Sign Out</span>
        </a>
        
        <script>
        function logoutUser() {
            if (confirm('Are you sure you want to sign out?')) {
                // Create and submit logout form
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.logout") }}';
                
                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                
                form.appendChild(csrfToken);
                document.body.appendChild(form);
                form.submit();
            }
        }
        </script>
      </div>

    </li>

     

    </ul>
  </nav>