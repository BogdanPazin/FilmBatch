@props(['movie'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$movie->logo ? asset('storage/' . $movie->logo) : asset('/images/pic1.png')}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/movies/{{$movie['id']}}">
                    {{$movie['title']}}
                </a>
            </h3>
            <div class="text-xl font-bold mb-4">
                {{$movie['production']}}
            </div>
            
            <x-movie-tags :allTags="$movie['tags']"/>

            <div class="text-lg mt-4">
                Year released: {{$movie['year']}}
            </div>

            <div class="text-lg mt-4">
                Runtime: {{$movie['runtime']}} min
            </div>
            
            <div class="text-lg mt-4">
                <i class="fa-solid fa fa-globe"></i> 
                {{$movie['country']}}
            </div>
        </div>
    </div>
</x-card>