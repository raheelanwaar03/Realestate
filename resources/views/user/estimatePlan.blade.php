@extends('layouts.app')

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url('{{ asset('assets/images/banner/banner1.jpg') }}')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Estimate Your Plan</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user.contactUs') }}">Contact Us</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Estimate your Plan</h1>
                    <div class="card">
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Plot Loction</label>
                                    <input type="text" name="loction" class="form-control" placeholder="Enter Your Plot Loction">
                                </div>
                                <div class="form-group">
                                    <label for="">Plot Size</label>
                                    <input type="text" name="Size" class="form-control" placeholder="Enter Your Plot Size">
                                </div>
                                <div class="form-group">
                                    <label for="">Rooms</label>
                                    <input type="text" name="room" class="form-control" placeholder="Enter Your desired Rooms">
                                </div>
                                <div class="form-group">
                                    <label for="">Number of Bathrooms</label>
                                    <input type="text" name="bathrooms" class="form-control" placeholder="Enter Your desired Bathrooms">
                                </div>
                                <div class="form-group">
                                    <label for="">Type Of Kitchen</label>
                                    <select name="kithchen" class="form-control">
                                        <option value="magazine">Magazine</option>
                                        <option value="fence">Fence</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Check Result</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
