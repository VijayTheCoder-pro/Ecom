@extends('admin.admin_layout.layout')

@section('title')
    Manage Product
@endsection

@section('content')
    @if (session('success'))
        <div class="custom-toast success-toast">
            <div class="toast-icon">✓</div>
            <div>
                <div class="toast-title">Success</div>
                <div class="toast-message">{{ session('success') }}</div>
            </div>
        </div>
    @endif

    @if (session('edit'))
        <div class="custom-toast success-toast">
            <div class="toast-icon">✓</div>
            <div>
                <div class="toast-title">Updated</div>
                <div class="toast-message">{{ session('edit') }}</div>
            </div>
        </div>
    @endif

    @if (session('del'))
        <div class="custom-toast delete-toast">
            <div class="toast-icon">✓</div>
            <div>
                <div class="toast-title">Deleted</div>
                <div class="toast-message">{{ session('del') }}</div>
            </div>
        </div>
    @endif


    <style>
        .custom-toast {
            position: fixed;
            top: 22px;
            right: 22px;
            z-index: 99999;

            display: flex;
            align-items: center;
            gap: 12px;

            min-width: 280px;
            padding: 13px 16px;

            background: #fff;
            border-radius: 10px;

            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);

            animation: toastIn 0.35s ease,
                toastOut 0.35s ease 2.65s forwards;
        }

        .toast-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;
            font-weight: 700;
            font-size: 16px;
        }

        .success-toast {
            border-left: 4px solid #198754;
        }

        .success-toast .toast-icon {
            background: #e8f7ef;
            color: #198754;
        }

        .delete-toast {
            border-left: 4px solid #dc3545;
        }

        .delete-toast .toast-icon {
            background: #fdebed;
            color: #dc3545;
        }

        .toast-title {
            font-size: 14px;
            font-weight: 600;
            color: #212529;
        }

        .toast-message {
            font-size: 12px;
            color: #6c757d;
            margin-top: 2px;
        }

        @keyframes toastIn {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes toastOut {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(30px);
            }
        }
    </style>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <h1 class="app-page-title mb-0">Manage Products</h1>

                    <button type="button" class="btn app-btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addProductModal">
                        + Add Product
                    </button>
                </div>

                {{-- ================= QUICK STATS ================= --}}
                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Total Products</h4>
                                <div class="stats-figure">{{ $data->count('id') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">In Stock</h4>
                                <div class="stats-figure">{{$data->sum('stock')}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Out of Stock</h4>
                                <div class="stats-figure">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Categories</h4>
                                <div class="stats-figure">{{$data->count('category')}}</div>
                            </div>
                        </div>
                    </div>
                </div><!--//row-->

                {{-- ================= FILTER ================= --}}
                <div class="app-card shadow-sm mb-4">
                    <div class="app-card-body p-3 p-lg-4">
                        <form class="row g-3 align-items-end">
                            <div class="col-12 col-md-4">
                                <label class="form-label">Search Product</label>
                                <input type="text" name="search" class="form-control" placeholder="Search by name...">
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select">
                                    <option value="">All Categories</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="home">Home & Kitchen</option>
                                    <option value="mobiles">Mobiles</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="form-label">Stock Status</label>
                                <select name="stock_status" class="form-select">
                                    <option value="">All</option>
                                    <option value="in_stock">In Stock</option>
                                    <option value="out_of_stock">Out of Stock</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="button" class="btn app-btn-secondary w-100">Filter</button>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->

                {{-- ================= PRODUCT TABLE ================= --}}
                <div class="app-card shadow-sm">
                    <div class="app-card-header p-3">
                        <h4 class="app-card-title mb-0">All Products</h4>
                    </div>

                    <div class="app-card-body p-3 p-lg-4">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="meta">#</th>
                                        <th class="meta">Image</th>
                                        <th class="meta">Product Name</th>
                                        <th class="meta">Category</th>
                                        <th class="meta">Price</th>
                                        <th class="meta">Stock</th>
                                        <th class="meta">Status</th>
                                        <th class="meta text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>

                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <img src="{{ $row->image }}" alt="product" width="45" height="45"
                                                    style="object-fit: cover; border-radius: 8px;">
                                            </td>
                                            <td class="fw-medium">{{ $row->Pname }}</td>
                                            <td>{{ $row->category }}</td>
                                            <td>
                                                <span class="fw-semibold">₹{{ $row->price }}</span>
                                                <span class="text-muted text-decoration-line-through ms-1"
                                                    style="font-size: 0.8rem;">₹{{ $row->oprice }}</span>
                                            </td>
                                            <td>{{ $row->stock }}</td>
                                            <td>
                                                <span
                                                    class="badge {{ match ($row->status) {
                                                        'active' => 'bg-success',
                                                        'draft' => 'bg-warning text-dark',
                                                        'inactive' => 'bg-danger',
                                                        default => 'bg-secondary',
                                                    } }}">
                                                    {{ ucfirst($row->status) }}
                                                </span>
                                            </td>
                                            <td class="text-end">
                                                {{-- <a href=""> --}}
                                                <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editProductModal{{ $row->id }}">
                                                    Edit
                                                </button>
                                                {{-- </a> --}}
                                                <a href="/admin-manage-product/del{{ $row->id }}">
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure to delete ?')">Delete</button>
                                                </a>
                                            </td>
                                        </tr>


                                        {{-- ================= Edit Product modals ================= --}}
                                        <div class="modal fade" id="editProductModal{{ $row->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form method="post"
                                                        action="{{ url('/admin-manage-product/' . $row->id) }}"
                                                        enctype="multipart/form-data">
                                                        {{-- <form method="post" enctype="multipart/form-data"> --}}
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Product</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label class="form-label">Product Name</label>
                                                                    <input type="text" name="Pname"
                                                                        class="form-control" value="{{ $row->Pname }}">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Description</label>
                                                                    <textarea name="Pdescription" rows="3" class="form-control">{{ $row->Pdescription }}</textarea>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <label class="form-label">Category</label>
                                                                    <select name="category" class="form-select">
                                                                        <option
                                                                            value="electronics"{{ $row->category == 'electronics' ? 'selected' : '' }}>
                                                                            Electronics</option>
                                                                        <option
                                                                            value="fashion"{{ $row->category == 'fashion' ? 'selected' : '' }}>
                                                                            Fashion</option>
                                                                        <option
                                                                            value="home"{{ $row->category == 'home' ? 'selected' : '' }}>
                                                                            Home & Kitchen</option>
                                                                        <option value="mobiles"
                                                                            {{ $row->category == 'mobiles' ? 'selected' : '' }}>
                                                                            Mobiles</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <label class="form-label">Brand</label>
                                                                    <input type="text" name="brand"
                                                                        class="form-control" value="{{ $row->brand }}">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">price(₹)</label>
                                                                    <input type="number" name="price"
                                                                        class="form-control" value="{{ $row->price }}">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">Old price(₹)</label>
                                                                    <input type="number" name="oprice"
                                                                        class="form-control" value="{{ $row->oprice }}">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">Stock</label>
                                                                    <input type="number" name="stock"
                                                                        class="form-control" value="{{ $row->stock }}">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">Status</label>
                                                                    <select name="status" class="form-select">
                                                                        <option
                                                                            value="active"{{ $row->status == 'active' ? 'selected' : '' }}>
                                                                            Active</option>
                                                                        <option value="draft"
                                                                            {{ $row->status == 'draft' ? 'selected' : '' }}>
                                                                            Draft</option>
                                                                        <option value="inactive"
                                                                            {{ $row->status == 'inactive' ? 'selected' : '' }}>
                                                                            Inactive</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Product Images</label>
                                                                    <input type="file" name="image"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn app-btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn app-btn-primary">Update</button>
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

    {{-- ================= Add Product modal ================= --}}
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method='post' enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="Pname" class="form-control"
                                    placeholder="e.g. Samsung Galaxy M14 5G">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="Pdescription" rows="3" class="form-control" placeholder="Short product description..."></textarea>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select">
                                    <option value="electronics">Electronics</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="home">Home & Kitchen</option>
                                    <option value="mobiles">Mobiles</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Brand</label>
                                <input type="text" name="brand" class="form-control" placeholder="e.g. Samsung">
                            </div>

                            <div class="col-6 col-md-3">
                                <label class="form-label">Selling Price (₹)</label>
                                <input type="number" name="price" class="form-control" placeholder="12499">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Old (₹)</label>
                                <input type="number" name="oprice" class="form-control" placeholder="15999">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Stock Qty</label>
                                <input type="number" name="stock" class="form-control" placeholder="34">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="active" selected>Active</option>
                                    <option value="draft">Draft</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Product Images</label>
                                <input type="file" name="image" class="form-control" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn app-btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
