@extends('template.template')

@section('head')
    {{-- css --}}

    <!-- javascript -->

@endsection

@section('body')
    <h1 class="text-3xl font-bold underline">
        View carousel
    </h1>

    <table style="border:1px solid black">
        <th>
            <td>id</td>
            <td>title</td>
            <td>image</td>
            <td>link</td>
            <td>action</td>
        </th>
            <tr>
                <td>{{$carousel->id}}</td>
                <td>{{$carousel->title}}</td>
                <td>
                    <img src="{{asset('/storage/asset/slideshow/'.$carousel->slideshow)}}" class="object-fit-contain rounded card-img-top" style="width: 300px" alt="carousel">
                </td>
                <td>{{$carousel->link}}</td>
                <td>
                    <a href="{{route('edit-carousel', ['id'=>$carousel->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    <form action="{{route('delete-carousel', ['id'=>$carousel->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
    </table>
@endsection
