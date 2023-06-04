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
        class="c-container bg-cLightGrey bg-cover bg-center bg-[url('/public/assets/tentang-kami/tentang-kami-bg-1.png')] py-6 sm:py-8 md:py-10 lg:py-12 xl:py-14 2xl:py-16 flex justify-center items-center">
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
            <img class="w-40 sm:w-44 lg:w-48" src="{{ asset('assets/logo/asetaset-full.png') }}" alt="logo">
            <p class="text-justify text-sm sm:text-lg lg:text-xl font-normal">
                asetaset.com adalah solusi daring yang inovatif untuk mempermudah akses dan transparansi dalam mencari aset yang sedang dalam tahap pra-pailit di Indonesia. Kami hadir dengan tujuan memberikan layanan yang luas dan terpercaya kepada masyarakat umum serta pihak-pihak yang berkepentingan. Dengan menggunakan platform kami, Anda akan merasakan efisiensi dan kehandalan dalam mengelola proses pembelian aset, baik untuk keperluan perusahaan maupun individu. Melalui asetaset.com, Anda dapat dengan mudah mengakses informasi detail tentang aset yang tersedia, serta berkomunikasi langsung dengan pihak yang terkait untuk memulai proses pembelian. Kami menyediakan sistem yang memudahkan Anda untuk menemukan dan memperoleh aset yang diinginkan dengan cepat dan tanpa kesulitan. Dengan fokus pada transparansi dan kemudahan komunikasi, kami berkomitmen untuk memberikan pengalaman yang memuaskan dalam menjalankan proses pembelian aset Anda. Saatnya menciptakan efisiensi dan keterbukaan dalam mencari aset yang tepat. Bergabunglah dengan asetaset.com sekarang dan temukan solusi yang andal untuk kebutuhan aset Anda.
            </p>
        </div>
    </section>

    <section class="bg-cover bg-center bg-[url('/public/assets/tentang-kami/tentang-kami-bg-2.png')]">
        <div
            class="c-container py-6 sm:py-8 md:py-10 lg:py-12 xl:py-14 2xl:py-16  flex flex-col justify-center items-start h-[200px] sm:h-[250px] md:h-[300px] lg:h-[350px] xl:h-[400px] gap-2 sm:gap-4 lg:gap-6 bg-cWhite/20">
            <h2 class="text-cGold font-medium text-base sm:text-xl lg:text-2xl text-center">asetaset.com</h2>
            <h1 class="font-medium text-2xl sm:text-3xl lg:text-4xl text-cBlack">Jangan Ragu Untuk Menghubungi Kami</h1>
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
    <section class="my-8 lg:my-16 xl:my-32  bg-cLightGrey">
        <div class="py-6 sm:py-8 md:py-10 lg:py-12 xl:py-14 2xl:py-16 px-12 sm:px-16 md:px-20 lg:px-24 xl:px-28 2xl:px-32">
            <div id="bottom-splide" class="splide" role="group">
                {{-- <ul class="splide__pagination"></ul> --}}
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide" alt="">
                            <img class="w-full h-full object-contain"
                                src="https://images.unsplash.com/photo-1679678691328-54929d271c3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxzZWFyY2h8MXx8bmF0dXJlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </li>
                        <li class="splide__slide"><img class="w-full h-full object-contain"
                                src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80"
                                alt=""></li>
                        <li class="splide__slide"><img class="w-full h-full object-contain"
                                src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bmF0dXJlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="{{ asset('js/tentang-kami.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
