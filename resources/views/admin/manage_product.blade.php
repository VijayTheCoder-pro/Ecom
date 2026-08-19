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
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="https://via.placeholder.com/50" alt="product"
                                                width="45" height="45" style="object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td class="fw-medium">Samsung Galaxy M14 5G</td>
                                        <td>Mobiles</td>
                                        <td>
                                            <span class="fw-semibold">₹12,499</span>
                                            <span class="text-muted text-decoration-line-through ms-1" style="font-size: 0.8rem;">₹15,999</span>
                                        </td>
                                        <td>34</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                                data-bs-toggle="modal" data-bs-target="#editProductModal1">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="https://via.placeholder.com/50" alt="product"
                                                width="45" height="45" style="object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td class="fw-medium">Boat Rockerz 450 Headphones</td>
                                        <td>Electronics</td>
                                        <td>
                                            <span class="fw-semibold">₹1,299</span>
                                            <span class="text-muted text-decoration-line-through ms-1" style="font-size: 0.8rem;">₹3,490</span>
                                        </td>
                                        <td>0</td>
                                        <td><span class="badge bg-danger">Out of Stock</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                                data-bs-toggle="modal" data-bs-target="#editProductModal2">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="https://via.placeholder.com/50" alt="product"
                                                width="45" height="45" style="object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td class="fw-medium">Nike Revolution 6 Running Shoes</td>
                                        <td>Fashion</td>
                                        <td>
                                            <span class="fw-semibold">₹2,999</span>
                                        </td>
                                        <td>58</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                                data-bs-toggle="modal" data-bs-target="#editProductModal3">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <img src="https://via.placeholder.com/50" alt="product"
                                                width="45" height="45" style="object-fit: cover; border-radius: 8px;">
                                        </td>
                                        <td class="fw-medium">Prestige Non-Stick Kadai 3L</td>
                                        <td>Home & Kitchen</td>
                                        <td>
                                            <span class="fw-semibold">₹899</span>
                                            <span class="text-muted text-decoration-line-through ms-1" style="font-size: 0.8rem;">₹1,250</span>
                                        </td>
                                        <td>102</td>
                                        <td><span class="badge bg-secondary">Draft</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1"
                                                data-bs-toggle="modal" data-bs-target="#editProductModal4">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
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
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="e.g. Samsung Galaxy M14 5G">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="3" class="form-control"
                                    placeholder="Short product description..."></textarea>
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
                                <label class="form-label">MRP (₹)</label>
                                <input type="number" name="mrp" class="form-control" placeholder="15999">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Selling Price (₹)</label>
                                <input type="number" name="price" class="form-control" placeholder="12499">
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
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn app-btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ================= Edit Product modals ================= --}}
    <div class="modal fade" id="editProductModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" value="Samsung Galaxy M14 5G">
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
                                <input type="text" name="brand" class="form-control" value="Samsung">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">MRP (₹)</label>
                                <input type="number" name="mrp" class="form-control" value="15999">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Selling Price (₹)</label>
                                <input type="number" name="price" class="form-control" value="12499">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Stock Qty</label>
                                <input type="number" name="stock" class="form-control" value="34">
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
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn app-btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProductModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" value="Boat Rockerz 450 Headphones">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="3" class="form-control">Wireless On-Ear Headphones with 15H Playback</textarea>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select">
                                    <option value="electronics" selected>Electronics</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="home">Home & Kitchen</option>
                                    <option value="mobiles">Mobiles</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Brand</label>
                                <input type="text" name="brand" class="form-control" value="Boat">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">MRP (₹)</label>
                                <input type="number" name="mrp" class="form-control" value="3490">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Selling Price (₹)</label>
                                <input type="number" name="price" class="form-control" value="1299">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Stock Qty</label>
                                <input type="number" name="stock" class="form-control" value="0">
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
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn app-btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProductModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" value="Nike Revolution 6 Running Shoes">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="3" class="form-control">Lightweight running shoes with breathable mesh upper</textarea>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select">
                                    <option value="electronics">Electronics</option>
                                    <option value="fashion" selected>Fashion</option>
                                    <option value="home">Home & Kitchen</option>
                                    <option value="mobiles">Mobiles</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Brand</label>
                                <input type="text" name="brand" class="form-control" value="Nike">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">MRP (₹)</label>
                                <input type="number" name="mrp" class="form-control" value="2999">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Selling Price (₹)</label>
                                <input type="number" name="price" class="form-control" value="2999">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Stock Qty</label>
                                <input type="number" name="stock" class="form-control" value="58">
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
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn app-btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProductModal4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" value="Prestige Non-Stick Kadai 3L">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="3" class="form-control">Non-stick kadai, induction compatible</textarea>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select">
                                    <option value="electronics">Electronics</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="home" selected>Home & Kitchen</option>
                                    <option value="mobiles">Mobiles</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Brand</label>
                                <input type="text" name="brand" class="form-control" value="Prestige">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">MRP (₹)</label>
                                <input type="number" name="mrp" class="form-control" value="1250">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Selling Price (₹)</label>
                                <input type="number" name="price" class="form-control" value="899">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Stock Qty</label>
                                <input type="number" name="stock" class="form-control" value="102">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="draft" selected>Draft</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Product Images</label>
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn app-btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection