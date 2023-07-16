@extends('include/template')
@section('content')

<!-- cart + summary -->
<form action="" method="post">
@csrf
<section class="my-5">
  <div class="container">
    <div class="row">
      @if ($data['sum'] >= 2000000)
      <div class="col-12">
        <div class="alert alert-primary" role="alert">
          <h4>Yeay...</h4>
          You are entitled to receive a discount coupon
        </div>
      </div>
      @endif
      <!-- cart -->
      <div class="col-lg-9">
        <div class="card border-0 shadow-lg">
          <div class="m-4">
            <h4 class="card-title my-4">Checkout Info</h4>
              <input type="hidden" name="id" value="{{Auth::user()->id}}">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3 form-floating">
                    <input type="text" value="{{Auth::user()->name}}" readonly class="form-control">
                    <label class="form-label">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 form-floating">
                    <input type="email" value="{{Auth::user()->email}}" readonly class="form-control">
                    <label class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 form-floating">
                    <input type="number" placeholder="890******" name="phone" required class="form-control">
                    <label class="form-label">Phone Number</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3 form-floating">
                    <input type="text" placeholder="Your Address" name="address" required class="form-control">
                    <label class="form-label">Address</label>
                  </div>
                </div>
              </div>
            <hr>
            <h4 class="card-title my-4">Shopping cart</h4>
            @foreach ($data['product'] as $row)
            <div class="row gy-3 mb-4 d-flex align-items-center">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="{{$row->image}}" class="border rounded me-3" style="width: 96px; height: 96px;" />
                    <div class="">
                      <span class="nav-link">{{$row->product_name}}</span>
                      <p class="text-muted">{{$row->description}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                <div class="">
                  <h6 class="h6 mb-0 pb-0">IDR.{{number_format($row->price)}}</h6>
                    <small class="text-muted">/Pcs</small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="{{route('delete_cart', $row->id_cart)}}" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- cart -->
      <!-- summary -->
      <div class="col-lg-3">
        <div class="card mb-3 border-0 shadow-lg ">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label class="form-label">Have coupon?</label>
                <div class="input-group">
                  <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                  <button class="btn btn-light border">Apply</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card shadow-lg border-0">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Price:</p>
              <p class="mb-2">IDR. {{number_format($data['sum'])}}</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Discount:</p>
              <p class="mb-2 text-success">IDR. -60.00</p>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2 fw-bold">$283.00</p>
            </div>

            <div class="mt-3">
              <button type="submit" class="btn btn-success w-100 shadow-0 mb-2"> Checkout </button>
              <a href="{{route('index')}}" class="btn btn-light w-100 border mt-2"> Back to shop </a>
            </div>

          </div>
        </div>
      </div>
      <!-- summary -->
    </div>
  </div>
</section>
</form>
<!-- cart + summary -->

@endsection