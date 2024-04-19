@extends('website.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2 class="text-dark ms-5 font">Sign in Your Account</h2>
                <p class="text-dark fst-italic">Please enter your correct email address/ mobile number and password </p>
                <p class="text-danger text-center"> {{session('message')}}</p>
                <form action=" {{route('customer-loginCheck')}}" method="post">
                    @csrf
                    <input type="text" name="user_name" class="form-control border-dark border-3 rounded-3 w-75 mt-5 placeholder text-dark fw-bold" placeholder="Enter your email address or mobile number">
                    <input type="password" name="password" class="form-control border-dark border-3 rounded-3 w-75 mt-5 placeholder text-dark fw-bold" placeholder="Enter your password">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <input type="checkbox" class="form-check-input width-auto" style="background-color: rgba(139,136, 238, 1)" id="">
                            <label class="form-check-label ms-2 text-dark fst-italic">Keep me logged in</label>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a class="fw-bolder" href="" style="color: rgba(139,136, 238, 1)" >Forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn w-75  mt-5 border-dark border-3 rounded rounded-3 text-white fw-bolder " style="background-color: rgba(139, 136, 238, 1);font-size: 25px;">Sign In</button>
                </form>
                <p class="text-dark fst-italic">Don't have an account?<a href="" class="ms-1 fw-bolder" style="color: rgba(139,136, 238, 1)">Sign up</a></p>
                <hr class="mt-5">
                <p class="mt-3 line" style="margin-left: 190px"> or continue with</p>
                <div class="row mt-5">
                    <div class="col-md-3 mb-sm-3">
                        <a class="btn rounded-3 text-dark border-dark border-2 w-auto h-auto" style=" font-size: 20px;" href=""><i class="fa-brands fa-google fa-lg "></i> </a>
                    </div>
                    <div class="col-md-3 mb-sm-3">
                        <a class="btn rounded-3 text-dark border-dark border-2 w-auto h-auto" style=" font-size: 20px;" href=""><i class="fa-brands fa-facebook fa-lg "></i> </a>
                    </div>
                    <div class="col-md-3 mb-sm-3">
                        <a class="btn rounded-3 text-dark border-dark border-2 w-auto h-auto" style=" font-size: 20px;" href=""><i class="fa-brands fa-twitter fa-lg "></i> </a>
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-3">
                        <a class="btn rounded-3 text-dark border-dark border-2 w-auto h-auto" style=" font-size: 20px;" href=""><i class="fa-solid fa-phone fa-lg"></i> </a>
                    </div>
                </div>
            </div>



            <div class="col-md-6">
                <img src="{{asset('/')}}website/assets//img/login.jpg" alt="login pic" class="" style="width:796px;height:796px;border-radius:30px 1px 1px 30px">
            </div>
        </div>
    </div>
@endsection
