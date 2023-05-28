@extends('layouts.app')
@section('title', 'Главная')
@section('content')

    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <div class="relative h-56 overflow-hidden  md:h-96">
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="{{asset('images/carousel_1.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="{{asset('images/carousel_2.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="{{asset('images/carousel_3.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="{{asset('images/carousel_4.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="{{asset('images/carousel_5.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>

    <h2 class="text-4xl mt-1 font-bold text-center dark:text-white">Свежие статьи</h2>
    <hr class="mt-2">

    <div class="wrapper flex-wrap flex justify-around mt-2">
        @foreach($allCategories as $allCategory)
        <div class="max-w-sm bg-white mb-3 border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{$allCategory->slug}}">
                <img class="" src="{{asset('images/46.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl  font-bold tracking-tight text-gray-900 dark:text-white">{{$allCategory->title}}</h5>
                </a>
                <span class="bg-indigo-100  text-indigo-800 text-base p-1 font-medium mt-2 mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$allCategory->category->category_name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="text-white text-base mt-2 w-full bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium  px-5 py-2.5 text-center mr-2 mb-2">Все статьи</button>

    <h4 class="mb-4 text-center font-extrabold text-gray-900 dark:text-white text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">#Техника</span></h4>
    <hr class="mt-2">
    <div class="wrapper flex-wrap flex justify-around  mt-2">
        @foreach($technologies as $technology)
        <div class="max-w-sm mb-3 bg-white border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="" src="{{asset('images/46.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$technology->title}}</h5>
                </a>
                <span class="bg-indigo-100  text-indigo-800 text-base p-1 font-medium mt-2 mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$technology->category->category_name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="text-white text-base mt-2 w-full bg-gradient-to-br to-emerald-600 from-sky-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium  px-5 py-2.5 text-center mr-2 mb-2">Все про #технологии</button>

    <h4 class="mb-4 text-center font-extrabold text-gray-900 dark:text-white text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-purple-600 from-indigo-500">#Видеоигры</span></h4>
    <hr class="mt-2">
    <div class="wrapper flex-wrap flex justify-around  mt-2">
        @foreach($videogames as $videogame)
        <div class="max-w-sm mb-3 bg-white border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="" src="{{asset('images/46.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$videogame->title}}</h5>
                </a>
                <span class="bg-indigo-100  text-indigo-800 text-base p-1 font-medium mt-2 mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$videogame->category->category_name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="text-white text-base mt-2 w-full bg-gradient-to-br to-purple-600 from-indigo-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium  px-5 py-2.5 text-center mr-2 mb-2">Все про #видеоигры</button>

    <h4 class="mb-4 text-center font-extrabold text-gray-900 dark:text-white text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-yellow-400 from-orange-500">#Кинематограф</span></h4>
    <hr class="mt-2">
    <div class="wrapper flex-wrap flex justify-around  mt-2">
        @foreach($cinematography as $cinema)
        <div class="max-w-sm mb-3 bg-white border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="" src="{{asset('images/46.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$cinema->title}}</h5>
                </a>
                <span class="bg-indigo-100  text-indigo-800 text-base p-1 font-medium mt-2 mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$cinema->category->category_name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="text-white text-base mt-2 w-full bg-gradient-to-br to-yellow-400 from-orange-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium  px-5 py-2.5 text-center mr-2 mb-2">Все про #кино</button>

    <h4 class="mb-4 text-center font-extrabold text-gray-900 dark:text-white text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-red-500 from-red-700">#Музыка</span></h4>
    <hr class="mt-2">
    <div class="wrapper flex-wrap flex justify-around  mt-2">
        @foreach($musics as $music)
        <div class="max-w-sm mb-3 bg-white border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="" src="{{asset('images/46.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$music->title}}</h5>
                </a>
                <span class="bg-indigo-100  text-indigo-800 text-base p-1 font-medium mt-2 mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$music->category->category_name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="text-white text-base mt-2 w-full bg-gradient-to-br to-red-500 from-red-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium  px-5 py-2.5 text-center mr-2 mb-2">Все про #музыку</button>

    <h4 class="mb-4 text-center font-extrabold text-gray-900 dark:text-white text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-green-500 from-emerald-700">#Массовая культура</span></h4>
    <hr class="mt-2">
    <div class="wrapper flex-wrap flex justify-around  mt-2">
       @foreach($mass_culture as $masscult)
        <div class="max-w-sm bg-white border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="" src="{{asset('images/46.jpg')}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$masscult->title}}</h5>
                </a>
                <span class="bg-indigo-100  text-indigo-800 text-base p-1 font-medium mt-2 mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{$masscult->category->category_name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="text-white text-base mt-2 w-full bg-gradient-to-br to-green-500 from-emerald-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium  px-5 py-2.5 text-center mr-2 mb-2">Все про #массовую культуру</button>
@endsection
