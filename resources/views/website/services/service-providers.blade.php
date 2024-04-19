@extends('website.master')

@section('body')

    <div id="page-wrapper" class="bg-white">
        <div class="row">
            <div class="full-row py-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="row ">
                                <div class=" form-border text-white " style="background-color: rgba(95, 98, 139, 1)">
                                    <h4 class="double-down-line-left-white position-relative pb-4 mt-4 mb-5">Service Providers Search</h4>
                                    <form class="transparent-white mb-5" method="post" action="https://template.unicoderbd.com/homex/action-page-post.html">
                                        <div class="row row-cols-1 g-4">
                                            <div class="col">
                                                <label class="form-label">Service Providers Type</label>
                                                <div class="select-arrow text-white">
                                                    <select class="form-control form-select" style="background-color: rgba(95, 98, 139, 1)">
                                                        <option >Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Service Providers State / Location</label>
                                                <div class="select-arrow text-white">
                                                    <select class="form-control form-select" style="background-color: rgba(95, 98, 139, 1)">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Service Providers Rating</label>
                                                <div class="select-arrow text-white">
                                                    <select class="form-control form-select" style="background-color: rgba(95, 98, 139, 1)">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Australia</option>
                                                        <option>Russia</option>
                                                        <option>France</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <label class="me-3">X Company Registered</label>
                                                    <div class="radio-check">
                                                        <abbr title="Click button to slide the radio button">
                                                            <input type="checkbox" id="radio-1" class="d-none" name="question" value="Yes">
                                                            <label for="radio-1"><span style="color: rgba(95, 98, 139, 1)">No</span><span >Yes</span></label>
                                                        </abbr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <label class="me-3">Certified Agent</label>
                                                    <div class="radio-check">
                                                        <abbr title="Click button to slide the radio button">
                                                            <input type="checkbox" id="radio-2" class="d-none" name="question" value="Yes">
                                                            <label for="radio-2"><span style="color: rgba(95, 98, 139, 1)" >No</span><span >Yes</span></label>
                                                        </abbr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-white mt-5 rounded-3 ">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 p-0">
                            <div class="row">
                                <div class="col">
                                    <div class="w-100 bg-white shadow-sm text-secondary">
                                        <ul class="nav-menu d-flex">
                                            <li> <a href="property-search-grid.html">Property</a> </li>
                                            <li class="active" > <a href="agent-search.html">Service Providers</a> </li>
                                            <li> <a href="dashboard-listing.html">Manage Listing</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="px-3 px-sm-5 mt-4 property-thumview">
                                        <div class="row my-4">
                                            <div class="col">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
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
                                                    <div class="view-category">
                                                        <a href="agent-search.html" title="Grid"><i class="fas fa-th-large"></i></a>
                                                        <a href="agent-list-search.html" title="List" class="active" style="background-color: rgba(95, 98, 139, 1)"><i class="fas fa-th-list"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 g-4">
                                            <div class="col">
                                                <div class="hover-zoomer bg-white shadow-one">
                                                    <div > <img src="assets/images/team/01.png" alt=""> </div>
                                                    <div class="py-3 text-center">
                                                        <h5 class="text-secondary hover-text-primary"><a href="#">Karen Eilla Boyette</a></h5>
                                                        <span>Appartment Service Provider</span> </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="hover-zoomer bg-white shadow-one">
                                                    <div > <img src="assets/images/team/02.png" alt=""> </div>
                                                    <div class="py-3 text-center">
                                                        <h5 class="text-secondary hover-text-primary"><a href="#">Walter Devid Moye</a></h5>
                                                        <span>Condos  Service Provider</span> </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="hover-zoomer bg-white shadow-one">
                                                    <div > <img src="assets/images/team/03.png" alt=""> </div>
                                                    <div class="py-3 text-center">
                                                        <h5 class="text-secondary hover-text-primary"><a href="#">Linda Dina Pate</a></h5>
                                                        <span>Commercial Building  Service Provider</span> </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="hover-zoomer bg-white shadow-one">
                                                    <div > <img src="assets/images/team/04.png" alt=""> </div>
                                                    <div class="py-3 text-center">
                                                        <h5 class="text-secondary hover-text-primary"><a href="#">Karen Eilla Boyette</a></h5>
                                                        <span>Appartment  Service Provider</span> </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="hover-zoomer bg-white shadow-one">
                                                    <div> <img src="assets/images/team/05.png" alt=""> </div>
                                                    <div class="py-3 text-center">
                                                        <h5 class="text-secondary hover-text-primary"><a href="#">Walter Devid Moye</a></h5>
                                                        <span>Condos  Service Provider</span> </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="hover-zoomer bg-white shadow-one">
                                                    <div > <img src="assets/images/team/06.png" alt=""> </div>
                                                    <div class="py-3 text-center">
                                                        <h5 class="text-secondary hover-text-primary"><a href="#">Linda Dina Pate</a></h5>
                                                        <span>Commercial Building  Service Provider</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center my-5">
                                            <div class="col-auto">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination" >
                                                        <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                                        <li class="page-item active" aria-current="page"> <span class="page-link" style="background-color: rgba(95, 98, 139, 1)"> 1 <span class="sr-only">(current)</span> </span>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" style="background-color: rgba(95, 98, 139, 1)" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" style="background-color: rgba(95, 98, 139, 1)" href="#">3</a></li>
                                                        <li class="page-item">...</li>
                                                        <li class="page-item"><a class="page-link" style="background-color: rgba(95, 98, 139, 1)" href="#">45</a></li>
                                                        <li class="page-item"> <a class="page-link text-white" style="background-color: rgba(95, 98, 139, 1)" href="#">Next</a> </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->
@endsection
