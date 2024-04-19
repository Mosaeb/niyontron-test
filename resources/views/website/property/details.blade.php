@extends('website.user-nav')

@section('body')
    <div class="col-md-9">

        <h2 class="p-1">View Property</h2>
        <a class="p-1 btn btn-outline-dark btn-sm" href="{{route('property-view')}}"><i class="fas fa-backward"></i> Back to view properties</a>
        <p class="p-1 mt-3"><i class="fas fa-list"></i> Deatils informatiom of your Property/Apartment</p>
        <div class="form-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>Property ID</th>
                        <td>{{$property->id}}</td>
                    </tr>
                    <tr>
                        <th>Property Type</th>
                        <td>{{$property->propertyType}}</td>
                    </tr>
                    <tr>
                        <th>Property Address</th>
                        <td>{{$property->propetyAddress}}</td>
                    </tr>
                    <tr>
                        <th>City </th>
                        <td>{{$property->propetyCity}}</td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td>{{$property->propetyState}}</td>
                    </tr>
                    <tr>
                        <th>Zip Code</th>
                        <td>{{$property->propetyZip}}</td>
                    </tr>
                    <tr>
                        <th>Ownner Name</th>
                        <td>{{$property->LName}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$property->Lmail}}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{$property->Lnumber}}</td>
                    </tr>
                    <tr>
                        <th>Property Deatils</th>
                        <td>{{$property->details}}</td>
                    </tr>
                    <tr>
                        <th>Property Image</th>
                        <td><img src="{{asset($property->propertyImages)}}" alt="" height="100" width="120"/></td>
                    </tr>
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
