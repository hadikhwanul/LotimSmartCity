@extends('Guest.layouts.mainGuest')

@section('main')

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $judul }}</h2>
            <ol>
                <li><a href="/">{{ $kategori }}</a></li>
                <li>{{ $judul }}</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<main id="main" class="clearfix">
    <div class="container">

        <header class="section-header">
            <h3>{{ $judul }}</h3>
            <p>Temukan Berita Terbaru Tentang lombok timur disini</p>
        </header>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/Berita">
                    @if (request('tag'))
                    <input type="hidden" name="tag" value="{{ request('tag') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">search</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($posts->count())
        <div class="card mb-3 " >
            @if ($posts[0]->image)
            <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top" alt=""
                style="max-height: 350px; overflow: hidden;">
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->tag->name }}" class="card-img-top"
                alt="{{ $posts[0]->tag->name }}">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/Berita/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p><small class="text-muted"> <a href="/Berita?tag={{ $posts[0]->tag->slug }}"
                            class="text-decoration-none">{{ $posts[0]->tag->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/Berita/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3" >
                <div class="card">
                    <div class="position-absolute py-2 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/Berita?tag={{ $post->tag->slug }}"
                            class="text-decoration-none text-white">{{ $post->tag->name }}</a>
                    </div>
                    @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt=""
                        style="max-height: 400px; overflow: hidden;">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->tag->name }}" class="card-img-top"
                        alt="{{ $post->tag->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="/Berita/{{ $post->slug }}"
                                class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <p><small class="text-muted">
                                {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/Berita/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center fs-4">No Post Found.</p>
        @endif
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>
    </section><!-- End dimensi Section -->
</main><!-- End #main -->


@endsection
