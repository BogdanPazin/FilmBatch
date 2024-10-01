@extends('layout')

@section('content')
<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a post about a film
        </h2>
        <p class="mb-4">
            Enter the details of a film
        </p>
    </header>

    <form method="POST" action="/movies" enctype="multipart/form-data">
    @csrf

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">
                Film Title
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Lion King" value="{{old('title')}}"/>
            @error('title')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="director" class="inline-block text-lg mb-2">
                Director
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="director" value="{{old('director')}}"/>
            @error('director')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="production" class="inline-block text-lg mb-2">
                Production
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="production" value="{{old('production')}}"/>
            @error('production')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="year" class="inline-block text-lg mb-2">
                Year Released
            </label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="year" value="{{old('year')}}"/>
            @error('year')
                <p class="mt-4 text-red-500">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Actors (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="actors" value="{{old('actors')}}"/>
            @error('actors')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="country" class="inline-block text-lg mb-2">
                Country
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="country" value="{{old('country')}}" placeholder="Example: USA, UK, etc"/>
            @error('country')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="runtime" class="inline-block text-lg mb-2">
                Runtime
            </label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="runtime" value="{{old('runtime')}}" placeholder="Please enter the runtime of the film in minutes"/>
            @error('runtime')
                <p class="mt-4 text-red-500">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{old('tags')}}" placeholder="Example: Thriller, Comedy, Romantic, etc"/>
            @error('tags')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Film Poster
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
            @error('logo')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">
                Contact Email
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>
            @error('email')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>
                    
        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Film Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">
                {{old('description')}}
            </textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-purple-500 text-white rounded py-2 px-4 hover:bg-black">
                Create Post
            </button>
            <a href="/" class="text-black ml-4">
                Back
            </a>
        </div>
    </form>
</x-card>
@endsection