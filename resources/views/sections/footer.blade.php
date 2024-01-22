<footer class="bg-dark pt-5">
    <div class="container">
        <!-- About and Newsletter START -->
        <div class="row pt-3 pb-4">
            <div class="col-md-3">
                <img src="/base/logo.png" alt="footer logo">
            </div>
            <div class="col-md-5">
                <p class="text-body-secondary">
                    Azbucuk, sosyal medyanın nabzını tutan birinci sınıf içerikleri sunar. Güncel filmler, dizi önerileri,
                    müzik dünyasından haberler ve daha fazlası için takipte kalın!
                </p>
            </div>
            <div class="col-md-4">
                <!-- Form -->
                <form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
                    <div class="col-12">
                        <input type="email" class="form-control" placeholder="E-posta adresinizi giriniz">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary m-0">Abone Ol</button>
                    </div>
                    <div class="form-text mt-2">
                        Abone olarak <a href="#" class="text-decoration-underline text-reset">Gizlilik Politikamızı</a> kabul etmiş olursunuz.
                    </div>
                </form>
            </div>
        </div>
        <!-- About and Newsletter END -->

        <!-- Divider -->
        <hr>

        <div class="row pt-5">
            <h5 class="mb-2 text-white">Trendler</h5>
            <ul class="list-inline text-primary-hover lh-lg">
                @foreach(footer(0) as $key=>$data)
                    <li class="list-inline-item">
                        <a href="{{ route('detail',[$data->category_slug,$data->slug]) }}">{{ $data->name }}</a>
                    </li>
                @endforeach
                @foreach(footer(1) as $key=>$data)
                    <li class="list-inline-item">
                        <a href="{{ route('detail',[$data->category_slug,$data->slug]) }}">{{ $data->name }}</a>
                    </li>
                @endforeach
                @foreach(footer(2) as $key=>$data)
                    <li class="list-inline-item">
                        <a href="{{ route('detail',[$data->category_slug,$data->slug]) }}">{{ $data->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Widgets END -->
        <hr>
        <!-- Hot topics START -->
        <div class="row">
            <h5 class="mb-2 text-white">Kategoriler</h5>
            <ul class="list-inline text-primary-hover lh-lg">
                @foreach(category() as $category)
                    <li class="list-inline-item">
                        <a href="{{ route('detail',[$category->slug]) }}">{{ $category->name }}</a>
                    </li>
                    @foreach($category->parent as $subcategory)
                        | <li class="list-inline-item"><a href="{{ route('detail',[$subcategory->slug]) }}">{{ $subcategory->name }}</a></li>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <!-- Hot topics END -->
    </div>

    <!-- Footer copyright START -->
    <div class="bg-dark-overlay-3 mt-5">
        <div class="container">
            <div class="row align-items-center justify-content-md-between py-4">
                <div class="col-md-6">
                    <!-- Copyright -->
                    <div class="text-center text-md-start text-primary-hover text-body-secondary">©2023 <a href="https://www.azbucuk.com/" class="text-reset btn-link" target="_blank">Azbucuk</a>. Tüm hakları saklıdır
                    </div>
                </div>
                <div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">
                    <!-- Language switcher -->

                    <!-- Links -->
                    <ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('tos') }}">Şartlar ve koşullar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('gp') }}">Gizlilik Politikası</a></li>
                        <li class="nav-item"><a class="nav-link pe-0" href="{{ route('contact') }}">Bize Ulaşın</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer copyright END -->
</footer>
