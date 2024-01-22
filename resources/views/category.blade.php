@extends('layouts.master')

{{--@section('title', $post->title)
@section('description', $post->description)
@section('ogimage', $post->image)
@section('ogimage-alt', $post->image_alt)
@section('title-og', $post->title)--}}

@section('content')
    <section class="py-0 py-md-5 overflow-hidden position-relative" style="background-image: url(/assets/images/bg.png); background-position: center center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <!-- Hero title -->
                <div class="col-lg-6 mx-auto pt-5 position-relative">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb breadcrumb-dots">
                            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house me-1"></i> Anasayfa</a></li>
                            @if(isset($category->up))
                            <li class="breadcrumb-item">
                                <a href="{{ route('detail',[$category->up->slug]) }}">{{ $category->up->name }}</a>
                            </li>
                            @endif
                        </ol>
                    </nav>
                    <h1 class="fw-bolder display-2">{{ $category->name }}</h1>
                    <p class="lead mb-0">{{ $category->description }}</p>
                </div>
            </div>
        </div>
        <!-- SVG decoration left -->
        <div class="position-absolute top-50 start-100 translate-middle opacity-1 d-none d-md-block">
            <svg viewBox="0 0 200 200" width="500px" height="500px" xmlns="http://www.w3.org/2000/svg">
                <path fill="#2163E8" d="M70.6,-22.1C78.7,2,63.7,34.5,38.8,52.3C13.9,70.2,-20.9,73.4,-37.9,59.4C-54.9,45.3,-54,14,-44.7,-11.7C-35.5,-37.5,-17.7,-57.7,6.8,-59.9C31.3,-62.1,62.5,-46.3,70.6,-22.1Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>

    <section class="position-relative">
        <!-- SVG decoration right START -->
        <div class="position-absolute top-0 start-0 translate-middle opacity-1">
            <svg viewBox="0 0 200 200" width="500px" height="500px" xmlns="http://www.w3.org/2000/svg">
                <path fill="#d6293e" d="M70.6,-22.1C78.7,2,63.7,34.5,38.8,52.3C13.9,70.2,-20.9,73.4,-37.9,59.4C-54.9,45.3,-54,14,-44.7,-11.7C-35.5,-37.5,-17.7,-57.7,6.8,-59.9C31.3,-62.1,62.5,-46.3,70.6,-22.1Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-between">
                @foreach($category->contents as $key=>$content)
                    @if($key == 0)
                        <div class="col-lg-6">
                            <!-- Card item START -->
                            <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="{{ image($content->image,570,430) }}" alt="{{ $content->image_alt }}">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $content->category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Info -->
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="{{ route('detail',[$content->category->slug,$content->slug]) }}" class="btn-link text-reset fw-bold">{{ $content->title }}</a></h4>
                                    <p class="card-text">{{ $content->description }}</p>
                                </div>
                            </div>
                            <!-- Card item END -->
                        </div>
                    @endif
                @endforeach
                    <div class="col-lg-6">
                    @foreach(collect($category->contents)->slice(1, 4) as $key=>$content)
                        @if($key != 0)
                            <div class="ps-lg-5">
                                <!-- Card item START -->
                                <div class="card mb-4">
                                    <div class="row g-3">
                                        <!-- Card img -->
                                        <div class="col-4 col-sm-3">
                                            <img class="rounded-3" src="{{ image($content->image,120,120) }}" alt="{{ $content->image_alt }}">
                                        </div>
                                        <div class="col-8">
                                            <h5><a href="{{ route('detail',[$content->category->slug,$content->slug]) }}" class="btn-link stretched-link text-reset fw-bold">{{ $content->title }}</a></h5>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider align-items-center small">
                                                <li class="nav-item">
                                                    <div class="nav-link position-relative">
                                                        <span>by <a href="#" class="stretched-link text-reset btn-link">{{ $content->author->full_name }}</a></span>
                                                    </div>
                                                </li>
                                                <!-- Card date -->
                                                <li class="nav-item">Jan 22, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item END -->
                            </div>
                        @endif
                    @endforeach
                    </div>
            </div>
        </div>
    </section>

    @if(isset($category->parent))
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        @foreach($category->parent as $key=>$parent)
                        <li class="nav-item"> <a class="nav-link fs-5 @if($key ==0) active @endif" data-bs-toggle="tab" href="#tab-1-1">{{ $parent->name }}</a> </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        <!-- Most read tab START -->
                        <div class="tab-pane show active" id="tab-1-1">
                            <div class="row">
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    @foreach(footer(0) as $key=>$data)
                                        <!-- Item -->
                                        <div class="d-flex position-relative mb-3">
                                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">0{{ $key+1 }}</span>
                                            <h5><a href="#" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
                                        </div>
                                        <!-- Item -->
                                    @endforeach
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    @foreach(footer(1) as $key=>$data)
                                        <!-- Item -->
                                        <div class="d-flex position-relative mb-3">
                                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">0{{ $key+1 }}</span>
                                            <h5><a href="#" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
                                        </div>
                                        <!-- Item -->
                                    @endforeach
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    @foreach(footer(2) as $key=>$data)
                                        <!-- Item -->
                                        <div class="d-flex position-relative mb-3">
                                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">0{{ $key+1 }}</span>
                                            <h5><a href="#" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
                                        </div>
                                        <!-- Item -->
                                    @endforeach
                                </div>
                                <!-- Tab items group END -->
                            </div>
                        </div>
                        <!-- Most read tab END -->
                        <!-- Trending tab START -->
                        <div class="tab-pane show" id="tab-1-2">
                            <div class="row">
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    @foreach(lasest(2) as $key=>$data)
                                        <!-- Item -->
                                        <div class="d-flex position-relative mb-3">
                                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">0{{ $key+1 }}</span>
                                            <h5><a href="#" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
                                        </div>
                                        <!-- Item -->
                                    @endforeach
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">

                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">

                                </div>
                                <!-- Tab items group END -->
                            </div>
                        </div>
                        <!-- Trending tab END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection

