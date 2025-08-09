@extends('layouts.admin-app')
@section('title', 'Faq')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faq Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Faq</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title pt-2">
                                    <i class="fas fa-edit pr-1"></i> Faq Edit
                                </h3>
                                <a href="{{ route('faq.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i> Faq List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('faq.update', $faq->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="d-flex ga-4 align-item-center">
                                        <div class="form-group col-sm-8">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title..." id="title" value="{{ $faq->title }}">
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="status">Publish:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value=""> >> chouse Status<< </option>
                                                        {{-- <option value="publish" @if ($faq->status == 'publish') selected @endif>Publish</option> --}}

                                                <option value="publish" {{ $faq->status == 'publish' ? 'selected' : '' }}>
                                                    Publish</option>
                                                <option value="draft" {{ $faq->status == 'draft' ? 'selected' : '' }}>Draft
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="status">Status:</label>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label
                                                    class="btn btn-outline-primary btn-toggle {{ $faq->FaqStatus == 'active' ? 'active' : '' }}">
                                                    <input type="radio" name="FaqStatus" id="option1" autocomplete="off"
                                                        value="active" {{ $faq->FaqStatus == 'active' ? 'checked' : '' }}>
                                                    Active
                                                </label>
                                                <label
                                                    class="btn btn-outline-primary btn-toggle {{ $faq->FaqStatus == 'active' ? '' : 'active' }} ">
                                                    <input type="radio" name="FaqStatus" id="option2" autocomplete="off"
                                                        value="deactive"
                                                        {{ $faq->FaqStatus == 'active' ? '' : 'checked' }}> Inactive
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tags">Description:</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="10" rows="5">{{ $faq->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-edit"></i>
                                            Update</button>
                                    </div>
                            </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

    </div>

    </section>
    <!-- /.content -->
    </div>



@endsection
