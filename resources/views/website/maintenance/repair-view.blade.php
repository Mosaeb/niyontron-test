@extends('website.user-nav')

@section('body')
    <div class="col-md-9">

        <h2 class="p-1">Maintenance History</h2>
        <p class="p-1"><i class="fas fa-list"></i> List of your maintenance historyt</p>
        <div class="form-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Name</td>
                        <td>Maintenance Id</td>
                        <td>Repair Item</td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($maintenances as $maintenance)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$maintenance->name}}</td>
                            <td>{{$maintenance->id}}</td>
                            <td>{{$maintenance->repairItem}}</td>
                            <td>{{$maintenance->description}}</td>
                            <td>
                                <!-- Details Button with icon -->
                                <a href="{{route('repair-request-details',['id' => $maintenance->id])}}" class="btn btn-outline-info btn-sm">
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
