@extends('admin.admin_layout.layout')

@section('title')
	Manage Report
@endsection

@section('content')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <h1 class="app-page-title mb-0">Manage Report</h1>

                    <button type="button" class="btn app-btn-primary" data-bs-toggle="modal"
                        data-bs-target="#generateReportModal">
                        + Generate Report
                    </button>
                </div>

                {{-- ================= QUICK STATS ================= --}}
                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Total Reports</h4>
                                <div class="stats-figure">18</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">This Month</h4>
                                <div class="stats-figure">4</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Pending</h4>
                                <div class="stats-figure">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Completed</h4>
                                <div class="stats-figure">16</div>
                            </div>
                        </div>
                    </div>
                </div><!--//row-->

                {{-- ================= FILTER ================= --}}
                <div class="app-card shadow-sm mb-4">
                    <div class="app-card-body p-3 p-lg-4">
                        <form class="row g-3 align-items-end">
                            <div class="col-12 col-md-3">
                                <label class="form-label">Report Type</label>
                                <select name="type" class="form-select">
                                    <option value="">All Types</option>
                                    <option value="sales">Sales Report</option>
                                    <option value="user">User Report</option>
                                    <option value="inventory">Inventory Report</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="form-label">From Date</label>
                                <input type="date" name="from" class="form-control">
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="form-label">To Date</label>
                                <input type="date" name="to" class="form-control">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="button" class="btn app-btn-secondary w-100">Filter</button>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->

                {{-- ================= REPORT TABLE ================= --}}
                <div class="app-card shadow-sm">
                    <div class="app-card-header p-3">
                        <h4 class="app-card-title mb-0">All Reports</h4>
                    </div>

                    <div class="app-card-body p-3 p-lg-4">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="meta">#</th>
                                        <th class="meta">Report Name</th>
                                        <th class="meta">Type</th>
                                        <th class="meta">Generated On</th>
                                        <th class="meta">Status</th>
                                        <th class="meta text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="fw-medium">Monthly Sales Report - July</td>
                                        <td>Sales Report</td>
                                        <td>01 Aug 2026</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1">View</button>
                                            <button type="button" class="btn btn-sm btn-primary me-1">Download</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="fw-medium">User Signup Report - July</td>
                                        <td>User Report</td>
                                        <td>29 Jul 2026</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1">View</button>
                                            <button type="button" class="btn btn-sm btn-primary me-1">Download</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="fw-medium">Inventory Stock Report</td>
                                        <td>Inventory Report</td>
                                        <td>25 Jul 2026</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1" disabled>View</button>
                                            <button type="button" class="btn btn-sm btn-primary me-1" disabled>Download</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="fw-medium">Quarterly Sales Report - Q2</td>
                                        <td>Sales Report</td>
                                        <td>10 Jul 2026</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-sm app-btn-secondary me-1">View</button>
                                            <button type="button" class="btn btn-sm btn-primary me-1">Download</button>
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

    {{-- ================= Generate Report modal ================= --}}
    <div class="modal fade" id="generateReportModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Generate New Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Report Name</label>
                            <input type="text" name="report_name" class="form-control"
                                placeholder="e.g. Monthly Sales Report - August">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Report Type</label>
                            <select name="type" class="form-select">
                                <option value="sales">Sales Report</option>
                                <option value="user">User Report</option>
                                <option value="inventory">Inventory Report</option>
                            </select>
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="form-label">From Date</label>
                                <input type="date" name="from" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label">To Date</label>
                                <input type="date" name="to" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn app-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn app-btn-primary">Generate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection