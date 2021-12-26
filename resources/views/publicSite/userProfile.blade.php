@extends('publicSite.layout.master')

@section('title','User-Profile')
@section('content')

<section class="section about-section gray-bg" id="about">
    <div class="container ">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">Welcome{{ Auth::user()->name }}</h3>
                    <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                    <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating
                        stylish, modern websites, web services and online stores. My passion is to design digital user
                        experiences through the bold interface and meaningful interactions.</p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Birthday</label>
                                <p>4th april 1998</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p>22 Yr</p>
                            </div>
                            <div class="media">
                                <label>Residence</label>
                                <p>Canada</p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>California, USA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>{{ Auth::user()->email }}</p>
                            </div>

                            <div class="media">
                                <label>Phone</label>
                                <p>820-885-3321</p>
                            </div>
                            <div class="media">
                                <label>Skype</label>
                                <p>skype.0404</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>Available</p>
                            </div>
                            <a href="{{asset('useredit', Auth::user()->id )}}
                                "><button type="button" class="btn btn-primary w-75">Edit</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="{{  Auth::user()->image }}" title="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection