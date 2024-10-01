@extends('layout')

@section('content')
<x-card class="p-10">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Promote or demote people on the website
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @if($people->isEmpty() == false)
                @foreach($people as $person)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$person['name']}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$person['role']}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form action="/users/action/{{$person['id']}}" method="POST">
                            @csrf
                            @method('PUT')
                                <label class="inline-block mr-2">
                                    User
                                </label>
                                <input class="form-radio" type="radio" name="role" value="user" {{$person['role'] == 'user' ? 'checked' : ''}}>
                                <br>
                                <label class="inline-block mr-2">
                                    Manager
                                </label>
                                <input class="form-radio" type="radio" name="role" value="manager" {{$person['role'] == 'manager' ? 'checked' : ''}}>
                                <br>
                                {{-- <label class="inline-block mr-2">
                                    Admin
                                </label>
                                <input class="form-radio" type="radio" name="role" value="admin" {{$person['role'] == 'admin' ? 'checked' : ''}}>
                                <br> --}}
                                <button class="mt-2 px-4 py-2 rounded-md bg-red-500 text-white hover:bg-red-600" type="submit">
                                    Change value
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">
                            No one found
                        </p>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</x-card>

<h1 class="text-3xl text-center font-bold my-6 uppercase">
    Download PDF file
</h1>

<div class="flex items-center justify-center m-10">
    <a href="/exportpdf">
        <button type="submit" class="h-25 w-20 text-white rounded-lg bg-purple-500 hover:bg-purple-600">
            Export PDF file
        </button>
    </a>
</div>

<div class="mt-6 p-4">
    {{$people->links()}}
</div>

@endsection