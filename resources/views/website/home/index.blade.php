@extends('website.master')

@section('body')



    <!--============== Slider HTML markup Section Start ==============-->
    <div class="full-row overflow-hidden p-0">
        <div id="image-slider-2" style="width:1200px; height:800px;">

            <!-- Slide 1-->
            <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{asset('/')}}website/assets/images/slider/01.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.5rem; line-height:76px; color:#ffffff; top:320px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">House for your family</p>
                <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.5rem; line-height:20px; top:290px; left:50px;" class="ls-l text-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">Dream</p>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:370px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">Best featured family appartment this month</p>
                <div style="top:440px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:350px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:430px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;"><i class="fas fa-map-marker-alt text-primary"></i> 1744 Daylene Drive Newport MI 48166, Australia</p>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:470px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">$ 12500.00 / Monthly</p>
                <a class="ls-l" href="#" target="-self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallaxlevel:0;">
                    <p style="font-weight:500; text-align:center;cursor:pointer; padding-top:8px; padding-bottom:7px; font-family:'Varela Round', sans-serif; font-size:15px; top:560px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:2px; font-weight:500; text-align:center; cursor:pointer;"
                       class="ls-button">View Details</p>
                </a>
                <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Varela Round', sans-serif; font-size:15px; color:#ffffff; border-radius:3px; top:490px; left:260px; background-color: rgba(95, 98, 139, 1)" class="ls-l" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">For Rent</div>
            </div>

            <!-- Slide 2-->
            <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{asset('/')}}website/assets/images/slider/01.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.5rem; line-height:76px; color:#ffffff; top:320px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">House for your family</p>
                <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.5rem; line-height:20px; top:290px; left:50px;" class="ls-l text-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">Dream</p>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:370px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">Best featured family appartment this month</p>
                <div style="top:440px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:350px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:430px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;"><i class="fas fa-map-marker-alt text-primary"></i> 1744 Daylene Drive Newport MI 48166, Australia</p>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:470px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">$ 12500.00 / Monthly</p>
                <a class="ls-l" href="#" target="-self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallaxlevel:0;">
                    <p style="font-weight:500; text-align:center;cursor:pointer; padding-top:8px; padding-bottom:7px; font-family:'Varela Round', sans-serif; font-size:15px; top:560px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:2px; font-weight:500; text-align:center;cursor:pointer;"
                       class="ls-button">View Details</p>
                </a>
                <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Varela Round', sans-serif; font-size:15px; color:#ffffff; border-radius:3px; top:490px; left:260px; background-color: rgba(95, 98, 139, 1)" class="ls-l" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">For Rent</div>
            </div>

            <!-- Slide 3-->
            <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{asset('/')}}website/assets/images/slider/01.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.5rem; line-height:76px; color:#ffffff; top:320px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">House for your family</p>
                <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.5rem; line-height:20px; top:290px; left:50px;" class="ls-l text-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">Dream</p>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:370px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">Best featured family appartment this month</p>
                <div style="top:440px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:350px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:430px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;"><i class="fas fa-map-marker-alt text-primary"></i> 1744 Daylene Drive Newport MI 48166, Australia</p>
                <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:470px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">$ 12500.00 / Monthly</p>
                <a class="ls-l" href="#" target="-self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallaxlevel:0;">
                    <p style="font-weight:500; text-align:center;cursor:pointer; padding-top:8px; padding-bottom:7px; font-family:'Varela Round', sans-serif; font-size:15px; top:560px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:2px; font-weight:500; text-align:center;cursor:pointer;"
                       class="ls-button">View Details</p>
                </a>
                <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Varela Round', sans-serif; font-size:15px; color:#ffffff; border-radius:3px; top:490px; left:260px;background-color: rgba(95, 98, 139, 1)" class="ls-l" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">For Rent</div>
            </div>
        </div>
    </div>
    <!--============== Slider HTML markup Section End ==============-->

    <!--============== Property Search Form One Section Start ==============-->
    <div class="full-row py-5 bg-gray">
        <div class="container">
            <form class="font-12 formicon text-ordinary" method="post" action="">
                <div class="row g-3">
                    <div class="col-md-4 col-lg-2">
                        <div class="select-arrow">
                            <select class="form-control form-select bg-white border">
                                <option>Any Status</option>
                                <option>For Rent</option>
                                <option>For Sale</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-7">
                        <input type="text" class="form-control" id="validationDefault03" placeholder="Enter Address, Street and City or Enter State, Zip code" required>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <button type="submit" class="btn text-white w-100" style="background-color: rgba(95, 98, 139, 1)">Search Property</button>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="select-arrow">
                            <select class="form-control form-select bg-white border">
                                <option>Any Type</option>
                                <option>Appartment</option>
                                <option>Condose</option>
                                <option>Land</option>
                                <option>Commercial</option>
                                <option>Villah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <input type="text" class="form-control" id="validationDefault04" placeholder="Min Area (sqft)" required>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Max Area (sqft)" required>
                    </div>
                    <div class="col-md-8 col-lg-4">
                        <div class="price-range">
                            <div class="price-filter">
                                    <span class="price-slider">
                                        <input class="filter-price" type="text" name="price" value="100000;900000" />
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-inline-block text-ordinary hover-text-primary formicon mt-4">
                            <a class="checkbox-collapse" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">More Option</a>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="collapse" id="multiCollapseExample1">
                                    <div class="card card-body bg-gray px-0 border-0">
                                        <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <ul class="check-submit">
                                                    <li>
                                                        <input id="feature-1" class="d-none" type="checkbox">
                                                        <label for="feature-1">Parking Garage</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-2" class="d-none" type="checkbox">
                                                        <label for="feature-2">Security System</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-3" class="d-none" type="checkbox">
                                                        <label for="feature-3">Window Covering</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul class="check-submit">
                                                    <li>
                                                        <input id="feature-4" class="d-none" type="checkbox">
                                                        <label for="feature-4">Swiming Pool</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-5" class="d-none" type="checkbox">
                                                        <label for="feature-5">Air Condition</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-8" class="d-none" type="checkbox">
                                                        <label for="feature-8">Fire Protection</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul class="check-submit">
                                                    <li>
                                                        <input id="feature-9" class="d-none" type="checkbox">
                                                        <label for="feature-9">Garden</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-10" class="d-none" type="checkbox">
                                                        <label for="feature-10">Fire Place</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-11" class="d-none" type="checkbox">
                                                        <label for="feature-11">Emeargency Exit</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul class="check-submit">
                                                    <li>
                                                        <input id="feature-12" class="d-none" type="checkbox">
                                                        <label for="feature-12">Home Theater</label>
                                                    </li>
                                                    <li>
                                                        <input id="feature-13" class="d-none" type="checkbox">
                                                        <label for="feature-13">Gym & Sports</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--============== Property Search Form One Section End ==============-->

    <!--============== Featured Properties Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center">Popular Properties</h2>
                    <span class="text-center mt-4 d-block mb-5">All of our popular property of this month are include </span>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel carousel-main">
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/01.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>2500</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>

                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/02.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>2200</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/03.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>3400</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/01.jpg" alt="">
                                    <div class="featured bg-primary text-white">Featured</div>
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>2500</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                            <li><a href="#">+More</a></li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="owl-carousel carousel-main">
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/01.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>2500</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>

                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/02.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>2200</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/03.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>3400</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/01.jpg" alt="">
                                    <div class="featured bg-primary text-white">Featured</div>
                                    <div class="sale bg-secondary text-white">For Sale</div>
                                    <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="bg-gray quantity px-4 pt-4">
                                        <ul>
                                            <li><span>2500</span> Sqft</li>
                                            <li><span>2</span> Beds</li>
                                            <li><span>3</span> Rooms</li>
                                            <li><span>3</span> Baths</li>
                                            <li><span>1</span> Garage</li>
                                            <li><a href="#">+More</a></li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-3 d-flex justify-content-between w-100">
                                        <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============== Featured Properties Section End ==============-->

    <!--============== Text Block One Section Start ==============-->
    <div class="full-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center">What We Do</h2>
                    <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> </div>
            </div>
            <div class="text-box-one">
                <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded"> <i class="flaticon-rent flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Property Maintainance</a></h5>
                            <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded"> <i class="flaticon-for-rent flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Rental Service</a></h5>
                            <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded"> <i class="flaticon-list flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Property Listing</a></h5>
                            <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded"> <i class="flaticon-heart flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Services</a></h5>
                            <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-auto"> <a  class="btn text-white"  style="background-color: rgba(95, 98, 139, 1)"  href="services.html">More Services</a> </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Text Block One Section End ==============-->

    <!--============== Happy Living Section Start ==============-->
    <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('{{asset('/')}}website/assets/images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="living-list pe-4">
                        <h3 class="pb-4 mb-3 text-white">Make life for happy living</h3>
                        <ul>
                            <li class="mb-4 text-white d-flex">
                                <i class="flaticon-reward flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                <div class="ps-2">
                                    <h5 class="mb-3">Experience Quality</h5>
                                    <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                </div>
                            </li>
                            <li class="mb-4 text-white d-flex">
                                <i class="flaticon-real-estate flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                <div class="ps-2">
                                    <h5 class="mb-3">Experience Quality</h5>
                                    <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                </div>
                            </li>
                            <li class="mb-4 text-white d-flex">
                                <i class="flaticon-seller flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                <div class="ps-2">
                                    <h5 class="mb-3">Experience Quality</h5>
                                    <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Happy Living Section End ==============-->

    <!--============== How It Work Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center">How It Works</h2>
                    <span class="text-center mt-4 d-block mb-5">Process to get your right one, almost easy, flexible and fun.</span>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="p-5 mb-4 bg-white shadow-one rounded">
                        <i class="flaticon-home flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary py-2 mt-3 mb-2">Search Your Home</h5>
                        <p>Select your home or appartment and let’s contact with us. Ask what answer you need. You can also contact with the agent if you have any question.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5 mb-4 bg-white shadow-one rounded">
                        <i class="flaticon-contact flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary py-2 mt-3 mb-2">Let's Contact With Us</h5>
                        <p>Select your home or appartment and let’s contact with us. Ask what answer you need. You can also contact with the agent if you have any question.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5 mb-4 bg-white shadow-one rounded">
                        <i class="flaticon-payment flat-medium text-primary" aria-hidden="true"></i>
                        <h5 class="text-secondary py-2 mt-3 mb-2">Make a Deal and Payment</h5>
                        <p>Sign upi online and move in as soon as you ready! We complete your property deal in our office. After the deal you can pay the instalment or rent in online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== How It Work Section End ==============-->

    <!--============== Popular Place Section Start ==============-->
    <div class="full-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center">Popular Places</h2>
                    <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-0">
                <div class="col">
                    <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9"> <img src="{{asset('/')}}website/assets/images/thumbnail4/1.jpg" alt="">
                        <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                            <h4 class="hover-text-primary"><a href="#">Dkaha</a></h4>
                            <span>31 Properties Listed</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9"> <img src="{{asset('/')}}website/assets/images/thumbnail4/2.jpg" alt="">
                        <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                            <h4 class="hover-text-primary"><a href="#">Chattagram</a></h4>
                            <span>12 Properties Listed</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9"> <img src="{{asset('/')}}website/assets/images/thumbnail4/3.jpg" alt="">
                        <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                            <h4 class="hover-text-primary"><a href="#">Rajshahi</a></h4>
                            <span>17 Properties Listed</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9"> <img src="{{asset('/')}}website/assets/images/thumbnail4/4.jpg" alt="">
                        <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                            <h4 class="hover-text-primary"><a href="#">Khulna</a></h4>
                            <span>25 Properties Listed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Popular Place Section End ==============-->

    <!--============== Blog Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-secondary double-down-line text-center">Recent Articles</h2>
                    <span class="text-center mt-4 d-block mb-5">The most recent posted articles and valuable tips.</span> </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="hover-zoomer thumb-two shadow-one">
                        <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/blog/01.jpg" alt="image">
                            <div class="date text-white position-absolute z-index-9">November 26, 2018</div>
                        </div>
                        <div class="p-4">
                            <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Our team are working to provide the owneship of property.</a></h6>
                            <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                            <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="hover-zoomer thumb-two shadow-one">
                        <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/blog/02.jpg" alt="image">
                            <div class="date text-white position-absolute z-index-9">November 10, 2018</div>
                        </div>
                        <div class="p-4">
                            <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Your investment is our heart, so you can stay in relax.</a></h6>
                            <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                            <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="hover-zoomer thumb-two shadow-one">
                        <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/blog/03.jpg" alt="image">
                            <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                        </div>
                        <div class="p-4">
                            <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family house planing.</a></h6>
                            <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                            <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Blog Section End ==============-->

    <!--============== Massage Box One Section Start ==============-->
    <div class="full-row py-5"  style="background-color: rgba(95, 98, 139, 1)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-white text-center line-height-50" >How to Become Easy and Flexible to Living in Dhaka. Get A Comfortable Appartment in Budget.</h3>
                </div>
            </div>
        </div>
    </div>
    <!--============== Massage Box One Section End ==============-->

@endsection
