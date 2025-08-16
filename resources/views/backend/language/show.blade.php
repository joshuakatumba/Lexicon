@extends('backend.layouts.admin-app')

@section('title', 'Language Details')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Language Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('language.index') }}">Language Settings</a></li>
                        <li class="breadcrumb-item active">Language Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $language->name }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('language.edit', $language) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ route('language.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td width="40%"><strong>Language Name:</strong></td>
                                            <td>{{ $language->name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Language Code:</strong></td>
                                            <td><span class="badge badge-info">{{ $language->code }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Status:</strong></td>
                                            <td>
                                                @if($language->is_active)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-secondary">Inactive</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Default Language:</strong></td>
                                            <td>
                                                @if($language->is_default)
                                                    <span class="badge badge-primary">Yes</span>
                                                @else
                                                    <span class="badge badge-light">No</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sort Order:</strong></td>
                                            <td>{{ $language->sort_order }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created:</strong></td>
                                            <td>{{ $language->created_at->format('M d, Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Last Updated:</strong></td>
                                            <td>{{ $language->updated_at->format('M d, Y H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        @if($language->flag)
                                            <img src="{{ $language->flag_url }}" alt="{{ $language->name }}" 
                                                 class="img-fluid" style="max-width: 200px; max-height: 120px; object-fit: cover;">
                                            <p class="mt-2"><strong>Flag Image</strong></p>
                                        @else
                                            <div class="bg-light p-4 rounded">
                                                <i class="fas fa-flag fa-3x text-muted"></i>
                                                <p class="mt-2 text-muted">No flag image uploaded</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Quick Actions</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <form action="{{ route('language.toggle-status', $language) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-block {{ $language->is_active ? 'btn-warning' : 'btn-success' }}">
                                        <i class="fas fa-toggle-{{ $language->is_active ? 'off' : 'on' }}"></i>
                                        {{ $language->is_active ? 'Deactivate' : 'Activate' }} Language
                                    </button>
                                </form>
                                
                                @if(!$language->is_default)
                                    <form action="{{ route('language.set-default', $language) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-block btn-primary" 
                                                onclick="return confirm('Set {{ $language->name }} as default language?')">
                                            <i class="fas fa-star"></i> Set as Default
                                        </button>
                                    </form>
                                @endif
                                
                                <a href="{{ route('language.edit', $language) }}" class="btn btn-block btn-warning">
                                    <i class="fas fa-edit"></i> Edit Language
                                </a>
                                
                                <form action="{{ route('language.destroy', $language) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-block btn-danger" 
                                            onclick="return confirm('Are you sure you want to delete this language? This action cannot be undone.')">
                                        <i class="fas fa-trash"></i> Delete Language
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
