@extends('layout')

@section('content')
@include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i>
        Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{$movie->logo ? asset('storage/' . $movie->logo) : asset('/images/pic1.png')}}" alt=""/>

                <h3 class="text-2xl mb-2">
                    {{$movie['title']}}
                </h3>
                
                <div class="text-xl font-bold mb-4">
                    {{$movie['production']}}
                </div>
                            
                <x-movie-tags :allTags="$movie['tags']"/>

                <div class="text-lg mt-4">
                    Year released: {{$movie['year']}}
                </div>

                <div class="text-lg mt-4">
                    Director: {{$movie['director']}}
                </div>

                <div class="text-lg mt-4">
                    Runtime: {{$movie['runtime']}} min
                </div>

                <div class="text-lg my-4">
                    <i class="fa-solid fa fa-globe"></i>
                    {{$movie['country']}}
                </div>
                
                <div class="border border-gray-200 w-full mb-6"></div>
                            
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Film Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$movie['description']}}

                        <div class="mt-2">
                            <h2 style="text-align: left">
                                Actors:
                            </h2>
                            <x-movie-actors :allActors="$movie['actors']"/>
                        </div>
                        <a href="mailto:{{$movie['email']}}" class="block bg-purple-500 text-white mt-6 py-2 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-envelope"></i>
                            Contact person who posted about this film
                        </a>
                    </div>
                </div>

            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/movies/{{$movie['id']}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/movies/{{$movie['id']}}">
                @csrf
                @method('DELETE')
                <button class="text-purple-500">
                    <i class="fa-solid fa-trash"> Delete</i>
                </button>
            </form>
        </x-card>
    </div>
@endsection