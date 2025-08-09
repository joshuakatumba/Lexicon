@extends('layouts.admin-app')
@section('title', 'Edit | Team')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
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
                                    <i class="fas fa-edit pr-1"></i> Edit Team</h3>
                                <a href="{{ route('team-member.index') }}" class="btn btn-success float-right">
                                    <i class="fas fa-list pr-1"></i> Team
                                    List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('team-member.update', $TeamMember->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex align-item-center">
                                        <div class="form-group col-sm-6">
                                            <label for="title">Name:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name..." id="title" value="{{ $TeamMember->name }}">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="title">Desagnation:</label>
                                            <input type="text" name="designation" class="form-control"
                                                placeholder="Enter Designation..." id="title" value="{{ $TeamMember->designation }}">
                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="form-group col-sm-6">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                                <option value=""> Select Status</option>
                                                <option value="publish" {{ $TeamMember->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                                <option value="draft" {{ $TeamMember->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="form-group col-sm-3">
                                            <label for="">Facebook :</label>
                                            <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook..." value="{{ $TeamMember->facebook }}">
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="">Twitter :</label>
                                            <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter..." value="{{ $TeamMember->twitter }}">
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="">Instragram :</label>
                                            <input type="text" name="instagram" class="form-control" placeholder="Enter Instragram..." value="{{ $TeamMember->instagram }}">
                                        </div>

                                        <div class="form-group col-sm-3">
                                            <label for="">Linkdin :</label>
                                            <input type="text" name="linkedin" class="form-control" placeholder="Enter Linkdin..." value="{{ $TeamMember->linkedin }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                            Update Team</button>
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
