@extends('admin.admin_layout.layout')

@section('title')
    Manage Categories
@endsection

@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <h1 class="app-page-title mb-0">Manage Categories</h1>

                    <button type="button" class="btn app-btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addCategoryModal">
                        + Add Category
                    </button>
                </div>

                <div class="app-card shadow-sm">
                    <div class="app-card-header p-3">
                        <h4 class="app-card-title mb-0">
                            All Categories
                            <span
                                style="background-color: red; color: white; border-radius: 50%; padding: 6px 12px; font-weight: bold; display: inline-flex; align-items: center; justify-content: center;">
                                {{ count($data) }}
                            </span>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="app-card-body p-3 p-lg-4">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="meta">#</th>
                                <th class="meta">Category Name</th>
                                <th class="meta">Status</th>
                                <th class="meta text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>


                                    <td>{{ $row->id }}</td>
                                    <td class="fw-medium" >{{ $row->catname }}</td>
                                    <td>
                                        @if ($row->status == 'Active')
                                            <span class="badge bg-success">{{ $row->status }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ $row->status }}</span>
                                        @endif

                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                            data-bs-toggle="modal" data-bs-target="#editCategoryModal1{{$row->id}}">
                                            Edit
                                        </button>
                                        <a href="/admin-category/delete/{{ $row->id }}">
                                            <button onclick="return confirm('Are you sure to delete {{ $row->catname }}')"
                                                type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                {{-- ================= Edit Category modals ================= --}}
                                <div class="modal fade" id="editCategoryModal1{{$row->id}}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            {{-- <form method="POST"> --}}
                                            <form method="POST" action="/admin-category/update/{{ $row->id }} ">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Category</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">{{ $row->catname }}</label>
                                                        <input type="text" name="catname" class="form-control"
                                                            value="{{ $row->catname }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" class="form-select">
                                                            <option value="Active"
                                                                {{ $row->status == 'Active' ? 'selected' : '' }}>Active
                                                            </option>
                                                            <option value="Inactive"
                                                                {{ $row->status == 'Inactive' ? 'selected' : '' }}>Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn app-btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    {{-- <a href="/admin-category/edit/{{ $row->$id }}"> --}}
                                                    <button type="submit" class="btn app-btn-primary">Update</button>
                                                    {{-- </a> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->
        </div><!--//app-card-->

    </div><!--//container-xl-->
    </div><!--//app-content-->
    </div><!--//app-wrapper-->

    {{-- ================= Add Category modal ================= --}}
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('category') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="catname" class="form-control" placeholder="e.g. Bakery & Biscuits">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn app-btn-primary">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
