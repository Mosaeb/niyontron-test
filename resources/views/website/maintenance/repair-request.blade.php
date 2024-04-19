@extends('website.user-nav')

@section('body')

    <!-- add property form -->
    <div class="col-md-9">

        <h2 class="pt-2"><i class="fa-solid fa-paint-roller"></i> Repair Request</h2>
        <p class="p-1"><i class="fa-solid fa-plus"></i>  Fill Up Repair Request Form</p>
        <br>
        <p class="text-muted">{{session('message')}}</p>
        <div class="form-container">
            <form class="mb-1" action="{{route('repair-request-create')}}" method="post" enctype="multipart/form-data">

            @csrf
            <!-- progressbar -->
                <div class="progress mb-3">
                    <div class="progress-bar" id="progressBar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- Step 1: Property Details -->
                <div id="step1" class="section">

                    <h5 class="mb-3">Step 1: Property Details</h5>
                    <p class="text-muted">{{session('message')}}</p>
                    <br/>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone">Phone:</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Step 2: Owner Details -->
                <div id="step2" class="section" style="display: none;">

                    <h5 class="mb-3">Step 2: </h5>
                    <label for="item">Item to be repair:</label>
                    <input type="text" id="item" name="repairItem" class="form-control mb-3" required>
                    <label for="description">Description of the issue:</label>
                    <textarea id="description" name="description" class="form-control slim-textarea" rows="1" required></textarea><br>
                </div>

                <!-- Step 3: Additional Details -->
                <div id="step3" class="section" style="display: none;">

                    <h5 class="mb-3">Step 3: Additional Details</h5>
                    <label for="urgency">Urgency level:</label>
                    <select id="urgency" name="urgency" class="form-control mb-3" required>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                    <label for="comment">Additional comment:</label>
                    <textarea id="comment" name="comment" class="form-control slim-textarea" rows="1"></textarea><br>
                </div>
                <div id="buttons" class="mb-3">
                    <button type="button" class="btn btn-primary" id="prevStep" style="background-color:#949ab1">Previous</button>
                    <button type="button" class="btn btn-primary" id="nextStep" style="background-color:#949ab1">Next</button>
                    <button type="submit" class="btn btn-primary" id="" style="background-color:#949ab1">Submit</button>
                </div>
            </form>
        </div>


        <!-- End Multi step form -->
    </div>
    </div>
    </div>
    <!-- add property form -->
@endsection
