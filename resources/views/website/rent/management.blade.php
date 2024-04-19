@extends('website.user-nav')

@section('body')
    <style>
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card-body {
            flex: 1;
        }
        .card-footer {
            margin-top: auto;
        }
    </style>


    <div class="col-md-9">

        <h2> Rent Management</h2>
        <p class="text-dark">--------------------------------------</p>


        <div class="form-container">
            <div class="container mt-1">
                <!-- Property Title -->
                <h4 class="mb-4">Property Name</h1>
                    <!-- Search Option -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search property..." aria-label="Search property" aria-describedby="search-btn">
                        <button class="btn btn-primary" type="button" id="search-btn">Search</button>
                    </div>
                    <!-- Rent Management Section -->
                    <div class="row">
                        <!-- Rent Received Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card shadow p-2 bg-body rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Rent Received</h5>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                    <p class="card-text">Amount received: TK 750 out of TK 1000</p>
                                    <div class="card-footer">
                                        <button class="btn btn-block" style="background-color: #949ab1;">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Unpaid Expenses Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card shadow p-2 bg-body rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Unpaid Expenses</h5>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <p class="card-text">Amount due: TK 980 out of TK 1000</p>
                                    <div class="card-footer">
                                        <button class="btn btn-block" style="background-color: #949ab1;">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tenant Requests Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card shadow p-2 bg-body rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Tenant Requests</h5>
                                    <p class="card-text">Rent request <span class="badge bg-secondary">3</span></p>
                                    <p class="card-text">Maintenance request <span class="badge bg-secondary">5</span></p>
                                    <div class="card-footer">
                                        <button class="btn btn-block" style="background-color: #949ab1;">View Requests</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


    </div>
@endsection
