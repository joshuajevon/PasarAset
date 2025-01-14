@extends('template.template')

@section('head')
    {{-- Splide --}}
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/tentang-kami.css') }}?t={{ env('VERSION_TIME') }}">
@endsection

@section('body')
    <x-navigation-bar page="tentang-kami" />

    {{-- Search Bar --}}
    <section class="c-container flex justify-center items-center pt-32 pb-16">
        <x-search-bar />
    </section>

    <section
        class="c-container bg-cLightGrey bg-cover bg-center py-6 sm:py-8 md:py-10 lg:py-12 xl:py-14 2xl:py-16 flex justify-center items-center"
        style="background-image: url('{{ asset('assets/tentang-kami/tentang-kami-bg-1.png') }}')">
        <div
            class="flex flex-col justify-center items-center h-[200px] sm:h-[250px] md:h-[300px] lg:h-[350px] xl:h-[400px] gap-2">
            <h2 class="text-cGold font-medium text-base sm:text-xl lg:text-2xl text-center">asetaset.com</h2>
            <h1
                class="font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl text-cWhite text-center">
                Tentang Kami</h1>
        </div>
    </section>

    <section class="c-container py-8 lg:py-16 xl:py-32 flex flex-col gap-8 lg:gap-12 xl:gap-16">
        {{-- Title --}}
        <x-page-title title="Tentang Kami" />

        <div class="flex flex-col justify-center items-start gap-4 sm:gap-6 lg:gap-8 sm:w-4/5 self-end">
            <img class="w-28 sm:w-32 md:w-36 lg:w-40 xl:w-44 2xl:w-48" src="{{ asset('assets/logo/asetaset-full.png') }}"
                alt="logo">
            <p class="text-justify text-sm sm:text-lg lg:text-xl font-normal">
                asetaset.com adalah solusi daring yang memberikan dan menyediakan informasi aset-aset di mana Debitor atau Pemiliknya atau Pemegang Haknya sedang dalam status Penundaan Kewajiban Pembayaran Utang atau Pailit. Kami hadir dengan tujuan memberikan layanan yang luas dan terpercaya kepada masyarakat umum serta pihak-pihak yang berkepentingan.
                <br><br>
                Dengan menggunakan <span class="italic">platform</span> kami, Anda akan mendapatkan informasi yang efektif,
                efisien, dan andal dalam
                pengelolaan jual beli aset. Melalui asetaset.com, Anda dapat dengan mudah mengakses informasi rinci tentang
                aset yang tersedia, serta berkomunikasi langsung dengan pihak yang terkait untuk memulai proses jual beli.
                Kami menyediakan sistem yang memudahkan Anda untuk menemukan dan memperoleh aset yang diinginkan dengan
                cepat dan tanpa kesulitan. Dengan fokus pada transparansi dan kemudahan komunikasi, kami berkomitmen untuk
                memberikan pengalaman yang memuaskan dalam menjalankan proses jual beli aset Anda. Saatnya menciptakan
                efisiensi dan keterbukaan dalam mencari aset yang tepat.

            </p>
        </div>
    </section>

    <section class="bg-cover bg-center"
        style="background-image: url('{{ asset('assets/tentang-kami/tentang-kami-bg-2.png') }}')">
        <div
            class="c-container py-6 sm:py-8 md:py-10 lg:py-12 xl:py-14 2xl:py-16  flex flex-col justify-center items-start h-[200px] sm:h-[250px] md:h-[300px] lg:h-[350px] xl:h-[400px] gap-2 sm:gap-4 lg:gap-6">
            <img class="w-28 sm:w-32 md:w-36 lg:w-40 xl:w-44 2xl:w-48" src="{{ asset('assets/logo/asetaset-full.png') }}"
                alt="logo">
            <h1 class="font-medium text-2xl sm:text-3xl lg:text-4xl text-cBlack">Butuh Bantuan?</h1>
            {{-- <h2 class="hidden xl:block text-xl sm:text-2xl lg:text-3xl text-cBlack">Jangan Ragu Untuk Menghubungi Kami</h2> --}}
            <a class="gold-btn group relative inline-flex items-center overflow-hidden px-10 focus:outline-none text-base sm:text-lg lg:text-xl"
                href="/hubungi-kami">
                <span class="absolute -end-full transition-all group-hover:end-4">
                    <svg class="h-4 sm:h-5 lg:h-6 aspect-square rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>

                <span class="transition-all group-hover:me-4">
                    Hubungi Kami
                </span>
            </a>
        </div>
    </section>

    {{-- Carousel --}}
    @if ($carousels->count() > 0)
        <section class="my-8 lg:my-16 xl:my-32  bg-cLightGrey">
            <div class="py-6 sm:py-8 md:py-10 lg:py-12 xl:py-14 2xl:py-16 c-container">
                <div id="bottom-splide" class="splide" role="group">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($carousels as $carousel)
                                <li class="splide__slide" alt="">
                                    <a class="splide__item transition-opacity hover:opacity-80" href="{{ $carousel->link }}"
                                        target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset('storage/asset/slideshow/' . $carousel->slideshow) }}"
                                            class="w-full h-full object-contain" alt="{{ $carousel->title }}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="{{ asset('js/tentang-kami.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
