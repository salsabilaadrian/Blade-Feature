@extends('template')

@section('content')
{{--  CSS  --}}
<style>
  .text-center{
      font-family: 'Inter', sans-serif;
  }
  
  .text-center-2{
    font-family: 'Raleway', sans-serif;
  }

  .iklan{
    width: 75%;
    height: 75%;
    {{--  margin-left: 12%;
    position: center;  --}}
  }

  *{
    padding: 0;
    margin: 0;
  }

  .text-decoration{
    text-decoration: line-through;
  }

</style>

<div class="container">
{{--  Home  --}}
<div class="row mt-3">
  <div class="col-1 col-sm-12">
    <div class="title">
      <h1 class="text-center font-weight-bold">Buy Now</h1>
      <h2 class="text-center font-weight-light id: text-center-2"><i>Save Earth Now</i></h2>
    </div>
  </div>
</div>

{{--  Iklan  --}}
<div class="iklan mt-4 rounded mx-auto d-block">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/iklan-1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../img/iklan-2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../img/iklan-3.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</div>
</div>

<div class="content">
  <div class="container2" >
   {{--  Content  --}}
   <div class="row mt-4" style="background-color: white">
    @foreach($barang as $b)
      <div class="col-md-4 mt-4">
        <div class="card bg-light" style="height:100%;">
            <img src="{{ $b['image'] }}" class="card-img-top" alt="Image"> 
            <div class="card-body" >
              <p class="card-text text-black"><h4><b>{{ $b['name']}}</b></h4></p>
              @if($b['discount'] == "Yes")
                <div class="alert alert-danger pl-2 pr-2 pb-1 pt-1 mb-0" style="width:fit-content; font-size:12px;">
                  Disscount
                </div>
                <p class="text-decoration"><i>{{ $b['price']}}</i></p>
                <p class="card-text text-black">{{ $b['pricedisc']}}</p> 
              @else
                <p class="card-text text-black">{{ $b['price']}}</p>
              @endif
            </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection


