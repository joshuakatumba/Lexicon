@extends('layouts.admin-app')

@section('content')
    <!-- Clean Content Wrapper -->
    <div class="content-wrapper" style="background: #f8f9fb; min-height: 100vh; padding: 0;">
        <!-- Clean Header -->
        <div class="content-header" style="background: white; border-bottom: 1px solid #e2e8f0; padding: 24px 32px;">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h1 style="color: #1a202c; font-weight: 600; font-size: 28px; margin: 0; letter-spacing: -0.5px;">
                            Dashboard
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb float-sm-right" style="background: transparent; margin: 0; padding: 0;">
                                <li class="breadcrumb-item">
                                    <a href="#" style="color: #64748b; text-decoration: none; font-size: 14px;">Home</a>
                                </li>
                                <li class="breadcrumb-item active" style="color: #1a202c; font-size: 14px; font-weight: 500;">Dashboard</li>
                        </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content" style="padding: 32px;">
            <div class="container-fluid p-0">
                <!-- Clean Stats Grid -->
                <div class="row g-4 mb-5">
                    <!-- Total Categories Card -->
                    <div class="col-lg-3 col-md-6">
                        <div style="
                            background: white;
                            border-radius: 12px;
                            padding: 24px;
                            border: 1px solid #e2e8f0;
                            transition: all 0.2s ease;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                        " onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.07)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div style="
                                    background: #eff6ff;
                                    border-radius: 8px;
                                    width: 48px;
                                    height: 48px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                ">
                                    <i class="fas fa-tags" style="font-size: 20px; color: #3b82f6;"></i>
                                </div>
                                <div class="text-end">
                                    <h2 style="font-size: 32px; font-weight: 700; margin: 0; color: #1a202c; line-height: 1;">
                                        {{ $category->count() }}
                                    </h2>
                            </div>
                            </div>
                            <h6 style="font-weight: 600; margin: 0 0 8px 0; color: #1a202c; font-size: 16px;">Total Categories</h6>
                            <p style="color: #64748b; font-size: 14px; margin: 0 0 16px 0;">Organize your content</p>
                            <a href="{{ route('admin.category') }}" style="
                                color: #3b82f6;
                                text-decoration: none;
                                font-weight: 500;
                                display: flex;
                                align-items: center;
                                font-size: 14px;
                                transition: color 0.2s ease;
                            " onmouseover="this.style.color='#2563eb'" onmouseout="this.style.color='#3b82f6'">
                                View Categories
                                <i class="fas fa-arrow-right ms-2" style="font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Blog Posts Card -->
                    <div class="col-lg-3 col-md-6">
                        <div style="
                            background: white;
                            border-radius: 12px;
                            padding: 24px;
                            border: 1px solid #e2e8f0;
                            transition: all 0.2s ease;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                        " onmouseover="this.style.borderColor='#10b981'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.07)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div style="
                                    background: #ecfdf5;
                                    border-radius: 8px;
                                    width: 48px;
                                    height: 48px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                ">
                                    <i class="fas fa-blog" style="font-size: 20px; color: #10b981;"></i>
                                </div>
                                <div class="text-end">
                                    <h2 style="font-size: 32px; font-weight: 700; margin: 0; color: #1a202c; line-height: 1;">
                                        {{ $TotalBlog->count() }}
                                    </h2>
                            </div>
                            </div>
                            <h6 style="font-weight: 600; margin: 0 0 8px 0; color: #1a202c; font-size: 16px;">Blog Posts</h6>
                            <p style="color: #64748b; font-size: 14px; margin: 0 0 16px 0;">Published content</p>
                            <a href="{{ route('admin.blog.index') }}" style="
                                color: #10b981;
                                text-decoration: none;
                                font-weight: 500;
                                display: flex;
                                align-items: center;
                                font-size: 14px;
                                transition: color 0.2s ease;
                            " onmouseover="this.style.color='#059669'" onmouseout="this.style.color='#10b981'">
                                Manage Posts
                                <i class="fas fa-arrow-right ms-2" style="font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Services Card -->
                    <div class="col-lg-3 col-md-6">
                        <div style="
                            background: white;
                            border-radius: 12px;
                            padding: 24px;
                            border: 1px solid #e2e8f0;
                            transition: all 0.2s ease;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                        " onmouseover="this.style.borderColor='#f59e0b'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.07)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div style="
                                    background: #fffbeb;
                                    border-radius: 8px;
                                    width: 48px;
                                    height: 48px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                ">
                                    <i class="fas fa-cogs" style="font-size: 20px; color: #f59e0b;"></i>
                                </div>
                                <div class="text-end">
                                    <h2 style="font-size: 32px; font-weight: 700; margin: 0; color: #1a202c; line-height: 1;">
                                        {{ $service->count() }}
                                    </h2>
                            </div>
                            </div>
                            <h6 style="font-weight: 600; margin: 0 0 8px 0; color: #1a202c; font-size: 16px;">All Services</h6>
                            <p style="color: #64748b; font-size: 14px; margin: 0 0 16px 0;">Available services</p>
                            <a href="{{ route('service.index') }}" style="
                                color: #f59e0b;
                                text-decoration: none;
                                font-weight: 500;
                                display: flex;
                                align-items: center;
                                font-size: 14px;
                                transition: color 0.2s ease;
                            " onmouseover="this.style.color='#d97706'" onmouseout="this.style.color='#f59e0b'">
                                View Services
                                <i class="fas fa-arrow-right ms-2" style="font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Team Members Card -->
                    <div class="col-lg-3 col-md-6">
                        <div style="
                            background: white;
                            border-radius: 12px;
                            padding: 24px;
                            border: 1px solid #e2e8f0;
                            transition: all 0.2s ease;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                        " onmouseover="this.style.borderColor='#8b5cf6'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.07)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div style="
                                    background: #f5f3ff;
                                    border-radius: 8px;
                                    width: 48px;
                                    height: 48px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                ">
                                    <i class="fas fa-users" style="font-size: 20px; color: #8b5cf6;"></i>
                                </div>
                                <div class="text-end">
                                    <h2 style="font-size: 32px; font-weight: 700; margin: 0; color: #1a202c; line-height: 1;">
                                        {{ $team->count() }}
                                    </h2>
                            </div>
                            </div>
                            <h6 style="font-weight: 600; margin: 0 0 8px 0; color: #1a202c; font-size: 16px;">All Team</h6>
                            <p style="color: #64748b; font-size: 14px; margin: 0 0 16px 0;">Team members</p>
                            <a href="{{ route('team-member.index') }}" style="
                                color: #8b5cf6;
                                text-decoration: none;
                                font-weight: 500;
                                display: flex;
                                align-items: center;
                                font-size: 14px;
                                transition: color 0.2s ease;
                            " onmouseover="this.style.color='#7c3aed'" onmouseout="this.style.color='#8b5cf6'">
                                Manage Team
                                <i class="fas fa-arrow-right ms-2" style="font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="row">
                    <div class="col-md-8">
                        <div style="
                            background: white;
                            border-radius: 12px;
                            padding: 32px;
                            border: 1px solid #e2e8f0;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                        ">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h3 style="color: #1a202c; font-weight: 600; margin: 0; font-size: 20px;">Area Chart</h3>
                                    <p style="color: #64748b; margin: 8px 0 0 0; font-size: 14px;">Data visualization overview</p>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button" style="
                                        border: none;
                                        background: #f1f5f9;
                                        color: #64748b;
                                        border-radius: 8px;
                                        padding: 8px 12px;
                                        font-size: 14px;
                                        font-weight: 500;
                                        cursor: pointer;
                                        transition: all 0.2s ease;
                                    " data-card-widget="collapse" onmouseover="this.style.background='#e2e8f0'" onmouseout="this.style.background='#f1f5f9'">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" style="
                                        border: none;
                                        background: #f1f5f9;
                                        color: #64748b;
                                        border-radius: 8px;
                                        padding: 8px 12px;
                                        font-size: 14px;
                                        font-weight: 500;
                                        cursor: pointer;
                                        transition: all 0.2s ease;
                                    " data-card-widget="remove" onmouseover="this.style.background='#fee2e2'; this.style.color='#dc2626'" onmouseout="this.style.background='#f1f5f9'; this.style.color='#64748b'">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="chart" style="position: relative; height: 300px; background: #fafbfc; border-radius: 8px; padding: 20px; border: 1px solid #f1f5f9;">
                                <canvas id="areaChart" style="width: 100%; height: 100%;"></canvas>
                                        </div>
                                        </div>
                                    </div>

                    <div class="col-md-4">
                        <div style="
                            background: white;
                            border-radius: 12px;
                            padding: 32px;
                            border: 1px solid #e2e8f0;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                            height: 100%;
                        ">
                            <h4 style="color: #1a202c; font-weight: 600; margin-bottom: 24px; font-size: 18px;">Quick Actions</h4>
                            
                            <div class="d-grid gap-3">
                                <button class="btn" style="
                                    background: #3b82f6;
                                    border: none;
                                    border-radius: 8px;
                                    padding: 12px 16px;
                                    color: white;
                                    font-weight: 500;
                                    text-align: left;
                                    transition: all 0.2s ease;
                                    font-size: 14px;
                                    display: flex;
                                    align-items: center;
                                " onmouseover="this.style.background='#2563eb'" onmouseout="this.style.background='#3b82f6'">
                                    <i class="fas fa-plus me-3" style="font-size: 14px;"></i>
                                    Add New Content
                                </button>
                                
                                <button class="btn" style="
                                    background: #10b981;
                                    border: none;
                                    border-radius: 8px;
                                    padding: 12px 16px;
                                    color: white;
                                    font-weight: 500;
                                    text-align: left;
                                    transition: all 0.2s ease;
                                    font-size: 14px;
                                    display: flex;
                                    align-items: center;
                                " onmouseover="this.style.background='#059669'" onmouseout="this.style.background='#10b981'">
                                    <i class="fas fa-chart-line me-3" style="font-size: 14px;"></i>
                                    View Analytics
                                </button>
                                
                                <button class="btn" style="
                                    background: #64748b;
                                    border: none;
                                    border-radius: 8px;
                                    padding: 12px 16px;
                                    color: white;
                                    font-weight: 500;
                                    text-align: left;
                                    transition: all 0.2s ease;
                                    font-size: 14px;
                                    display: flex;
                                    align-items: center;
                                " onmouseover="this.style.background='#475569'" onmouseout="this.style.background='#64748b'">
                                    <i class="fas fa-cog me-3" style="font-size: 14px;"></i>
                                    Settings
                                </button>
                            </div>

                            <div style="margin-top: 32px; padding: 20px; background: #f8fafc; border-radius: 8px; border: 1px solid #f1f5f9;">
                                <h6 style="color: #1a202c; font-weight: 600; margin-bottom: 16px; font-size: 14px;">System Status</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div style="width: 8px; height: 8px; background: #10b981; border-radius: 50%; margin-right: 12px;"></div>
                                    <span style="color: #475569; font-size: 14px;">All systems operational</span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div style="width: 8px; height: 8px; background: #10b981; border-radius: 50%; margin-right: 12px;"></div>
                                    <span style="color: #475569; font-size: 14px;">Database connected</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div style="width: 8px; height: 8px; background: #f59e0b; border-radius: 50%; margin-right: 12px;"></div>
                                    <span style="color: #475569; font-size: 14px;">Updates available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Clean Footer -->
    <footer style="
        background: white;
        border-top: 1px solid #e2e8f0;
        padding: 20px 32px;
    ">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span style="color: #1a202c; font-weight: 600;">Copyright &copy; 2024</span>
                    <a href="#" style="color: #3b82f6; text-decoration: none; margin-left: 8px;">Your Company</a>
                    <span style="color: #64748b;">. All rights reserved.</span>
                </div>
                <div class="col-md-6 text-end">
                    <span style="color: #64748b; font-size: 14px;">
                        <strong>Version</strong> 4.0.0
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: #1a202c;
            background: #f8f9fb;
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            content: "/";
            color: #cbd5e0;
            font-weight: 400;
        }
        
        .btn:focus {
            box-shadow: none !important;
            outline: none !important;
        }
        
        /* Smooth transitions for all interactive elements */
        * {
            transition: all 0.2s ease;
        }
        
        /* Chart container improvements */
        .chartjs-size-monitor {
            display: none !important;
        }
    </style>
@endsection