@extends('layout')

@section('content')
<x-card class="p-10">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Manage Posts
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @if($movies->isEmpty() == false)
                @foreach($movies as $movie)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$movie['title']}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/movies/{{$movie['id']}}/edit" class="text-blue-400 px-6 py-2 rounded-xl">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form method="POST" action="/movies/{{$movie['id']}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-purple-500">
                                    <i class="fa-solid fa-trash"> 
                                        Delete
                                    </i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">
                            No films found
                        </p>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</x-card>
@endsection