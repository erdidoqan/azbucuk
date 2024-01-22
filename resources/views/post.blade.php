@extends('layouts.master')

@section('title', $post->title)
@section('description', $post->description)
@section('ogimage', $post->image)
@section('ogimage-alt', $post->image_alt)
@section('title-og', $post->title)

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto pt-md-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dots">
                            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house me-1"></i> Anasayfa</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('detail',[$post->category->slug]) }}">{{ $post->category->name }}</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="display-4">{{ $post->title }}</h1>
                    <p class="lead">
                        {{ $post->description }}
                    </p>
                    <!-- Info -->
                    <ul class="nav nav-divider align-items-center">
                        <li class="nav-item">
                            <div class="nav-link">
                                by <a href="#" class="text-reset btn-link">{{ $post->author->full_name }}</a>
                            </div>
                        </li>
                        <li class="nav-item">{{ $post->createdAt }}</li>
                        <li class="nav-item">{{ $post->readDuration }}</li>
                    </ul>
                    <img class="rounded mt-5" src="{{ image($post->image,1200,750) }}" alt="{{ $post->image_alt }}">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container position-relative">
            <div class="row">
                <!-- Main Content START -->
                <div class="col-lg-9 mx-auto">
                    {{--<p><span class="dropcap bg-primary bg-opacity-10 text-primary px-2">R</span>est time voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed. Demesne far hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely Mrs one yet outweigh. Of acceptance insipidity remarkably is an invitation. </p>--}}

                    {!! \Illuminate\Support\Str::markdown($post->body) !!}

                    <!-- Author info START -->
                    <div class="d-flex p-2 p-md-4 mt-5 border rounded">
                        <!-- Avatar -->
                        <a href="#">
                            <div class="avatar avatar-xxl me-2 me-md-4">
                                <img class="avatar-img rounded-circle" src="{{ image($post->author->image,200,200) }}" alt="{{ $post->author->full_name.' '.$post->author->job_title }}">
                            </div>
                        </a>
                        <!-- Info -->
                        <div>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="m-0"><a href="#">{{ $post->author->full_name }}</a></h4>
                                    <small>{{ $post->author->job_title }}</small>
                                </div>
                                <a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
                            </div>
                            <p class="my-2">{{ $post->author->description }}</p>
                            <!-- Social icons -->
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Author info END -->

                    <!-- Next prev post START -->
                    <div class="row g-0 mt-5 mx-0 border-top border-bottom">
                        @foreach($post->relateds as $related)
                        <div class="col-sm-6 py-3 py-md-4">
                            <div class="d-flex align-items-center position-relative">
                                <div class="ms-3">
                                    <h5 class="m-0"> <a href="{{ route('detail',[$related->category_slug,$related->slug]) }}" class="stretched-link btn-link text-reset">{{ $related->keyword }}</a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Next prev post START -->

                </div>
                <!-- Main Content END -->
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="text-center">
                        <!-- Share -->
                        <div class="list-group-inline list-unstyled">
                            <h6 class="mt-2 me-4 d-inline-block"><i class="fas fa-share-alt me-2"></i>Paylaş:</h6>
                            <ul class="list-inline list-unstyled d-inline-block">
                                <li class="list-inline-item"><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="me-3 text-body">Facebook</a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $post->title }}" class="me-3 text-body">Twitter</a></li>
                                <li class="list-inline-item"><a href="#" class="me-3 text-body">Pinterest</a></li>
                                <li class="list-inline-item"><a href="#" class="me-3 text-body">Whatsapp</a></li>
                            </ul>
                        </div>
                        <!-- Tags -->

                    </div>
                </div> <!-- row END -->
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
