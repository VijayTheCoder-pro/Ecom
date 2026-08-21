@extends('admin.admin_layout.layout')

@section('title')
    Manage Product
@endsection

@section('content')
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <h1 class="app-page-title mb-0">Manage Products</h1>

                    <button type="button" class="btn app-btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        + Add Product
                    </button>
                </div>

                {{-- ================= QUICK STATS ================= --}}
                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Total Products</h4>
                                <div class="stats-figure">246</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">In Stock</h4>
                                <div class="stats-figure">210</div>
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
                                <div class="stats-figure">18</div>
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
                                                <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                                    data-bs-toggle="modal" data-bs-target="#editProductModal1">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>

                                        {{-- ================= Edit Product modals ================= --}}
                                        <div class="modal fade" id="editProductModal{{ $row->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Product</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label class="form-label">Product Name</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control"
                                                                        value="Samsung Galaxy M14 5G">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Description</label>
                                                                    <textarea name="description" rows="3" class="form-control">6GB RAM, 128GB Storage, 6000mAh Battery</textarea>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <label class="form-label">Category</label>
                                                                    <select name="category" class="form-select">
                                                                        <option value="electronics">Electronics</option>
                                                                        <option value="fashion">Fashion</option>
                                                                        <option value="home">Home & Kitchen</option>
                                                                        <option value="mobiles" selected>Mobiles</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <label class="form-label">Brand</label>
                                                                    <input type="text" name="brand"
                                                                        class="form-control" value="Samsung">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">MRP (₹)</label>
                                                                    <input type="number" name="mrp"
                                                                        class="form-control" value="15999">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">Selling Price (₹)</label>
                                                                    <input type="number" name="price"
                                                                        class="form-control" value="12499">
                                                                </div>
                                                                <div class="col-6 col-md-3">
                                                                    <label class="form-label">Stock Qty</label>
                                                                    <input type="number" name="stock"
                                                                        class="form-control" value="34">
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
                                                                    <input type="file" name="images[]"
                                                                        class="form-control" multiple>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn app-btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button"
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
