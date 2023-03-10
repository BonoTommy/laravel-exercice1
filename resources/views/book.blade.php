@extends('master')
@section('title', 'Book')
@section('body-class')
<body class="sub_page">
@endsection
@section('activeBook')
<span class="sr-only">(current)
@endsection
@section('activeClassBook')
active
@endsection
@section('content')
</div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      

      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="" method="POST" action="{{ route('formBook') }}" accept-charset="UTF-8">
            {{ csrf_field() }}
              <div>
                <input type="text" class="form-control" placeholder="Your Name" name="name"/>
                @if($errors->has('name'))
                <div class="text-danger">{{ $errors->first('name')}}</div>
                @endif
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" name="phone_number"/>
                @if($errors->has('phone_number'))
                <div class="text-danger">{{ $errors->first('phone_number')}}</div>
                @endif
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email"/>
                @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email')}}</div>
                @endif
              </div>
              <div>
                <select class="form-control nice-select wide" name="guest_nbr">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
                </select>
                @if($errors->has('guest_nbr'))
                <div class="text-danger">{{ $errors->first('guest_nbr')}}</div>
                @endif
              </div>
              <div>
                <input type="date" class="form-control" name="date">
                @if($errors->has('date'))
                <div class="text-danger">{{ $errors->first('date')}}</div>
                @endif
              </div>
              <div>
                <input type="time" min="17:00" max="22:00" class="form-control" name="time">
                @if($errors->has('time'))
                <div class="text-danger">{{ $errors->first('time')}}</div>
                @endif
              </div>
              <div class="btn_box">
                <button type="submit">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
@endsection