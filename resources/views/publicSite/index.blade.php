@extends('publicSite.layout.master')

@section('title','home')
@section('content')



<section class="home-slider owl-carousel">
 
      
 
  @foreach ($owner as $shop)
  <div class="slider-item" style="background-image:url(images/{{$shop->logo}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate">

          <h2 class="mb-4">{{$shop->company_name}}</h2>
          <span class="subheading text-truncate">{{$shop->desc}}</span>
          <p><a href="{{ route('company',$shop->id) }}" class="btn btn-primary px-4 py-3 mt-3">Visit Now !</a></p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
 
</section>


<section class="ftco-section ftco-no-pb">
  <div class="container px-0 ">
    <div class="row no-gutters justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Categories</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
          regelialia. It is a paradisematic country</p>
        <p></p>
      </div>
    </div>
    <div class="row no-gutters">
      @foreach ($category as $category)
      <div class="col-md-3">
        <div class="project img ftco-animate d-flex justify-content-center align-items-center"
          style="background-image: url(images/{{$category->image}});">
          <div class="overlay"></div>
          <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
              class="icon-subdirectory_arrow_right"></span></a>
          <div class="text text-center p-4">
            <h3><a href="#">{{$category->name}}</a></h3>

          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>


<section class="ftco-intro ftco-no-pb img"
  style="background-color:#243665 !important; opacity:unset !important; margin-top:7em">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-0">You Always Get the Best Guidance</h2>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter" id="section-counter">
  <div class="container">
    <div class="row d-md-flex align-items-center justify-content-center">
      <div class="wrapper">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="{{ $owner_counter }}">0</strong>
                <span>Companies</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="{{ $users_counter }}">0</strong>
                <span>Users</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="{{ $users_counter }}">0</strong>
                <span>Reviews</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Years of Experience</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4">Our Services</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
          regelialia. It is a paradisematic country</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-4 d-flex">
        <div class="services-2 noborder-left text-center ftco-animate">
          <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
              class="flaticon-analysis"></span></div>
          <div class="text media-body">
            <h3>Business Analysis</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex">
        <div class="services-2 text-center ftco-animate">
          <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
              class="flaticon-business"></span></div>
          <div class="text media-body">
            <h3>Business Consulting</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex">
        <div class="services-2 text-center ftco-animate">
          <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
              class="flaticon-insurance"></span></div>
          <div class="text media-body">
            <h3>Business Insurance</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex">
        <div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
          <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span>
          </div>
          <div class="text media-body">
            <h3>Global Investigation</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex">
        <div class="services-2 text-center noborder-bottom ftco-animate">
          <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span>
          </div>
          <div class="text media-body">
            <h3>Audit &amp; Evaluation</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex">
        <div class="services-2 text-center noborder-bottom ftco-animate">
          <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
              class="flaticon-search-engine"></span></div>
          <div class="text media-body">
            <h3>Marketing Strategy</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Recent</span> Blog</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
          regelialia. It is a paradisematic country</p>
      </div>
    </div>
    <div class="row w-100 d-flex ">
      
        @foreach ($owner as $shop)
        <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20 d-flex align-items-end"
            style="background-image: url('images/{{$shop->logo}}');">
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="#">{{$shop->company_name}}</a></h3>
            <p>{{ $shop->owner_name}}</p>
            <div class="d-flex align-items-center mt-4">
              <p class="mb-0"><a href="{{ route('company',$shop->id) }}" class="btn btn-primary">Read More <span
                    class="ion-ios-arrow-round-forward"></span></a></p>
              <p class="ml-auto mb-0">
              <p class="mr-2 mt-3">{{ $shop->address }}</p>
              <p class="mr-2 mt-3"></p>
              </p>
            </div>
          </div>
        </div>
      </div>
        @endforeach
     
    </div>
</section>
<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4">Our Clients Says</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
          regelialia. It is a paradisematic country</p>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts.</p>
                <p class="name">Racky Henderson</p>
                <span class="position">Father</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>



@endsection