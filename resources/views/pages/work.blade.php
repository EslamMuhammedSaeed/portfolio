@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-xl-3 mb-5">
            <div class="bg-white shadow personal-info px-0">
                <div class="profile-image-sm text-center mt-2">
                    <img class="shadow-sm" src="{{ asset('img/profile_image3.png') }}"  id="profile-image-sm" class=" img-circle img-responsive" alt="Eslam">
                </div>
                <div class="text-center mt-2">
                    <p class="my-0" style="color: rgba(0, 0, 0, 0.5); font-size: 25px;font-family: 'Dancing Script', cursive;">Eslam <span class="text-primary" style="font-weight: bold;">Saeed</span></p>
                </div>
                <div class="px-4">
                    <div class="text-center mt-2 mb-3 position-label ">
                        <span class="position-label bg-light text-secondary shadow-sm py-1 px-3">full stack web developer</span>
                    </div>
                </div>
                <div class="text-center my-2 pt-1">
                    <a class="mx-1" href=""><i class="fa fa-facebook-square text-secondary" style="font-size:25px"></i></a>
                    <a class="mx-1" href=""><i class="fa fa-instagram text-secondary" style="font-size:25px"></i></a>
                    <a class="mx-1" href=""><i class="fa fa-github text-secondary" style="font-size:25px"></i></a>

                </div>  
                <div class="contacts-container px-0 py-3 mt-4 shadow-sm text-center bg-light">
                    <div class="d-block m-auto " style="text-align: left;width:250px">
                        <div class="contacts  ">
                            <i class="fa fa-envelope text-secondary mx-2 ml-3 mt-0" style="font-size:15px"></i>
                            <span style="font-size: 12px;">eslam.muhammed.saeed@gmail.com</span>
                        </div>
                        <div class="contacts">
                            <i class="fa fa-linkedin-square text-secondary mx-2 ml-3 mt-2" style="font-size:15px"></i>
                            <span style="font-size: 12px;">www.linkedin.com/in/eslam-saeed</span>
                        </div>
                        <div class="contacts ">
                            <i class="fa fa-phone text-secondary mr-1 ml-3 mt-2" style="font-size:17px"></i>
                            <span style="font-size: 11px;">  +20 1115183228</span>
                        </div>
                    </div>
                    
                </div>
                <div class="text-center mt-4 mb-3">
                    <a href="/contact" class="btn btn-secondary shadow-sm">
                        Contact Me
                    </a>
                </div>  
            </div>
        </div>
        <div class="col-xl-9 ">
            <div class="bg-white shadow personal-info px-0 py-0 mb-5" style="min-height:300px;margin-top:2px">
                <div class="work-header bg-white shadow-sm px-4 pt-3 pb-2"><h3 class="text-secondary work-header-title">Work</h3></div>
                <div class="px-1 pt-1" style="padding-bottom: 30px">   
                    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid m-auto" src="{{ asset('img/antscode.png') }}" alt="First slide" style="max-width: 80%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid m-auto" src="{{ asset('img/antscode.png') }}" alt="Second slide" style="max-width: 80%">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid m-auto" src="{{ asset('img/antscode.png') }}" alt="Third slide" style="max-width: 80%">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div> --}}
                    <div id="demo" class="carousel slide mt-4" data-ride="carousel" style="border-radius: 20px">
                        <ul class="carousel-indicators">
                          <li class="bg-dark" data-target="#demo" data-slide-to="0" class="active"></li>
                          <li class="bg-dark" data-target="#demo" data-slide-to="1"></li>
                          <li class="bg-dark" data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <a href="https://antscode.io/"><img class="d-block img-fluid m-auto" src="{{ asset('img/antscode3.png') }}" alt="First slide" style="max-width: 85%"></a>
                            
                            <div class="carousel-caption">
                              
                            </div>   
                          </div>
                          <div class="carousel-item">
                            <img class="d-block img-fluid m-auto" src="{{ asset('img/antscode3.png') }}" alt="First slide" style="max-width: 85%">
                            <div class="carousel-caption text-secondary">
                              
                            </div>   
                          </div>
                          <div class="carousel-item">
                            <img class="d-block img-fluid m-auto" src="{{ asset('img/antscode3.png') }}" alt="First slide" style="max-width: 85%">
                            <div class="carousel-caption">
                              
                            </div>   
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev" style="color: black;z-index:3;">
                          {{-- <span class="carousel-control-prev-icon" style="color: black;z-index:4;"></span> --}}
                          <i class="fa fa-angle-left text-dark" style="font-size: 30px"></i>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next" style="color: black;z-index:3;">
                          {{-- <span class="carousel-control-next-icon" style="color: black;z-index:4;"></span> --}}
                          <i class="fa fa-angle-right text-dark" style="font-size: 30px"></i>
                        </a>
                      </div>
                </div>
                    
            </div>
        </div>    
    </div>
</div>

@endsection