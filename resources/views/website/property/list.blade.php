@extends('website.master')

@section('body')
    <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Property Lists</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item" ><a href="index-1.html" style="color: rgba(95, 98, 139, 1)">Home</a></li>
                            <li class="breadcrumb-item active" style="color: rgba(95, 98, 139, 1)">Property Lists</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->


    <!--============== Advance Search Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Advance Search</h4>
                        <form method="post" action="">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>Any Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                            <option>For Lease</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>Any Type</option>
                                            <option>Appartment</option>
                                            <option>Condose</option>
                                            <option>Land</option>
                                            <option>Commercial</option>
                                            <option>Villah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>Location</option>
                                            <option>USA</option>
                                            <option>Australia</option>
                                            <option>Russia</option>
                                            <option>France</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>All State</option>
                                            <option>USA</option>
                                            <option>Australia</option>
                                            <option>Russia</option>
                                            <option>France</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>All City</option>
                                            <option>USA</option>
                                            <option>Australia</option>
                                            <option>Russia</option>
                                            <option>France</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>Beds</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select-arrow">
                                        <select class="form-select form-control bg-gray">
                                            <option>Baths</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>4</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pb-4 mb-5">
                                        <label class="form-label">Price Range :</label>
                                        <div class="price-range font-12 text-ordinary" >
                                            <div class="price-filter" > <span class="price-slider" >
                                                    <input class="filter-price"  type="text" name="price" value="100000;900000" />
                                                    </span> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div  class="d-inline-block text-ordinary hover-text-primary formicon"> <a class="checkbox-collapse"  data-bs-toggle="collapse"  href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Additional Features</a> </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse" id="multiCollapseExample1">
                                                <div class="card card-body px-0 border-0">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <ul class="check-submit">
                                                                <li>
                                                                    <input id="feature-1" class="d-none" type="checkbox">
                                                                    <label for="feature-1">Parking Garage</label>
                                                                </li>
                                                                <li>
                                                                    <input id="feature-2" class="d-none" type="checkbox">
                                                                    <label for="feature-2">Security System</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <ul class="check-submit">
                                                                <li>
                                                                    <input id="feature-11" class="d-none" type="checkbox">
                                                                    <label for="feature-11">Emeargency Exit</label>
                                                                </li>
                                                                <li>
                                                                    <input id="feature-8" class="d-none" type="checkbox">
                                                                    <label for="feature-8">Fire Protection</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <button type="submit" class="btn rounded-3 mt-4 text-white" style="background-color: rgba(95, 98, 139, 1)">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn  w-100 rounded-3 text-white" style="background-color: rgba(95, 98, 139, 1)">Search Property</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pb-4 mt-md-50">
                                <div class="row">
                                    <div class="col-md-9">
                                        <form class="selecting-command d-flex flex-wrap" method="get">
                                            <label class="me-10">Shorts By :</label>
                                            <div class="select-arrow me-30">
                                                <select class="form-control form-select bg-gray">
                                                    <option>Newest First</option>
                                                    <option>Oldest First</option>
                                                    <option>Top Rated</option>
                                                    <option>Most Popular</option>
                                                </select>
                                            </div>
                                            <label>1-10 of 25 results</label>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="view-category">
                                            <a href="property-grid-sidebar-left.html"  style="background-color: rgba(95, 98, 139, 1)" title="Grid" class="active"><i class="fas fa-th-large" ></i></a>
                                            <a href="property-list-sidebar-left.html" style="background-color: rgba(95, 98, 139, 1)" title="List"><i class="fas fa-th-list" ></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <div class="featured-thumb hover-zoomer">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/01.jpg" alt="">
                                    <div class="featured text-white" style="background-color: rgba(95, 98, 139, 1)">New</div>
                                    <div class="sale bg-secondary text-white">For Rent</div>
                                    <div class="price text-white">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-dark"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-start"><i class="fas fa-user text-dark me-1 "></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-dark me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-thumb hover-zoomer">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/02.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Rent</div>
                                    <div class="price text-white">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-dark"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-start"><i class="fas fa-user text-dark me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-dark me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-thumb hover-zoomer">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/03.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Rent</div>
                                    <div class="price text-white">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-dark"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-start"><i class="fas fa-user text-dark me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-dark me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-thumb hover-zoomer">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/04.jpg" alt="">
                                    <div class="sale bg-secondary text-white">For Rent</div>
                                    <div class="price text-white">$172,000 <span class="text-white">$170/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Himalia Luxury Condos</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-dark"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-start"><i class="fas fa-user text-dark me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-dark me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-thumb hover-zoomer">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/05.jpg" alt="">
                                    <div class="featured text-white" style="background-color: rgba(95, 98, 139, 1)">10% Sals</div>
                                    <div class="sale bg-secondary text-white">For Rent</div>
                                    <div class="price text-white">$386,000 <span class="text-white">Fixed Amount</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Gulfishan 2 Story Building</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-dark"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-start"><i class="fas fa-user text-dark me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-dark me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-thumb hover-zoomer">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{asset('/')}}website/assets/images/thumbnail/06.jpg" alt="">
                                    <div class="featured text-white" style="background-color: rgba(95, 98, 139, 1)">New</div>
                                    <div class="sale bg-secondary text-white">For Rent</div>
                                    <div class="price text-white">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                    <div class="starmark text-white"><i class="far fa-star"></i></div>
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                        <span class="location"><i class="fas fa-map-marker-alt text-dark"></i> Avenue South Burlington, Los Angles</span> </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-start"><i class="fas fa-user text-dark me-1"></i> Jeson Billiam</div>
                                        <div class="float-end"><i class="far fa-calendar-alt text-dark me-1"></i> 6 Months Ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                    <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">45</a></li>
                                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Advance Search Section End ==============-->
@endsection
