@extends('front.layout.template')

@section('title', 'About Laravel Blog - Arifin Risyad')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8"  data-aos="zoom-out">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow-sm">
                    <a href="{{ asset('front/img/laravel.png')}}">
                        <img class="card-img-top featured-img " src="{{ asset('front/img/laravel.png')}}"
                            alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ date('d/m/y') }}</div>
                        <h2 class="card-title">About Laravel Blog</h2>
                        <p class="card-text">
                           <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Tempore porro vero corporis eos non iure, nobis, eius dolores magni repellendus 
                            eveniet placeat recusandae minima odit neque hic velit doloribus incidunt!
                           </p>

                           <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum et, 
                            ipsam ad nobis assumenda totam fugiat laboriosam laborum ratione, quam, dolor rerum 
                            molestias reprehenderit! Assumenda veniam reiciendis numquam porro repellendus!
                           </p>

                           <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia illum quidem molestiae, 
                            culpa molestias ab laborum quia recusandae, sit illo totam repudiandae nesciunt, at 
                            aspernatur consequatur enim. A, blanditiis voluptas?
                           </p>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
