@extends('website.user-nav')

@section('body')
    <div class="col-md-9">

        <h2 class="p-1">View Property</h2>
        <p class="p-1"><i class="fas fa-list"></i> List of your Property/Apartment</p>
        <br><br>
        <p class="text-muted">{{session('message')}}</p>
        <div class="form-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Property Type</td>
                        <td>Property Address</td>
                        <td>Ownner Name</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$property->propertyType}}</td>
                        <td>{{$property->propetyAddress}}</td>
                        <td>{{$property->LName}}</td>
                        <td>
                            <!-- Edit Button with icon -->
                            <a href="{{route('property-edit',['id' => $property->id] )}}" class="btn btn-outline-dark btn-sm">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <!-- Delete Button with icon -->
                            <a href="{{route('property-delete', ['id' => $property->id])}}" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                            <!-- Details Button with icon -->
                            <a href="{{route('property-details', ['id' => $property->id])}}" class="btn btn-outline-info btn-sm">
                                <i class="bi bi-info-circle-fill"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div id="property-details" class="mt-3">
                <!-- Property details content will be loaded here dynamically -->
                <!-- Add a button or link to go back to the table -->
                <!-- <button id="back-to-table" class="btn btn-primary">Back to Table</button> -->
            </div>
        </div>
    </div>
    <!-- Add this script tag at the end of your HTML body -->
    <script>
        // Get all the info buttons
        const infoButtons = document.querySelectorAll('.btn-outline-info');
        // Get the table element
        const table = document.querySelector('.table');
        // Get the property details container
        const propertyDetailsContainer = document.getElementById('property-details');

        // Function to handle click event on info button
        function showPropertyDetails(event) {
            // Hide the table
            table.style.display = 'none';

            // Get the row of the clicked button
            const row = event.target.closest('tr');

            // Get all the data from the row
            const serial = row.cells[0].innerText;
            const propertyName = row.cells[1].innerText;
            const location = row.cells[2].innerText;
            const numberOfTenants = row.cells[3].innerText;

            // Simulate fetching additional property details from a server (replace with actual fetch call)
            const additionalDetails = {
                // Add more details as needed
            };

            // Generate HTML for the property details
            const detailsHTML = `
            <div>
                <h3>${propertyName}</h3>
                <p>Serial: ${serial}</p>
                <p>Location: ${location}</p>
                <p>Number of Tenants: ${numberOfTenants}</p>
                <!-- Add more details here -->
            <button class="btn btn-primary" onclick="showMainTable()">Back to Main Table</button>
            </div>
            `;

        // Display the property details in the property-details div
        propertyDetailsContainer.innerHTML = detailsHTML;
    }

    // Function to show the main property table
    function showMainTable() {
        // Show the table
        table.style.display = 'table';
        // Clear the property details container
        propertyDetailsContainer.innerHTML = '';
    }

    // Attach click event listener to each info button
    infoButtons.forEach(button => {
        button.addEventListener('click', showPropertyDetails);
    });
</script>
@endsection
