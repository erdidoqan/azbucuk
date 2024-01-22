@extends('layouts.master')

@section('title', $post->title)
@section('description', $post->description)

@section('title-og', $post->title)

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto pt-md-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dots">
                            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house me-1"></i> Anasayfa</a></li>
                            <li class="breadcrumb-item active">Hakkimizda</li>
                        </ol>
                    </nav>
                    <h1 class="display-4">{{ $post->title }}</h1>
                    <p class="lead">
                        {{ $post->meta_description }}
                    </p>
                    <!-- Info -->
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

                    {!! \Illuminate\Support\Str::markdown($post->detail) !!}

                    <!-- Author info START -->

                </div>
                <!-- Main Content END -->
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
