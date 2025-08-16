@extends('layouts.admin-app')
@section('title', 'Service Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Service</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row"></div>
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title pt-2"><i class="fas fa-list pr-1"></i>Service List</h3>
                            <a href="{{ route('service.create') }}" class="btn btn-success float-right"><i
                                    class="fas fa-plus pr-1"></i>Create Service</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th># Sl No</th>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Ctegory</th>
                                        <th>Plan</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Ation</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($service as  $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="text-center">
                                                <i class="{{ $item->icon }}"></i>
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>

                                                @foreach ($plan as $pp)
                                                    @foreach ($item->plans as $price)
                                                        @if ($pp->id == $price->id)
                                                            <span class=" badge badge-success">{{ $price->title }}</span>
                                                       
                                                        @endif
                                                    @endforeach




                                                    {{-- {{ $item->title }} --}}
                                                @endforeach
                                                {{-- @foreach ($service->plans as $plan)
                                                <span>{{ $plans->title }}</span>

                                                 @endforeach --}}
                                                {{-- @foreach ($service->plans as $plan)
                                                    {{ $plan->id }}
                                                @endforeach --}}

                                                {{-- {{ $service->plans()->title }} $service->plans as $plan --}}
                                            </td>

                                            <td>
                                                <img @if ($item->image) src="{{ asset($item->image) }}" @else src="{{ asset('uploads/no-image.png') }}" @endif
                                                    width="120" height="80">
                                            </td>
                                            <td>
                                                @if ($item->status == 'publish')
                                                    <span class="badge bg-success">Publish</span>
                                                @else
                                                    <span class="badge bg-danger">Draft</span>
                                                @endif
                                            </td>
                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('service.show', $item->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{ route('service.edit', $item->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>

                                                <form action="{{ route('service.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <input type="hidden" value="DELETE" name="_method"> --}}
                                                    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                                                    <button type="submit" onclick="DeleteConfirm(event)"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <td colspan="7" class="text-center">
                                            <span class="text-danger text-bold">
                                                No Data Found
                                            </span>
                                        </td>
                                    @endforelse

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>



@endsection
