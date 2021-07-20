@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create car
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <input 
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="image"
                    placeholder="Upload image...">

                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="name"
                    placeholder="Brand name...">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="founded"
                        placeholder="Founded...">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="description"
                        placeholder="Description...">

                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                        Submit
                    </button>
            </div>
        </form>
    </div>
@endsection