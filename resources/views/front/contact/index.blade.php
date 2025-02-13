@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Contact Blog Arifin Risyad, Seputar Pemrograman dan Teknologi Terbaru">
    <meta name="keyword" value="contact blog laravel, kontak blog laravel tugas, contact blog laravel">
    <meta property="og:site_title" content="Contact Laravel Blog - Arifin Risyad" />
    <meta property="og:url" value="{{url()->current()}}">
    <meta property="og:site_name" content="Blog Laravel" />
    <meta property="og:description" value="Contact Blog Arifin Risyad, Seputar Pemrograman dan Teknologi Terbaru">
    <meta property="og:image" value="https://mubatekno.com/mubatekno-logo.png">
@endpush

@section('title', 'Contact Laravel Blog - Arifin Risyad')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8" data-aos="zoom-in">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow-sm">
                   <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7025.368426314863!2d98
                    .03714336973496!3d4.29729921299636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30377421d
                    9e7e359%3A0xdb391ef824e6077!2sSMK%20Negeri%201%20Karang%20Baru!5e0!3m2!1sen!2sid!4v1717035956295!5m2!1
                    sen!2sid" width="100%" height="450" style="border:0;"
                     allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
                    <div class="card-body">
                        <div class="small text-muted">{{ date('d/m/y') }}</div>
                        <h2 class="card-title">Contact Laravel Blog</h2>
                        <p class="card-text">
                           <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Tempore porro vero corporis eos non iure, nobis, eius dolores magni repellendus 
                            eveniet placeat recusandae minima odit neque hic velit doloribus incidunt!
                           </p>

                        </p>
                     <ul>
                        <li>Phone   :{{$config['phone']}}</li>
                        <li>Email   : {{$config['email']}}</li>
                      <li> <a href="https://youtube.com/{{$config['youtube']}}">Youtube</a></li>
                      <li> <a href="https://facebook.com/{{$config['facebook']}}">Facebook</a></li>
                      <li> <a href="https://instagram.com/{{$config['instagram']}}">Instagram</a></li>
                     </ul>

                    </div>
                </div>
            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
