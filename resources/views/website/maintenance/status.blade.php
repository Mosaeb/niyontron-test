@extends('website.user-nav')

@section('body')
    <div class="col-md-9">

        <h2 class="pt-2"><i class="fa-solid fa-paint-roller"></i> Repair Request Status</h2>
        <p class="p-1"><i class="fa-solid fa-plus"></i> Status</p>
        <div class="form-container">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-center mb-4"><i class="fas fa-tools"></i> Request Status</h2>
                        <!-- Progress Bar with Circles -->
                        <div class="progress-bar1">
                            <div class="circle active">1</div>
                            <div class="connector"></div>
                            <div class="circle">2</div>
                            <div class="connector"></div>
                            <div class="circle">3</div>
                            <div class="connector"></div>
                            <div class="circle">4</div>
                        </div>
                        <!-- Status Display -->
                        <div class="status">
                            <h4 class="text-center">Repair Request Status:</h4>
                            <p class="text-center" id="request-status">Request Placed</p>
                        </div>
                        <!-- Search Form -->
                        <form class="search-form mt-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Repair Request ID" aria-label="Enter Repair Request ID" aria-describedby="button-search">
                                <button class="btn btn-primary" type="button" id="button-search">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // JavaScript
        document.getElementById('button-search').addEventListener('click', function() {
            // Get the repair request ID from the input field
            const requestId = document.querySelector('.form-control').value;

            // You can implement your logic to search for the repair request here
            // For demonstration purposes, let's just update the status to "Request Found"
            document.getElementById('request-status').textContent = "Request Found";
        });


    </script>

@endsection
