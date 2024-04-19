@extends('website.user-nav')

@section('body')

    <!-- add property form -->
    <div class="col-md-9">

        <h2>Edit Property Details</h2>
        <a class="p-1 btn btn-outline-dark btn-sm" href="{{route('property-view')}}"><i class="fas fa-backward"></i> Back to view properties</a>
        <p class="mt-4">Proceed To Edit Property</p>
        <div class="form-container">
            <form class="mb-1" action="{{route('property-update',['id' => $property->id])}}" method="post" enctype="multipart/form-data">
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
                    <div class="mb-3">
                        <label for="propertyType" class="form-label">Property Type</label>
                        <select class="form-select"  id="propertyType" name="propertyType">
                            <option>{{$property->propertyType}}</option>
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="propertyAddress" class="form-label">Property Address</label>
                                <input type="text" class="form-control" value="{{$property->propetyAddress}}" id="propertyAddress" name="propetyAddress" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="propertyCity" class="form-label">Property City</label>
                                <input type="text" class="form-control" value="{{$property->propetyCity}}" id="propertyCity" name="propetyCity" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="propertyState" class="form-label">Property State</label>
                                <input type="text" class="form-control" value="{{$property->propetyState}}" id="propertyState" name="propetyState" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="propertyZip" class="form-label">Property Zip</label>
                                <input type="text" class="form-control" value="{{$property->propetyZip}}" id="propertyZip" name="propetyZip" />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Step 2: Owner Details -->
                <div id="step2" class="section" style="display: none;">

                    <h5 class="mb-3">Step 2: Owner Details</h5>
                    <div class="mb-3">
                        <label for="ownerName" class="form-label">Owner Name</label>
                        <input type="text" class="form-control" value="{{$property->LName}}" id="ownerName" name="LName" />
                    </div>
                    <div class="mb-3">
                        <label for="ownerEmail" class="form-label">Owner Email</label>
                        <input type="email" class="form-control" value="{{$property->Lmail}}" id="ownerEmail" name="Lmail"/>
                    </div>
                    <div class="mb-3">
                        <label for="ownerPhone" class="form-label">Owner Phone Number</label>
                        <input type="tel" class="form-control" value="{{$property->Lnumber}}" id="ownerPhone" name="Lnumber" />
                    </div>
                </div>

                <!-- Step 3: Additional Details -->
                <div id="step3" class="section" style="display: none;">

                    <h5 class="mb-3">Step 3: Additional Details</h5>
                    <div class="mb-3">
                        <label for="additionalDetails" class="form-label">Additional Details</label>
                        <textarea class="form-control" id="additionalDetails" rows="3" name="details">{{$property->details}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="propertyImages" class="form-label">Upload Property Images</label>
                        <input type="file" class="form-control" id="propertyImages" name="propertyImages" multiple /> <!-- Allow uploads -->
                        <img src="{{asset($property->propertyImages)}}" alt="" height="100" width="120"/>
                    </div>
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
