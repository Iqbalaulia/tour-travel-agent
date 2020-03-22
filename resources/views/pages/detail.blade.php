@extends('layouts.app')

@section('title' ,'Detail Travel')

@section('content')

<main>
    <section class="section-details-header"> </section>

    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            Paket Travel
                        </li>

                        <li class="breadcrumb-item active">
                            Details
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Peninda</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/newzealand.jpg" class="xzoom" 
                                id="xzoom-default" width="680" xoriginal="frontend/images/newzealand.jpg" alt="">

                            </div>

                            <div class="xzoom-thumbs">
                                <a href="frontend/images/newzealand.jpg">
                                    <img 
                                    src="frontend/images/turki.jpg" 
                                    class="xzoom-gallery" 
                                    width="128"
                                    xpreview="frontend/images/turki.jpg">
                                </a>
                                <a href="frontend/images/newzealand.jpg">
                                    <img src="frontend/images/newzealand.jpg" class="xzoom-gallery" width="128"
                                     xpreview="frontend/images/newzealand.jpg">
                                </a>
                                <a href="frontend/images/newzealand.jpg">
                                    <img src="frontend/images/newzealand.jpg" class="xzoom-gallery" width="128"
                                     xpreview="frontend/images/newzealand.jpg">
                                </a>
                                <a href="frontend/images/newzealand.jpg">
                                    <img src="frontend/images/newzealand.jpg" class="xzoom-gallery" width="128"
                                     xpreview="frontend/images/newzealand.jpg">
                                </a>
                                <a href="frontend/images/newzealand.jpg">
                                    <img src="frontend/images/newzealand.jpg" class="xzoom-gallery" width="128"
                                     xpreview="frontend/images/newzealand.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam culpa corrupti ex
                            maiores est dolores? Eum harum, et nesciunt eaque voluptatum aut at iure quos voluptate
                            ad alias, neque magni.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam culpa corrupti ex
                            maiores est dolores? Eum harum, et nesciunt eaque voluptatum aut at iure quos voluptate
                            ad alias, neque magni.
                            
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam culpa corrupti ex
                            maiores est dolores? Eum harum, et nesciunt eaque voluptatum aut at iure quos voluptate
                            ad alias, neque magni.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam culpa corrupti ex
                            maiores est dolores? Eum harum, et nesciunt eaque voluptatum aut at iure quos voluptate
                            ad alias, neque magni.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam culpa corrupti ex
                            maiores est dolores? Eum harum, et nesciunt eaque voluptatum aut at iure quos voluptate
                            ad alias, neque magni.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="" alt=""  class="features-image">
                                <div class="description">
                                    <h3>
                                        Featured Event
                                    </h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="" alt="" class="features-image">
                                <div class="description">
                                    <h3>
                                        Language
                                    </h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="" alt="" class="features-image">
                                <div class="description">
                                    <h3>
                                        Foods
                                    </h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="frontend/images/anggaphoto.png" alt="" class="member-image rounded-circle mr-1" >
                            <img src="frontend/images/anggaphoto.png" alt="" class="member-image rounded-circle mr-1" >
                            <img src="frontend/images/anggaphoto.png" alt="" class="member-image rounded-circle mr-1" >
                            <img src="frontend/images/anggaphoto.png" alt="" class="member-image rounded-circle mr-1" >
                            <img src="frontend/images/anggaphoto.png" alt="" class="member-image rounded-circle mr-1" >

                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">
                                    22 Aug, 2019
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type of Trip</th>
                                <td width="50%" class="text-right">
                                    Open Public
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    $80,00/person
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="join-container">
                        <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

    
@endsection

@push('prepend-style')

<link rel="stylesheet" href="{{ asset('frontend/libraries/xzoom/xzoom.css') }}">

@endpush

@push('addon-script')

<script src="{{ asset('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

<script>        
$(document).ready(function(){
    $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title:false,
        tint: '#333',
        Xoffset: 15
    });
});

</script>
@endpush