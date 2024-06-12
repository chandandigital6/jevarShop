
@extends('frontLayouts.main')
@section('title', 'About')
@section('content')


    <!--About Start-->

    <section class="bg-yellow-200 text-gray-900">
        @foreach($about->take(1) as $abouts)


            <div class="container mx-auto px-6 py-12 md:flex md:items-center">
                <div class="md:w-1/2 md:pr-12 animate-fadeIn">
                    <h1 class="text-5xl font-bold leading-tight mb-4">
                        {{$abouts->title}} <br> <span class="text-6xl text-gray-700">{{$abouts->heading}}</span>
                    </h1>
                    <p class="text-lg leading-relaxed mb-6">
                        {!! $abouts->description !!}
                    </p>

                </div>
                <div class="md:w-1/2 mt-8 md:mt-0 animate-fadeIn">
                    <img src="{{asset('storage/'.$abouts->image)}}" alt="Jewelry Image" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        @endforeach
    </section>


    <!--About End-->


    <!--Banner Start-->

    <div class="flex items-center justify-center bg-white min-h-screen relative overflow-hidden">
        <div class="w-full max-w-6xl p-4 sm:p-6 lg:p-8">
            <img src="{{asset('asset/img/banner-1.jpg')}}" alt="Banner Image"
                 class="w-full rounded-lg shadow-lg transition-transform duration-500 transform hover:scale-105">
        </div>
    </div>

    <!--Banner End-->



    <!--About Proprietor Start-->

    <div class="bg-red-100 py-12">
        @foreach($about->skip(4)->take(1) as $aboutDatA)
        <div class="container mx-auto px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-left text-black">{{$aboutDatA->title}}</h2>
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/3 text-center">
                    <img src="{{asset('storage/'.$aboutDatA->image)}}" alt="Proprietor Image"
                         class="w-full rounded-lg shadow-lg mb-4">
                    <h4 class="font-bold text-2xl text-black">{{$aboutDatA->heading}}</h4>

                </div>
                <div class="md:w-2/3 text-black mb-40">


                    <p class="text-lg leading-relaxed">
                    {!! $aboutDatA->description !!}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <!--About Proprietor End-->



    <!--Why Buy From Us? Start-->


    <div class="bg-gray-100 animate-fadeInFromTop">
        <div class="container mx-auto py-16">
            @foreach($homeSection as $section)


                <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">{{$section->title}}</h1>
                <p class="text-center mb-12 mx-auto max-w-2xl text-gray-600">
                    {!! $section->msg !!}

                </p>
            @endforeach
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($plans as $plan)


                    <div
                        class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('storage/'.$plan->image)}}" alt="Exclusive Collections"
                             class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-2">{{$plan->title}}</h2>
                        <p class="text-gray-500">{{$plan->msg}}.</p>
                    </div>

                @endforeach



            </div>
        </div>
    </div>


    <!--Why Buy From Us? End-->



    <!--Map Start-->


    <div class="bg-gray-100 text-gray-500 py-6">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4 text-center">Interactive Map</h2>
            <div class="w-full h-96 md:h-400px">
                <!-- Replace the src attribute with your map embed code -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.8977999071974!2d-122.41941548468712!3d37.77492997975781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e59009e0f03%3A0x73a9d81f161674f!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1628561587444!5m2!1sen!2sus"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>


    <!--Map End-->


@endsection
