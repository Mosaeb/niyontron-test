@extends('website.master')

@section('body')
    <div class="container col-sm-12">
        <h2 class="text-dark text-center mt-5">Create An Account</h2>
        <p class="text-dark text-center fst-italic">Please enter your account information for create account</p>

        <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="col-md-8 col-sm-12  ms-auto ms-sm-auto">
                <label for="" class="form-label mx-auto text-dark">Register as <span class="text-danger">*</span> </label>
                <div class="col-md-12 col-sm-12 mt-1 h-25">
                    <select class="border-dark px-5 w-60 border-3 rounded rounded-3" name="user_name" style="background-color: rgba(198, 197, 247, 1)"  aria-label="" required>
                        <option value="Landlord">Landlord</option>
                        <option value="Tenant">Tenant</option>
                        <option value="Service provider">Service provider</option>
                    </select>
                </div>
            </div>

            <div class="col-md-8  col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">First Name<span class="text-danger">*</span> </label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your first name" name="fname" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Last Name<span class="text-danger">*</span> </label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your last name" name="lname" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Email</label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your email" name="email"/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Mobile Number <span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="number" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your mobile number" name="mobile" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">House/Apartment No<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Your house/apartment number" name="house_no"required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Road No<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Your road number" name="road_no" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">City<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1 h-25">
                    <select class="border-dark px-5 w-60 border-3 rounded rounded-3" name="city" style="background-color: rgba(198, 197, 247, 1)"  aria-label="" required>
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="barisal">Barisal</option>
                        <option value="sylhet">Sylhet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">State<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your state" name="state" required/>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Road No<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <select class="border-dark px-5 w-60 border-3 rounded rounded-3" name="country" style="background-color: rgba(198, 197, 247, 1)"  aria-label="" required>
                        <option value="bangladesh">Bangladesh</option>
                    </select>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Zip / Postal code<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="text" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your zip / postal code" name="zip_code" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Date of Birth<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="date" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your date of birth" name="date_of_birth" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Gender</label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <select class="border-dark px-5 w-60 border-3 rounded rounded-3" name="gender" style="background-color: rgba(198, 197, 247, 1)"  aria-label="" >
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">National Identity Card<span class="text-danger">*</span></label>
                <small class="form-text text-muted">Accepted formats: JPG, JPEG, PNG</small>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="file" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark "  style="background-color: rgba(198, 197, 247, 1)" placeholder="NID photo upload" name="image" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1">
                <label for="" class="form-label mx-auto text-center text-dark mt-1">Password<span class="text-danger">*</span></label>
                <div class="col-md-12 col-sm-12 mt-1">
                    <input type="password" class="form-control border-dark border-3 px-5 w-60 h-25 rounded rounded-3 text-dark " style="background-color: rgba(198, 197, 247, 1)" placeholder="Enter your password" name="password" required/>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 ms-auto ms-sm-auto mt-1 mb-5">
                <label for="" class="form-label mx-auto text-center text-dark mt-1"></label>
                <div class="col-md-12 col-sm-12 mt-1 ms-5">
                    <button type="submit" class="btn  w-50 h-25 border-dark border-3 rounded rounded-3 text-white fw-bolder " style="background-color: rgba(139, 136, 238, 1);font-size: 25px">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
@endsection

