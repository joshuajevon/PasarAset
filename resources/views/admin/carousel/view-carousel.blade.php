@extends('template.admin-template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="manage-slideshows" />

        <div
            class="flex flex-col justify-center items-start gap-8 w-full c-container py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16">

            <a href="{{ route('carousel') }}" class="gold-btn flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>

                Kembali</a>

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-bold text-cGold">View Slideshow</h1>


            <table class="w-full divide-y-2 divide-cGold bg-white text-sm border border-cGold table-auto">
                <thead class="text-left text-base">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium">
                            Title
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium">
                            Image
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium">
                            Link
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-cGold text-sm">
                    <tr>
                        <td class="whitespace-nowrap px-4 py-2">{{ $carousel->title }}</td>
                        <td class="whitespace-nowrap px-4 py-2">
                            <img src="{{ asset('/storage/asset/slideshow/' . $carousel->slideshow) }}"
                                class="object-fit-contain rounded card-img-top" style="width: 300px" alt="carousel">
                        </td>
                        <td class="whitespace-nowrap px-4 py-2">{{ $carousel->link }}</td>
                        <td class="whitespace-nowrap px-4 py-2">
                            <a href="{{ route('edit-carousel', ['id' => $carousel->id]) }}"><button type="submit"
                                    class="bg-blue-200 py-2 px-4 rounded-lg hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)] mr-2">Edit</button></a>
                            <form class="inline" action="{{ route('delete-carousel', ['id' => $carousel->id]) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="bg-red-200 py-2 px-4 rounded-lg hover:bg-[linear-gradient(rgb(0_0_0/10%)_0_0)]">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
