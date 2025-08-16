@extends('layouts.admin-app')

@section('title', 'My Profile')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <!-- Profile Information -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile Information</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 text-center mb-4">
                                        <div class="profile-picture-container">
                                            @if($admin && $admin->profile_picture)
                                                <img src="{{ asset('uploads/profiles/' . $admin->profile_picture) }}" 
                                                     alt="Profile Picture" class="img-circle profile-picture" 
                                                     style="width: 120px; height: 120px; object-fit: cover;">
                                            @else
                                                <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" 
                                                     alt="Default Profile Picture" class="img-circle profile-picture" 
                                                     style="width: 120px; height: 120px; object-fit: cover;">
                                            @endif
                                            <div class="profile-picture-overlay">
                                                <label for="profile_picture" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-camera"></i> Change Photo
                                                </label>
                                            </div>
                                        </div>
                                        <input type="file" id="profile_picture" name="profile_picture" 
                                               accept="image/*" style="display: none;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name', $admin->name ?? '') }}" 
                                           placeholder="Enter your full name">
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email', $admin->email ?? '') }}" 
                                           placeholder="Enter your email address">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Account Created</label>
                                    <input type="text" class="form-control" 
                                           value="{{ $admin ? $admin->created_at->format('M d, Y H:i') : 'N/A' }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Last Updated</label>
                                    <input type="text" class="form-control" 
                                           value="{{ $admin ? $admin->updated_at->format('M d, Y H:i') : 'N/A' }}" readonly>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update Profile
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.profile.password') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="current_password">Current Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                           id="current_password" name="current_password" 
                                           placeholder="Enter your current password">
                                    @error('current_password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="new_password">New Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
                                           id="new_password" name="new_password" 
                                           placeholder="Enter your new password">
                                    @error('new_password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="new_password_confirmation">Confirm New Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" 
                                           id="new_password_confirmation" name="new_password_confirmation" 
                                           placeholder="Confirm your new password">
                                </div>

                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle"></i>
                                    <strong>Password Requirements:</strong>
                                    <ul class="mb-0 mt-2">
                                        <li>Minimum 8 characters long</li>
                                        <li>Should be different from your current password</li>
                                        <li>Use a combination of letters, numbers, and symbols for better security</li>
                                    </ul>
                                </div>

                                <button type="submit" class="btn btn-warning">
                                    <i class="fas fa-key"></i> Change Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<style>
.profile-picture-container {
    position: relative;
    display: inline-block;
}

.profile-picture-overlay {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.7);
    padding: 5px 10px;
    border-radius: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.profile-picture-container:hover .profile-picture-overlay {
    opacity: 1;
}

.profile-picture {
    border: 4px solid #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Handle profile picture change
    $('#profile_picture').on('change', function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.profile-picture').attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Show password requirements
    $('#new_password').on('focus', function() {
        $('.alert-info').show();
    });
});
</script>
@endpush
