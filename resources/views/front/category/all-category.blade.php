@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="All Category Blog Arifin Risyad, Seputar Pemrograman dan Teknologi Terbaru">
    <meta name="keyword" value="list category blog laravel, kategori blog laravel tugas, daftar category blog laravel">
    <meta property="og:site_title" content="All Category Arifin - Risyad" />
    <meta property="og:url" value="{{url()->current()}}">
    <meta property="og:site_name" content="Blog Laravel" />
    <meta property="og:description" value="All Category Blog Arifin Risyad, Seputar Pemrograman dan Teknologi Terbaru">
    <meta property="og:image" value="https://mubatekno.com/mubatekno-logo.png">
@endpush


@section('title', 'All Category Arifin - Risyad')

@section('content')
    <!-- Page content-->
    <div class="container">

        
              <p>Showing all articles with category : </p>

        <div class="row">
            @foreach ($category as $item)
            <div class="col-lg-3 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                       <div class="text-center">
                        <span>
                            <a href="{{url('category/'.$item->slug)}}" class="text-decoration-none text-dark">
                             <i class="fas fa-folder fa-5x"></i>
                            </a>
                        </span>
                        <h5 class="card-title mt-2">
                          <a href="{{url('category/'.$item->slug)}}" class="text-decoration-none text-dark">  {{ $item->name}} ({{$item->articles_count}})</a>
                        </h5>
                       </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- {{ $articles->links() }} --}}
    </div>
@endsection
