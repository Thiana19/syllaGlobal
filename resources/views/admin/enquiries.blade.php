<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Enquiries - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .enquiry-card {
            border-left: 4px solid #0a2642;
            transition: all 0.3s ease;
        }
        .enquiry-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .status-badge {
            font-size: 0.8rem;
        }
        .header-section {
            background: linear-gradient(135deg, #0a2642 0%, #1e3a5f 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .btn-custom {
            background-color: #0a2642;
            border-color: #0a2642;
            color: white;
        }
        .btn-custom:hover {
            background-color: #1e3a5f;
            border-color: #1e3a5f;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="mb-0"><i class="fas fa-envelope-open-text me-3"></i>Enquiries Management</h1>
                    <p class="mb-0 mt-2">Manage and respond to customer enquiries</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="me-3">
                            <small>Total Enquiries</small>
                            <h3 class="mb-0">{{ $enquiries->total() }}</h3>
                        </div>
                        <a href="{{ route('home') }}" class="btn btn-outline-light">
                            <i class="fas fa-home me-2"></i>Back to Site
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Filters -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-filter me-2"></i>Filter Enquiries
                        </h5>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-2">
                            <select class="form-select form-select-sm" id="statusFilter">
                                <option value="">All Status</option>
                                <option value="No">Pending Reply</option>
                                <option value="Yes">Replied</option>
                            </select>
                            <button class="btn btn-custom btn-sm" onclick="filterEnquiries()">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enquiries List -->
        @if($enquiries->count() > 0)
            <div class="row" id="enquiriesList">
                @foreach($enquiries as $enquiry)
                    <div class="col-12 mb-4 enquiry-item" data-status="{{ $enquiry->replied }}">
                        <div class="card enquiry-card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">
                                        <i class="fas fa-user me-2"></i>{{ $enquiry->name }}
                                    </h6>
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>{{ $enquiry->created_at->format('M d, Y - h:i A') }}
                                    </small>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge {{ $enquiry->replied == 'Yes' ? 'bg-success' : 'bg-warning' }} status-badge">
                                        {{ $enquiry->replied == 'Yes' ? 'Replied' : 'Pending' }}
                                    </span>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form method="POST" action="{{ route('enquiries.update-reply', $enquiry) }}" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="replied" value="{{ $enquiry->replied == 'Yes' ? 'No' : 'Yes' }}">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-{{ $enquiry->replied == 'Yes' ? 'undo' : 'check' }} me-2"></i>
                                                        Mark as {{ $enquiry->replied == 'Yes' ? 'Pending' : 'Replied' }}
                                                    </button>
                                                </form>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form method="POST" action="{{ route('enquiries.destroy', $enquiry) }}" class="d-inline" 
                                                      onsubmit="return confirm('Are you sure you want to delete this enquiry?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fas fa-trash me-2"></i>Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <p class="mb-2">
                                                <i class="fas fa-envelope text-primary me-2"></i>
                                                <a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a>
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-phone text-success me-2"></i>
                                                <a href="tel:{{ $enquiry->phone }}">{{ $enquiry->phone }}</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="message-content">
                                            <h6 class="text-muted mb-2">Message:</h6>
                                            <p class="mb-0">{{ $enquiry->message }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $enquiries->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No enquiries found</h4>
                <p class="text-muted">When customers submit enquiries, they will appear here.</p>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterEnquiries() {
            const statusFilter = document.getElementById('statusFilter').value;
            const enquiryItems = document.querySelectorAll('.enquiry-item');
            
            enquiryItems.forEach(item => {
                const itemStatus = item.getAttribute('data-status');
                
                if (statusFilter === '' || statusFilter === itemStatus) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
</body>
</html>