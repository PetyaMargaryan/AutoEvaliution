@extends('app')
@section('content')
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-20">
        <div class="mx-0 sm:mx-6">
            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg mb-12">
                    <div class="w-full md:w-2/3 rounded-t">
                        <img src="{{ $car->image }}" class="h-full w-full shadow">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <div class="w-full font-bold text-xl text-gray-900 px-6 pt-6">
                                {{ $car->name }}
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                {{ $car->small_description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex h-full overflow-hidden shadow-lg text-lg px-6 pb-2">
                    <p>{{ $car->description }}</p>
                </div>
                <div class="flex flex-wrap justify-between pt-5 -mx-6">
                    @for($i = 0; $i <= 1; $i++)
                        <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <img src="{{ $car->small_images[$i] }}" class="h-full w-full rounded-t">
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="flex h-full overflow-hidden shadow-lg pt-12 pb-5 px-6 font-bold">
                    <h3>Similar Vehicles</h3>
                </div>

                @foreach($cars as $car)
                    <div class="flex h-full bg-white rounded overflow-hidden shadow-lg mb-12">
                        <a href="{{ url('cars/' . $car->id) }}" class="flex flex-wrap no-underline hover:no-underline">
                            <div class="w-full md:w-2/3 rounded-t">
                                <img src="{{ $car->image }}" class="h-full w-full shadow">
                            </div>

                            <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <div class="w-full font-bold text-xl text-gray-900 px-6 pt-6">
                                        {{ $car->name }}
                                        {{ $car->name }}
                                        {{ $car->name }}
                                    </div>
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
