@extends('backend.layouts.admin-app')

@section('title', 'Language Settings')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Language Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Language Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Languages</h3>
                            <div class="card-tools">
                                <a href="{{ route('language.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> Add New Language
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="10%">Flag</th>
                                            <th width="20%">Name</th>
                                            <th width="15%">Code</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Default</th>
                                            <th width="10%">Sort Order</th>
                                            <th width="20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($languages as $language)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if($language->flag)
                                                        <img src="{{ $language->flag_url }}" alt="{{ $language->name }}" 
                                                             class="img-thumbnail" style="width: 30px; height: 20px; object-fit: cover;">
                                                    @else
                                                        <span class="badge badge-secondary">No Flag</span>
                                                    @endif
                                                </td>
                                                <td>{{ $language->name }}</td>
                                                <td><span class="badge badge-info">{{ $language->code }}</span></td>
                                                <td>
                                                    <form action="{{ route('language.toggle-status', $language) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm {{ $language->is_active ? 'btn-success' : 'btn-secondary' }}">
                                                            {{ $language->is_active ? 'Active' : 'Inactive' }}
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    @if($language->is_default)
                                                        <span class="badge badge-success">Default</span>
                                                    @else
                                                        <form action="{{ route('language.set-default', $language) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-outline-primary" 
                                                                    onclick="return confirm('Set {{ $language->name }} as default language?')">
                                                                Set Default
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                                <td>{{ $language->sort_order }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('language.show', $language) }}" 
                                                           class="btn btn-sm btn-info" title="View">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('language.edit', $language) }}" 
                                                           class="btn btn-sm btn-warning" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('language.destroy', $language) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                                    onclick="return confirm('Are you sure you want to delete this language?')" 
                                                                    title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No languages found. <a href="{{ route('language.create') }}">Add your first language</a></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
