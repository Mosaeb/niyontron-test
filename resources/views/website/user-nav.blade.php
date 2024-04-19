<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Niyontron Dashboard</title>
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- other source -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- other source -->

    <style>


        .progress-bar1{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .connector {
            flex: 1;
            height: 2px;
            background-color: #f0f0f0;
        }

        .circle.active {
            background-color: #007bff;
            color: white;
        }


        /* repair request status */

    </style>

</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(62, 64, 105, 1)">
    <div class="container-fluid">
        <a class="navbar-brand mx-auto" href="{{route('property-add')}}">
            <img src="{{asset('/')}}website/assets/icon/logo.png" alt="Logo" class="logo" id="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-envelope text-white"></i> {{Session::get('customer_name')}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Notifications</a></li>
                        <li><a class="dropdown-item" href="#">Sign Out</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <button class="btn" id="addProperty" onclick="location.href=''">Add
                            Property</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar -->


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="background-color: #949ab1;">
            <!-- sidebar -->
            <div class="flex-shrink-3 p-3" style="background-color: #949ab1;">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Properties
                        </button>
                        <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium nested-items">
                                <li><a href="{{route('property-add')}}" class="link-dark rounded">Add Property</a></li>
                                <li><a href="{{route('property-view')}}" class="link-dark rounded">View Properties</a></li>
                                <li><a href="#" class="link-dark rounded">Property Reports</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- The white bar -->
                    <li class="border-top my-3"></li>

                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            My Home
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium nested-items">
                                <li><a href="#" class="link-dark rounded">My Profile</a></li>
                                <li><a href="{{route('rent-management')}}" class="link-dark rounded">Rent Management</a></li>
                                <li><a href="#" class="link-dark rounded">Review Tenant</a></li>
                                <!-- <li><a href="#" class="link-dark rounded">Annually</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- The white bar -->
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Accounts
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium nested-items">
                                <li><a href="#" class="link-dark rounded">Billing</a></li>
                                <li><a href="#" class="link-dark rounded">Accounting Report</a></li>
                                <!-- <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                <li><a href="#" class="link-dark rounded">Returned</a></li> -->
                            </ul>
                        </div>
                    </li>

                    <!-- The white bar -->

                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Maintenance
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium nested-items"> <!-- Added custom class 'nested-items' -->
                                <li><a href="{{route('repair-request')}}" class="link-dark rounded">Send Repair Request</a></li>
                                <li><a href="{{route('repair-request-status')}}" class="link-dark rounded">Status of Request</a></li>
                                <li><a href="{{route('repair-request-view')}}" class="link-dark rounded">Maintenance History</a></li>
                                <!-- <li><a href="#" class="link-dark rounded">Sign out</a></li> -->
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <!-- sidebar -->
@yield('body')
<!-- other source -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script> -->
<!-- other source -->

<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}website/assets/js/script.js"></script>
</body>
</html>
