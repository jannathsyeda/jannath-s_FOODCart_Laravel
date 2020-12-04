@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           {{-- -----------1--------- --}}
            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('public/backend/img/gallery_5.jpeg') }}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('public/backend/img/gallery_3.jpeg') }}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('public/backend/img/gallery_2.jpeg') }}" alt="Third slide">
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
                  </div>

            </section>
{{-- -----2------- --}}

<section>
    <div style="text-align: center; margin-top:100px; color:red;margin-bottom:40px;"><h1>Features</h1></div>
    <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="{{ asset('public/backend/img/gallery_3.jpeg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button>Add Cart</button>
          </div>
        </div>  

        <div class="card">
          <img class="card-img-top" src="{{ asset('public/backend/img/gallery_4.jpeg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <button>Add Cart</button>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="{{ asset('public/backend/img/gallery_4.jpeg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <button>Add Cart</button>
          </div>
        </div>

        
        <div class="card">
            <img class="card-img-top" src="{{ asset('public/backend/img/gallery_6.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <button>Add Cart</button>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('public/backend/img/gallery_7.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <button>Add Cart</button>
            </div>
          </div>

      </div>



    
</section>

{{-- ------3---------------- --}}
<section>

    <div style="width:150px;background-color:red;color:black;margin-top:100px;"><h1>Today's Special</h1></div>
    <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="{{ asset('public/backend/img/gallery_1.jpeg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button>Add Cart</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="{{ asset('public/backend/img/gallery_2.jpeg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <button>Add Cart</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="{{ asset('public/backend/img/gallery_4.jpeg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <button>Add Cart</button>
          </div>
        </div>


      </div>

</section>


        </div>
    </div>
</div>


@endsection 