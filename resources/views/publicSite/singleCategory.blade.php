@extends('publicSite.layout.master')

{{-- @section('title','Companies')  --}}
@section('content')
<style>
  .page_link>a:hover{
    color:#fbf88e;
  }
</style>



<section class="ftco-section bg-light">
  <div class="container">
    {{-- title dive --}}
      <div class="row justify-content-center mb-5 pb-2">
<div class="col-md-8 text-center heading-section ftco-animate">
  <h3 class="mb-4"><span>All</span> <span>Companies In</span> <strong>{{ $singleCategories->name }}</strong> <span>Category</span></h3>
  <p>Separated they live in. A small river named Duden flows 
    by their place and supplies it with the necessary regelialia. 
    It is a paradisematic country</p>
    <div class="page_link">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('allCategories') }}">/ Companies</a>
  
      <a href={{ route('category',$singleCategories->id) }}>/ {{ $singleCategories->name }}</a>
    
    </div>
</div>
</div>
      <div class="row">

{{-- start aside div - top categories --}}
<div class="col-lg-2" style="border-right: solid 2px grey">
  <div class="left_sidebar_area">
    <aside class="left_widgets p_filter_widgets" >
      <div  >
        <h5 class=""><strong>Top Categories</strong></h5>
      </div>
      <div class="widgets_inner">
        <ul class="list">
          @foreach ($categories as $category)
            <li class="category-title">
               <a href="{{ route('category',$category->id )}}">
                {{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
      </div>
    </aside>
  </div>
</div>
{{-- End aside div --}}

{{-- main content --}}
<div class="col-10 d-flex justify-content-center gap-5">
  @foreach ($singleCategories->owner as $owner)
  <div class="col-4" style="max-width: fit-content; overflow:hidden">
  <div class="card" style="width: 18rem; ">
    <img src="images/{{ asset($owner->logo) }}" class="card-img-top" alt="Company-logo">
    <div class="card-body">
      <h5 class="card-title">{{ $owner->company_name }}</h5>
      <p class="card-text">{{ $owner->desc }}</p>
      <a href="{{ route('company',$owner->id) }}" class="btn btn-primary">Discover Now </a>
    </div>
  </div>
</div>
@endforeach
</div>
</div>
{{-- end main content --}}

</div>
</div>

</section>


@endsection
















{{-- @extends('publicSite.layout.master')

@section('title','Companies')
@section('content')

<section class="ftco-section bg-light">
    <div class="container">
<div class="row justify-content-center mb-5 pb-2 mt-3">
    <div class="col-md-8 text-center heading-section ftco-animate">
      <h2 class="mb-4">{{ 'All Companies' }}</h2>
      <p>Here You Can Find The Best Companies in Jordan - Choose Correctly  </p>
      <div class="page_link">
        <a href="/">Home</a>
        <a href="/companies">/ Companies</a>
      </div>
    </div>
  </div>
  <div class="row">
       {{--lift side   --}}
     {{-- <div class="col-3">
      
            
              <div class="l_w_title">
                <h3>Browse Categories</h3>
              </div>
              <div class="widgets_inner">  --}}
                {{-- <ul class="list" >
                    @foreach ($categories as $category)
                    <li><a href="/companies/{{ $category->id }}">{{ $category->name }}</a></li>
                      @endforeach
                </ul> --}}
      {{-- </div>
    </div> --}}
  {{-- <div class="col-9 row ">  --}}
    {{-- show all owners in categories page--}}
     {{-- @foreach ($singleCategories->owner as $owner)
    <div class="col-md-3" style="margin-right:10px;">
        <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
        style="background-image: url(images/{{ $owner->logo }}); 
        border:.5px solid #233e62; ">
            <div class="overlay"></div>
           <a href="#" class="btn-site d-flex align-items-center justify-content-center">
             <span class="icon-subdirectory_arrow_right"></span></a> 
           <div class="text text-center p-4">
                <h3><a href="companies/{{$owner->id}}">{{ $owner->company_name }}</a></h3>
                <div>
                <span>{{ $owner->category->name }}</span></div>
                <span>{{ $owner->num_of_employees .' ' .'Employees.' }}</span>
            </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
</div> 
 </section>  
@endsection
 --}}
