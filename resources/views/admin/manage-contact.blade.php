@extends('admin.admin_layout.layout')

@section('title', 'Manage Contact')

@section('content')


    <div class="app-wrapper">


        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row mb-4">
                    <div class="col-md-12">
                        <h2 class="fw-bold">Manage Contacts</h2>
                        <p class="text-muted">View and manage all contact inquiries.</p>
                    </div>
                </div>

                <!-- Summary Cards -->
                <div class="row mb-4">

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <h6 class="text-muted">Total Contacts</h6>
                                <h2 class="fw-bold">{{ count($data) }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <h6 class="text-muted">New</h6>
                                <h2 class="text-success fw-bold">42</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <h6 class="text-muted">Pending</h6>
                                <h2 class="text-warning fw-bold">30</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <h6 class="text-muted">Closed</h6>
                                <h2 class="text-danger fw-bold">53</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card shadow border-0 rounded-3">

                    <div class="card-header bg-white">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search Contact">
                            </div>

                            <div class="col-md-3">
                                @if (session('del'))
                                    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">

                                        <div id="liveToast" class="toast show border-0" role="alert"
                                            style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(220,53,69,0.35), 0 4px 10px rgba(0,0,0,0.1);
                       background: linear-gradient(135deg, #ff5f6d 0%, #dc3545 100%); min-width: 220px;">

                                            <div class="d-flex align-items-center px-3 py-2">

                                                <!-- Icon -->
                                                <div class="d-flex align-items-center justify-content-center rounded-circle me-3"
                                                    style="width: 38px; height: 38px; flex-shrink: 0; background: rgba(255,255,255,0.2);">
                                                    <svg width="20" height="20" fill="none" stroke="#fff"
                                                        stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <div class="text-white fw-semibold" style="font-size: 0.95rem;">Deleted
                                                    </div>
                                                    <div class="text-white-50" style="font-size: 0.85rem;">
                                                        {{ session('del') }}
                                                    </div>
                                                </div>

                                                <button type="button" class="btn-close btn-close-white ms-2"
                                                    data-bs-dismiss="toast" style="opacity: 0.85;">
                                                </button>

                                            </div>

                                            <!-- Progress bar -->
                                            <div style="height: 4px; background: rgba(255,255,255,0.25);">
                                                <div id="toastProgress"
                                                    style="height: 100%; width: 100%; background: rgba(255,255,255,0.85);">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                @endif

                                <style>
                                    #liveToast {
                                        animation: slideInToast 0.4s cubic-bezier(0.22, 1, 0.36, 1);
                                    }

                                    @keyframes slideInToast {
                                        from {
                                            opacity: 0;
                                            transform: translateX(50px) scale(0.95);
                                        }

                                        to {
                                            opacity: 1;
                                            transform: translateX(0) scale(1);
                                        }
                                    }

                                    #toastProgress {
                                        animation: shrinkProgress 3s linear forwards;
                                    }

                                    @keyframes shrinkProgress {
                                        from {
                                            width: 100%;
                                        }

                                        to {
                                            width: 0%;
                                        }
                                    }
                                </style>

                                <script>
                                    setTimeout(function() {
                                        let message = document.getElementById('liveToast');

                                        if (message) {
                                            message.style.transition = "opacity 0.4s, transform 0.4s";
                                            message.style.opacity = "0";
                                            message.style.transform = "translateX(50px) scale(0.95)";

                                            setTimeout(() => {
                                                message.remove();
                                            }, 400);
                                        }
                                    }, 3000);
                                </script>
                            </div>


                        </div>

                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-hover mb-0 align-middle">

                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->fullname }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td>{{ $row->subject }}</td>
                                            <td><span class="badge bg-success">New</span></td>
                                            <td>{{ $row->created_at->format('d-m-y') }}</td>
                                            <td>
                                                <a href="/admin-manage-contact/delete/{{ $row->id }}">
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure to delete ?')">
                                                        Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>

                            </table>

                        </div>
                        
                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between align-items-center">

                        <small>Showing 1 to 5 of 125 entries</small>

                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>

                    </div>

                </div>

            </div><!--//container-xl-->
        </div><!--//app-content-->

    </div><!--//app-wrapper-->

@endsection
