@extends('layouts.app')

@section('content')
<div class="mt-5">
    <div class="profile-image text-center">
        <img src="{{ asset('img/profile_image3.png') }}"  id="profile-image" class=" img-circle img-responsive" alt="Eslam">
    </div>
    <div class="index-content text-center mx-auto  ">
        <h1 class="mb-0" id="developer-name">I'm <span class="text-primary" style="color:font-family: 'Balsamiq Sans', cursive;">Eslam</span></h1>
        <p id="developer-position">a full stack web developer</p>
    </div>
</div>
    
@endsection