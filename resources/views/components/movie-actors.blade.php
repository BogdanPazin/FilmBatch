@props(['allActors'])
@php
    $actors = explode(',', $allActors);
@endphp

<ul class="flex">
    @foreach($actors as $actor)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?actor={{$actor}}">
                {{$actor}}
            </a>
        </li>
    @endforeach
</ul>