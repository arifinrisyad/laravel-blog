@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Article Blog Arifin Risyad, Seputar Pemrograman dan Teknologi Terbaru">
    <meta name="keyword" value="list article blog laravel, article blog laravel tugas, artikel blog laravel">
    <meta property="og:site_title" content="Article Blog - Arifin Risyad" />
    <meta property="og:url" value="{{url()->current()}}">
    <meta property="og:site_name" content="Blog Laravel" />
    <meta property="og:description" value="Article Blog Arifin Risyad, Seputar Pemrograman dan Teknologi Terbaru">
    <meta property="og:image" value="https://mubatekno.com/mubatekno-logo.png">
@endpush


@section('title', 'Article Blog - Arifin Risyad')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="mb-3">
            <form action="{{ route('search')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search articles..." />
                    <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                </div>
            </form>
        </div>

          @if ($keyword)
              <p>Showing articles with keyword : <b>{{ $keyword }}</b></p>
              <a href="{{url('articles')}}" class="btn btn-secondary btn-sm mb-4">Reset</a>
          @endif

        <div class="row">
          @forelse ($article as $item)
          <div class="col-lg-4" data-aos="flip-up">
                 <!-- Blog post-->
                 <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/'.$item->slug)}}"><img class="card-img-top post-img" src="{{ asset('storage/back/' . $item->img) }}"
                            alt="..." /></a>
                    <div class="card-body card-height">
                        <div class="small text-muted">
                            {{ $item->created_at->format('d-m-Y') }} | {{$item->User->name}} |
                            <a href="{{ url('category/' . $item->category->slug) }}">
                                {{ $item->Category->name }}</a>
                        </div>
                        <h1 class="card-title h4">{{ $item->title }}</h1>
                        <p class="card-text">{{ Str::limit(strip_tags($item->desc), 200, '...') }}</p>
                        <a class="btn btn-primary" href="{{ url('p/'.$item->slug)}}">Read more →</a>
                    </div>
                </div>
          </div>
          @empty
              <h3>Not found</h3>
          
          @endforelse
        </div>
        {{ $article->links() }}
    </div>
@endsection
