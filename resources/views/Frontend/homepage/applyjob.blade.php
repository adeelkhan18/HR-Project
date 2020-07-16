@extends('Frontend.master')
@section('title', __('career'))

@section('main_content')

    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>



    <!-- w3l-contacts-5-grid -->

    <section class="w3l-form-41">
        <!-- /w3l-form-41-section -->
        <div class="w3l-form-41-mian">
            <div class="wrapper">
                <div class="form-inner-cont">
                    @if(session('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  {{session('message')}}
</div>
@endif
@if(session('error'))

<div class="alert alert-danger alert-dismissible" role="alert">
  {{session('error')}}
</div>

@endif
                    <form action="{{route('savejobs')}}" method="post" class="signin-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <h3>Applying For <br><span style="color:red;font-weight: bold">{{$title}}</span> </h3>
                        <div class="form-input">
                            <label for="w3lName">Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required="" />
                        </div>
                            <input type="hidden" name="id" value="{{$id}}" placeholder="Enter your name" required="" />
                        <div class="form-input">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" placeholder="Enter your email" required />
                        </div>
                        <div class="form-input">
                            <label for="Phone">Phone</label>
                            <input type="text" name="Phone" placeholder="Phone" required />
                        </div>
                        <div class="form-input">
                            <label for="CV">CV</label>
                            <input type="file" name="cv" placeholder="cv" required />
                        </div>
                        <button class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //w3l-form-41-section -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    
@endsection