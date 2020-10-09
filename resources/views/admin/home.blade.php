@extends('admin.layouts.app')
@section('title')
    Dashboard
@endsection
@push('css')

@endpush
@section('content')
<div class="content">
    Welcome to adminpanel
    {{-- <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6 col-sm-12">
            <div class="card card-stats">
                <div class="card-header" data-background-color="green">
                    <i class="material-icons">info_outline</i>
                </div>
                <div class="card-content">
                    <p class="category">Reservation new</p>
                    <h3 class="title">{{ $reservations_count->count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i> Not Confirmed Reservation. <strong> Contact with customer to confirm.</strong>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="material-icons">chrome_reader_mode</i>
                </div>
                <div class="card-content">
                    <p class="category">Reservation </p>
                    <h3 class="title">{{ $reservations->count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i>Confirmed Reservation
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card card-stats">
                <div class="card-header" data-background-color="green">
                    <i class="material-icons">content_paste</i>
                </div>
                <div class="card-content">
                    <p class="category">Category </p>
                    <h3 class="title">{{ $categoryCount }}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i>
                        <a href="#pablo">Total Categories </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="material-icons ">library_books</i>
                </div>
                <div class="card-content">
                    <p class="category">Item </p>
                    <h3 class="title">{{ $itemCount }}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i>
                        <a href="#pablo">Total  Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card card-stats">
                <div class="card-header" data-background-color="green">
                    <i class="material-icons">slideshow</i>
                </div>
                <div class="card-content">
                    <p class="category">Slider total</p>
                    <h3 class="title">{{ $sliderCount }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i> <a href="{{ route('slider.index') }}">Get More Details...</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="material-icons">message</i>
                </div>
                <div class="card-content">
                    <p class="category">Contact</p>
                    <h3 class="title">{{ $contactCount }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div> --}}
  </div>
  @endsection
@push('js')

@endpush
