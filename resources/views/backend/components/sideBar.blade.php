<aside class="main-sidebar sidebar-modern">
    <!-- Brand Logo
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <span class="brand-text">{{ $website->site_name ?? 'LEXICON' }}</span>
        </a>
    </div> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="sidebar-nav">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('page.index') }}"
                        class="nav-link {{ request()->routeIs('page.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <span class="nav-text">Pages</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.category') }}"
                        class="nav-link {{ request()->routeIs('admin.category') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-large"></i>
                        <span class="nav-text">Category Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.blog.index') }}"
                        class="nav-link {{ request()->routeIs('admin.blog.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-desktop"></i>
                        <span class="nav-text">Blog Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('service.index') }}"
                        class="nav-link {{ request()->routeIs('service.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <span class="nav-text">Service Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}"
                        class="nav-link {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-images"></i>
                        <span class="nav-text">Gallery Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonial.index') }}"
                        class="nav-link {{ request()->routeIs('testimonial.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <span class="nav-text">Testimonial</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('price-plan.index') }}"
                        class="nav-link {{ request()->routeIs('price-plan.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <span class="nav-text">Price Plan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('faq.index') }}"
                        class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <span class="nav-text">FAQ</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('partner.index') }}"
                        class="nav-link {{ request()->routeIs('partner.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-handshake"></i>
                        <span class="nav-text">Partners</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('team-member.index') }}"
                        class="nav-link {{ request()->routeIs('team-member.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <span class="nav-text">Team Members</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact.index') }}"
                        class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone"></i>
                        <span class="nav-text">Contact Us</span>
                    </a>
                </li>

                <li class="nav-item has-submenu {{ request()->routeIs('setting.*') ? 'open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <span class="nav-text">Settings</span>
                        <i class="nav-arrow fas fa-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item">
                            <a href="{{ route('setting.website') }}"
                                class="nav-link {{ request()->routeIs('setting.website') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-globe"></i>
                                <span class="nav-text">Website</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('setting.mail-setting') }}"
                                class="nav-link {{ request()->routeIs('setting.mail-setting') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-envelope"></i>
                                <span class="nav-text">Mail Setting</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<style>
.sidebar-modern {
    width: 220px;
    background: #ffffff;
    border-right: 1px solid #e9ecef;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1038;
    transition: all 0.3s ease;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
}

.sidebar-brand {
    padding: 20px;
    border-bottom: 1px solid #e9ecef;
    background: #ffffff;
}

.brand-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #333;
}

.brand-image {
    width: 40px;
    height: 40px;
    margin-right: 12px;
    object-fit: contain;
}

.brand-text {
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.sidebar {
    padding: 20px 0;
}

.sidebar-nav {
    padding: 0;
}

.nav-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-item {
    margin: 0;
}

.nav-link {
    display: flex;
    align-items: center;
    padding: 12px 24px;
    color: #6c757d;
    text-decoration: none;
    transition: all 0.3s ease;
    border-left: 3px solid transparent;
    position: relative;
}

.nav-link:hover {
    background: #f8f9fa;
    color: #495057;
    border-left-color: #333;
}

.nav-link.active {
    background: #f8f9fa;
    color: #333;
    border-left-color: #333;
}

.nav-icon {
    width: 20px;
    height: 20px;
    margin-right: 12px;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-text {
    font-size: 14px;
    font-weight: 500;
    flex: 1;
}

.nav-arrow {
    font-size: 12px;
    transition: transform 0.3s ease;
}

.has-submenu.open .nav-arrow {
    transform: rotate(90deg);
}

.submenu {
    list-style: none;
    padding: 0;
    margin: 0;
    background: #ffffff;
    display: none;
}

.has-submenu.open .submenu {
    display: block;
}

.submenu .nav-link {
    padding-left: 56px;
    font-size: 13px;
}

.submenu .nav-link.active {
    background: #f8f9fa;
    color: #333;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar-modern {
        transform: translateX(-100%);
    }
    
    .sidebar-modern.show {
        transform: translateX(0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle submenu toggle
    const submenuItems = document.querySelectorAll('.has-submenu');
    
    submenuItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        link.addEventListener('click', function(e) {
            e.preventDefault();
            item.classList.toggle('open');
        });
    });
});
</script>
