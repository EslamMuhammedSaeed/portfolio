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
        <div class="col-xl-9 mb-5">
            <div class="bg-white shadow personal-info px-5 py-5 mb-5" style="min-height:300px;margin-top:2px">
                <form action="contact" method="post">
                    @csrf
                    <input class="form-control" type="text" name="username" id="username" placeholder="Name">
                    <input class="form-control mt-3" type="email" name="email" id="email" placeholder="Email">
                    <textarea class="form-control mt-4" name="msg" id="msg" cols="30" rows="7" placeholder="Type your message here ..."></textarea>
                    <input class="btn btn-primary mt-3 mx-auto" type="submit" value="send">
                </form>
            </div> 
        </div>    
    </div>
</div>        
@endsection