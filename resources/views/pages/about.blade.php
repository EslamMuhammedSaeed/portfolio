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
                <div class="row px-3 pt-3 pb-0">
                    <div class="col-lg-5 bg-white text-secondary mt-3 mb-0 p-3 ml-4">
                        <i class="fa fa-briefcase text-primary mr-2" style="font-size: 20px;" aria-hidden="true"></i>
                        <span class="resume-title " style="font-size: 20px; font-weight:bold;">Experience</span>
                        <div class="cv-field mt-3">
                            <span class="d-block"> Giza Systems Education Foundation </span>
                            <span class="d-block"><b> Assistive technology programmer</b></span>
                            
                            
                        
                            <span> 2018 - 2019</span> 
                        </div>
                        <div class="cv-field mt-3">
                            <span class="d-block"> Giza Systems Education Foundation </span>
                            <span class="d-block"><b> Full stack web developer</b></span>
                            
                            
                        
                            <span> 2020 - present</span>
                        </div>
                    
                    </div>
                    <div class="col-lg-5 bg-white text-secondary p-3 mt-3 mb-0 ml-4 mr-4">
                        <i class="fa fa-graduation-cap text-primary mr-2" style="font-size: 20px;" aria-hidden="true"></i>
                        <span class="resume-title " style="font-size: 20px; font-weight:bold;">Education</span>
                        <div class="cv-field mt-3">
                            <span class=""> Faculty of Engineering, </span>
                            <span> Helwan University </span>
                            <span class="d-block"> Biomedical Department </span>
                            
                        
                            <span> 2013 – 2018 </span> 
                        </div>

                    </div>   
                    {{-- <div class="col-lg-5 bg-white text-secondary mt-3 mb-0 p-3 ml-4">
                        <i class="fa fa-briefcase text-primary mr-2" style="font-size: 20px;" aria-hidden="true"></i>
                        <span class="resume-title " style="font-size: 20px; font-weight:bold;">Experience</span>
                        <div class="cv-field mt-3">
                            <span class="d-block"> Giza Systems Education Foundation </span>
                            <span class="d-block"><b> Assistive technology programmer</b></span>
                            
                            
                        
                            <span> 2018 - 2019</span> 
                        </div>
                        <div class="cv-field mt-3">
                            <span class="d-block"> Giza Systems Education Foundation </span>
                            <span class="d-block"><b> Full stack web developer</b></span>
                            
                            
                        
                            <span> 2020 - present</span>
                        </div>
                    
                    </div> --}}
                    
                </div>
                <div class="row px-3">
                    
                    <div class="col-lg-5 bg-white text-secondary px-3  ml-4 mr-4 mt-0 mb-5">
                        <i class="fa fa-laptop text-primary mr-2" style="font-size: 20px;" aria-hidden="true"></i>
                        <span class="resume-title " style="font-size: 20px; font-weight:bold;">Coding Skills</span>
                        <div class="cv-field mt-3">
                            
                            <div class="progress mb-1 mt-4" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:90%;text-align:left;height: 25px;">PHP <span style="margin-left: 200px">90%</span> </div>
                            </div>
                            <div class="progress mb-1" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:90%;text-align:left;height: 25px;">Laravel <span style="margin-left: 200px">90%</span> </div>
                            </div>
                            <div class="progress mb-1" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:80%;text-align:left;height: 25px;">NodeJS <span style="margin-left: 175px">80%</span> </div>
                            </div>
                            <div class="progress mb-1" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:80%;text-align:left;height: 25px;">Express <span style="margin-left: 175px">80%</span> </div>
                            </div>
                            
                            <div class="progress mb-1" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:70%;text-align:left;height: 25px;">MongoDB <span style="margin-left: 145px">70%</span> </div>
                            </div>
                            



                        </div>

                    </div>   
                    <div class="col-lg-5 bg-white text-secondary px-3 ml-4 mb-5" style="margin-top: 33px">
                        
                        <div class="cv-field mt-3 mr-3">
                            <div class="progress mb-1 mt-4" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:90%;text-align:left;height: 25px;">HTML5<span style="margin-left: 190px">90%</span> </div>
                            </div> 
                            <div class="progress mb-1 " style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:90%;text-align:left;height: 25px;">CSS3 <span style="margin-left: 190px">90%</span> </div>
                            </div> 
                            <div class="progress mb-1 " style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:90%;text-align:left;height: 25px;">Bootstrap <span style="margin-left: 190px">90%</span> </div>
                            </div> 
                            <div class="progress mb-1" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:80%;text-align:left;height: 25px;">Javascript<span style="margin-left: 175px">80%</span> </div>
                            </div>
                            <div class="progress mb-1" style="height: 25px; border-radius:20px">
                                <div class="progress-bar py-2 px-3" style="width:70%;text-align:left;height: 25px;">React <span style="margin-left: 135px">70%</span> </div>
                            </div> 
                        </div>
                        
                    
                    </div>
                    
                </div>
        </div>    
    </div>
</div>
@endsection