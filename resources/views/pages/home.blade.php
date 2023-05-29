@extends('app')
@section('content')
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-20">

    <div class="mx-0 sm:mx-6">
        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

            <!--Lead Card-->
            @foreach($cars as $car)
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg mb-12">
                    <a href="{{ url('cars/' . $car->id) }}" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full md:w-2/3 rounded-t">
                            <img src="{{ $car->image }}" class="h-full w-full shadow">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">
                                    {{ $car->name }}
                                </div>
                                <p class="text-gray-800 text-base px-6 mb-5">
                                    {{ $car->small_description }}
                                </p>
                                <p class="text-gray-800 text-base px-6 mb-5">
                                    {{ $car->small_description }}
                                </p>
                                <p class="text-gray-800 text-base px-6 mb-5">
                                    {{ $car->small_description }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
