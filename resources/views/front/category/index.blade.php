@extends('front.layout.template')

@section('title', 'Category '. $category . '- Arifin - Risyad')

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

        
              <p>Showing articles with category : <b>{{ $category }}</b></p>

        <div class="row">
          @forelse ($articles as $item)
          <div class="col-4">
                 <!-- Blog post-->
                 <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/'.$item->slug)}}"><img class="card-img-top post-img" src="{{ asset('storage/back/' . $item->img) }}"
                            alt="..." /></a>
                    <div class="card-body card-height">
                        <div class="small text-muted">
                            {{ $item->created_at->format('d-m-Y') }}
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
        {{ $articles->links() }}
    </div>
@endsection