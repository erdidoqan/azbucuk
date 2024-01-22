@extends('layouts.master')
@section('content')

    <section class="pt-0 card-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner"
                             data-autoplay="true"
                             data-hoverpause="true"
                             data-gutter="0"
                             data-arrow="true"
                             data-dots="false"
                             data-items="1">
                            <!-- Slide 1 -->
                            @foreach(home(1440)->contents as $key=>$content)
                                @if(isset($content->image))
                                    @if($key < 4)
                                    <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{ image($content->image, 1300,732) }}); background-position: center left; background-size: cover;">
                                        <!-- Card Image overlay -->
                                        <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                            <div class="w-100 mt-auto">
                                                <div class="col-md-10 col-lg-7">
                                                    <!-- Card category -->
                                                    <a href="#" class="badge bg-primary mb-2">{{ $content->category->name }}</a>
                                                    <!-- Card title -->
                                                    <h2 class="text-white display-5"><a href="{{ route('detail',[$content->category->slug,$content->slug]) }}" class="btn-link text-reset fw-normal">{{ $content->title }}</a></h2>
                                                    <p class="text-white">{{ $content->description }}</p>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div class="d-flex align-items-center text-white position-relative">
                                                                    <div class="avatar avatar-sm">
                                                                        <img class="avatar-img rounded-circle" src="{{ image($content->author->image,100,100) }}" alt="{{ $content->author->full_name }}">
                                                                    </div>
                                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{ $content->author->full_name }}</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">{{ $content->created_at }}</li>
                                                        <li class="nav-item">{{ $content->read_duration }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endif
                            @endforeach
                            <!-- Slide 2 -->
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Main hero END -->

    <!-- =======================
    Highlights START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Card item START -->
                    @foreach(home(10080)->contents as $key=>$content)
                        @if(isset($content->image))
                        @if($key < 5)
                            <div class="card border rounded-3 up-hover p-4 mb-4">
                                <div class="row g-3">
                                    <div class="col-lg-5">
                                        <!-- Categories -->
                                        <a href="{{ route('detail',[$content->category->slug]) }}" class="badge text-bg-danger mb-2">{{ $content->category->name }}</a>

                                        <!-- Title -->
                                        <h2 class="card-title">
                                            <a href="{{ route('detail',[$content->category->slug,$content->slug]) }}" class="btn-link text-reset stretched-link">{{ $content->title }}</a>
                                        </h2>
                                        <!-- Author info -->
                                        <div class="d-flex align-items-center position-relative mt-3">
                                            <div class="avatar me-2">
                                                <img class="avatar-img rounded-circle" src="{{ image($content->author->image,100,100) }}" alt="{{ $content->author->full_name }}">
                                            </div>
                                            <div>
                                                <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">{{ $content->author->full_name }}</a></h5>
                                                <ul class="nav align-items-center small">
                                                    <li class="nav-item me-3">{{ $content->created_at }}</li>
                                                    <li class="nav-item"><i class="far fa-clock me-1"></i>{{ $content->read_duration }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detail -->
                                    <div class="col-md-6 col-lg-4">
                                        <p>
                                            {{ \Illuminate\Support\Str::words($content->cleanBody,50) }}
                                        </p>
                                    </div>
                                    <!-- Image -->
                                    <div class="col-md-6 col-lg-3">
                                        <img class="rounded-3" src="{{ image($content->image,1000,750) }}" alt="{{ $content->title }}">
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Highlights END -->

    <!-- =======================
    Adv START -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="d-block card-img-flash">
                        <img src="/assets/images/banner_ad.png" alt="">
                    </a>
                    <small class="text-end d-block mt-1">Advertisement</small>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Adv END -->

    <!-- =======================
    Small post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <!-- Card item START -->
                @foreach(home(60)->contents as $key=>$content)
                    @if(isset($content->image))
                        <div class="col-sm-6 col-lg-3">
                            <div class="card mb-4">
                                <!-- Card img -->
                                <div class="card-fold position-relative">
                                    <img class="card-img" src="{{ image($content->image,470,400) }}" alt="{{ $content->title }}">
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <h4 class="card-title"><a href="{{ route('detail',[$content->category->slug,$content->slug]) }}" class="btn-link text-reset stretched-link fw-bold">{{ $content->title }}</a></h4>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center text-uppercase small">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link text-reset btn-link">{{ $content->author->full_name }}</a>
                                        </li>
                                        <li class="nav-item">{{ $content->created_at }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- =======================
    Small post END -->

    <!-- =======================
    Tab post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link fs-5 active" data-bs-toggle="tab" href="#tab-1-1"> <i class="fab fa-readme me-2"></i> Çok Okunanlar </a> </li>
                        <li class="nav-item"> <a class="nav-link fs-5" data-bs-toggle="tab" href="#tab-1-2"> <i class="fas fa-fire me-2"></i> Trendler </a> </li>
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
                                        <h5><a href="{{ route('detail',[$data->category_slug,$data->slug]) }}" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
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
                                            <h5><a href="{{ route('detail',[$data->category_slug,$data->slug]) }}" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
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
                                            <h5><a href="{{ route('detail',[$data->category_slug,$data->slug]) }}" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
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
                                            <h5><a href="{{ route('detail',[$data->category_slug,$data->slug]) }}" class="stretched-link text-reset btn-link">{{ $data->name }}</a></h5>
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
@endsection

@section('ldjson')
    <!-- Google Yapısal Veri İşaretleme Yardımcısı tarafından oluşturulan JSON-LD işaretlemesi. -->
    <script type="application/ld+json">
[
	{
		"@context": "http://schema.org",
		"@type": "ProfessionalService",
		"url": "https://www.azbucuk.com/",
		"logo": "",
		"description": "",
        "telephone": "-",
        "name": "Azbucuk",
        "image": "",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Koşuyolu Mah 34784 Kadıköy / İstanbul",
            "addressLocality": "Kadıköy",
            "addressRegion": "İstanbul",
            "postalCode":"34888"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "41.030653",
            "longitude": "29.111801"
        },
		"contactPoint": [
			{
				"@type": "ContactPoint",
				"telephone": "-",
				"contactType": "customer service"
			},
			{
				"@type": "ContactPoint",
				"telephone": "-",
				"contactType": "sales"
			},
			{
				"@type": "ContactPoint",
				"telephone": "-",
				"contactType": "technical support"
			}
		],
		"sameAs": [
			"https://facebook.com/azbucuksosyal", "https://twitter.com/azbucuk", "https://instagram.com/azbucuksosyal"		]
	},
	{
		"@context": "http://schema.org",
		"@type": "WebSite",
		"name": "Azbucuk",
		"alternateName": "Azbucuk sosyal içerik",
		"url": "https://www.azbucuk.com/"
	}
]
</script>
@endsection
