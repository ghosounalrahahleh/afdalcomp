@extends('publicSite.layout.master')

@section('title','Companies')
@section('content')
{{-- internal css style part --}}
<style>
  .page_link>a:hover {
    color: #fbf88e;

    body {
      overflow-x: hidden
    }

    .container-fluid {
      background-image: linear-gradient(to right, #7B1FA2, #E91E63)
    }

    .sm-text {
      font-size: 10px;
      letter-spacing: 1px
    }

    .sm-text-1 {
      font-size: 14px
    }

    .green-tab {
      background-color: #00C853;
      color: #fff;
      border-radius: 5px;
      padding: 5px 3px 5px 3px
    }

    .btn-red {
      background-color: #E64A19;
      color: #fff;
      border-radius: 20px;
      border: none;
      outline: none
    }

    .btn-red:hover {
      background-color: #BF360C
    }

    .btn-red:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline-width: 0
    }

    .round-icon {
      font-size: 40px;
      padding-bottom: 10px
    }

    .fa-circle {
      font-size: 10px;
      color: #EEEEEF
    }

    .green-dot {
      color: #4CAF50
    }

    .red-dot {
      color: #E64A19
    }

    .yellow-dot {
      color: #FFD54F
    }

    .grey-text {
      color: #BDBDBD
    }

    .green-text {
      color: #4CAF50
    }

    .block {
      border-right: 1px solid #F5EEEE;
      border-top: 1px solid #F5EEEE;
      border-bottom: 1px solid #F5EEEE
    }

    .profile-pic img {
      border-radius: 50%
    }

    .rating-dot {
      letter-spacing: 5px
    }

    .via {
      border-radius: 20px;
      height: 28px
    }
  }
</style>

{{-- end of iternal css style part --}}

<section class="ftco-section bg-light">
    {{-- breadcrumbs part --}}
    <div class="container" style="margin-left:13%; margin-bottom:3%;">
        <div class="row  ">
            <div class="col">
                <div class="page_link">
                  <a href="{{ route('home') }}">Home</a>
                  <a href="{{ route('allCategories') }}">/ Companies</a>
                  <a href={{ route('company',$singleOwners->id) }}>/ {{ $singleOwners->company_name }}</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
      </div>
    </div>{{-- end breadcrumbs part --}}
    
    {{-- company information part --}}
    <div class="container" style="margin-bottom:3%;">
      <div class="row " style="margin-top:2%;margin-bottom:2%;">
          <div class="col-4 me-3">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="#" class="d-block w-100" alt="#">
                </div>
                <div class="carousel-item">
                  <img src="#" class="d-block w-100" alt="#">
                </div>
                <div class="carousel-item">
                  <img src="" class="d-block w-100" alt="#">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-7">
              <div class="col-sm-12 "><img src="{{ $singleOwners->logo }}" alt=""></div>
              <div class="col-sm-12"><strong>{{ $singleOwners->company_name }}</strong></div>
              <div class="col-sm-12">{{ $singleOwners->desc }}</div>
            </div>
       </div>
    </div>
    {{-- end company information part --}}



    {{-- company images part --}}
    {{-- <div class="container" style="margin-left:20%; margin-bottom:5%">
        <div class="row row-cols-3">
          <div class="col"></div>
            <div class="col-8">
              <h2>Company's Image and Services </h2>
            </div>
          <div class="col"></div>
    </div>
      <div class="row row-cols-3" style="margin-top:3%">
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>
      </div>
    </div> --}}
    {{-- end company images part --}}

    {{-- reviews part --}}



    <div class="container-fluid px-0 py-5 mx-auto">
      <div class="row justify-content-center mx-0 mx-md-auto">
        <div class="col-lg-10 col-md-11 px-1 px-sm-2">
          <div class="card border-0 px-3">
            <!-- top row -->
            <div class="d-flex row py-5 px-5 bg-light">
              <div class="green-tab p-2 px-3 mx-2">
                <p class="sm-text mb-0">OVERALL RATING</p>
                
                {{-- <h4>{{ $total_reviews }}</h4> --}}
              </div>
              <div class="white-tab p-2 mx-2 text-muted">
                <p class="sm-text mb-0">ALL REVIEWS</p>
                {{-- <h4>{{ $avg_reviews }}</h4> --}}
              </div>

              <div class="ml-md-auto p-2 mx-md-2 pt-4 pt-md-3"> <button class="btn btn-danger px-4">WRITE A
                  REVIEW</button> </div>
            </div> <!-- middle row -->
          </div>
          <hr>
          <!-- Review by user -->
          {{-- --}}
          <form action="{{ route('companyReview',$singleOwners->id) }}" method="post" class="ms-5">
            @csrf
            <fieldset>

              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select" name="rate-select">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
          {{-- --}}
          <div class="review p-5">
            <div class="row d-flex">
              <div class="profile-pic"><img src="https://i.imgur.com/Mcd6HIg.jpg" width="60px" height="60px"></div>
              <div class="d-flex flex-column pl-3">
                <h4>Emily</h4>
                <p class="grey-text">30 min ago</p>
              </div>
            </div>
            <div class="row pb-3">
              <div class="fa fa-circle green-dot my-auto rating-dot"></div>
              <div class="fa fa-circle green-dot my-auto rating-dot"></div>
              <div class="fa fa-circle green-dot my-auto rating-dot"></div>
              <div class="fa fa-circle green-dot my-auto rating-dot"></div>
              <div class="fa fa-circle green-dot my-auto rating-dot"></div>
              <div class="green-text">
                <h5 class="mb-0 pl-3">Excellent</h5>
              </div>
            </div>
            <div class="row pb-3">
              <p>This dive center is incredibly well organized and is at the top of its game.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
    {{-- end reviews part --}}
</section>






{{--
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2 mt-3" style="padding-left:0 !important; margin-left:0px"">
    <div class=" col-md-8 text-center heading-section ftco-animate">
      <h2 class="mb-4">{{ $singleOwners->company_name }}</h2>
      <p>{{ $singleOwners->desc }} </p>
      <div class="page_link">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('allCategories') }}">/ Companies</a>
        <a href={{ route('company',$singleOwners->id) }}>/ {{ $singleOwners->company_name }}</a>
      </div>
    </div>
  </div>
  <div class="row"> --}}
    {{--lift side --}}>
    {{-- <div class="col-9 row "> --}}
      {{-- show singular owner in single company page--}}

      {{-- <div class="col-md-3" style="margin-right:10px;">
        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/{{ $singleOwners->logo }}); 
        border:.5px solid #233e62; ">
          <div class="overlay"></div>
          <a href="#" class="btn-site d-flex align-items-center justify-content-center">
            <span class="icon-subdirectory_arrow_right"></span></a>
          <div class="text text-center p-4">
            <h3><a href="companies/{{$singleOwners->id}}">{{ $singleOwners->company_name }}</a></h3>
            <div>
              <span>{{ $singleOwners->category->name }}</span>
            </div>
            <span>{{ $singleOwners->num_of_employees .' ' .'Employees.' }}</span>
          </div>
        </div>
      </div> --}}
      {{-- @endforeach --}}
      {{-- </div>
  </div>
  </div>
</section> --}}
@endsection