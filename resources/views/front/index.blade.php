
@extends('frontLayouts.main')
@section('title', 'Home - Repair')


    @section('content')



        <!--Slider Start-->

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                @foreach($banner as $index => $baner)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($banner as $index => $baner)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/'.$baner->image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!--Slider End-->






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


        <!--Browse Our Popular Collections Start-->

        <div class="w-full mx-auto py-12 bg-red-100">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-8">Browse Our Popular Collections</h1>
            <div class="md:w-90 mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 w-5/6">

                <!-- Rings Card -->
                @foreach($services as $service)


                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('storage/'.$service->image)}}" alt="Rings" class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">{{$service->title}}</h3>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#"
                           class="bg-green-500 text-white p-3 rounded-full hover:bg-green-600 transition-colors duration-300 flex items-center justify-center"
                           aria-label="Contact via WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#"
                           class="bg-red-500 text-white p-3 rounded-full hover:bg-red-600 transition-colors duration-300 flex items-center justify-center"
                           aria-label="Contact via Phone">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="#"
                           class="bg-yellow-500 text-white px-6 py-2 rounded-full hover:bg-yellow-600 transition-colors duration-300 flex items-center justify-center">
                            View Products
                        </a>
                    </div>
                </div>
                @endforeach


                <!-- Bracelets Card -->

                <!-- Pendant Set Card -->

                <!-- Bangles Card -->

            </div>
        </div>

        <!--Browse Our Popular Collections End-->



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



        <!--ENJOY THE MOMENT START-->

        <div class="bg-red-100 animate-fadeInFromTop">
            @foreach($about->skip(1)->take(1) as $aboutData)


            <div class="container mx-auto py-16 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 p-6 text-center md:text-left">
                    <h1 class="text-4xl md:text-7xl font-bold text-gray-800 mb-6">{{$aboutData->title}}</h1>
                    <p class="text-gray-700 mb-6 text-2xl">
                     {!! $aboutData->description !!}
                    </p>>
                    <button
                        class="mt-4 bg-yellow-500 text-white py-2 px-6 rounded-full hover:bg-yellow-600 hover:shadow-lg transition duration-300">Explore
                        Our Collection</button>
                </div>
                <div class="md:w-1/2">
                    <img src="{{asset('storage/'.$aboutData->image)}}" alt="Woman with Jewellery" class="w-full rounded-lg">
                </div>
            </div>
            @endforeach
        </div>

        <!--ENJOY THE MOMENT END-->




        <!--OUR BEST SMILES START-->


        <div class="bg-black text-white animate-fadeInFromTop"
             style="background-image: url('public/asset/img/bg-smile.png'); background-size: cover; background-position: center; height: 350px;">
            <div class="container mx-auto py-16 flex flex-col md:flex-row items-center">
                <div>
                    <h1 class="text-5xl font-bold mb-6">OUR BEST SMILES</h1>
                    <p class="text-gray-400 mb-6">Experience artisanal joy for the vibrant soul.</p>
                    <button class="mt-5 bg-yellow-500 text-black py-2 px-6 rounded-full animate-fadeInFromBottom hover:bg-rose-gold hover:shadow-lg transition duration-300">
                        Discover More
                    </button>
                </div>
            </div>
        </div>



        <!--OUR BEST SMILES END-->


        <!--Your Organization Name Start-->


        <div class="container mx-auto p-4">
            @foreach($about->skip(2)->take(1) as $aboutDatA)
            <div class="flex flex-col md:flex-row items-center">
                <div class="mb-4 md:mb-0 md:w-1/2 md:order-1">
                    <img src="{{asset('storage/'.$aboutDatA->image)}}" alt="Your Logo" class="h-30 md:h-40 lg:h-40 xl:h-50 rounded-lg ">
                </div>
                <div class="md:w-1/2 md:order-2 fade-in-right overflow-auto">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2 text-gray-900">{{$aboutDatA->title}}</h1>
                    <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                     {!! $aboutDatA->description !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>


        <!--Your Organization Name End-->


        <!--Handmade Jewellery Start-->

        <div class="bg-red-100 py-6 animate-fadeInFromTop">
            <div class="container mx-auto">
                @foreach($about->skip(3)->take(1) as $aboutDatA)
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 mb-6 md:mb-0 mt-20">
                        <h1 class="mb-4 text-5xl">
                            <span>{{$aboutDatA->title}}</span><br>

                        <p class="text-lg leading-relaxed mb-4 text-black">
                          {!! $aboutDatA->description !!}
                        </p>
                        <a class="btn btn-sm py-2 px-4 rounded-full bg-yellow-500 text-white hover:bg-yellow-600 transition duration-300"
                           href="#">
                            Our Collection
                        </a>
                    </div>
                    <div class="md:w-1/2 fade-in-right">
                        <img src="{{asset('storage/'.$aboutDatA->image)}}" alt="Handmade Jewellery"
                             class="w-full rounded-lg">
                    </div>
                </div>
                @endforeach
            </div>
        </div>



        <!--Handmade Jewellery End-->




        <!--Questions? Call Now Start-->

        <section class="py-8 bg-gray-100">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-semibold mb-6">Questions? Call Now</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="flex items-center justify-center space-x-2 bg-white rounded-lg shadow-lg py-4 px-6 hover:shadow-xl transition duration-300">
                        <i class="fas fa-phone-alt text-lg text-blue-500"></i>
                        <span class="text-lg ml-2 font-medium">+91 7800101010</span>
                    </div>
                    <div
                        class="flex items-center justify-center space-x-2 bg-white rounded-lg shadow-lg py-4 px-6 hover:shadow-xl transition duration-300">
                        <i class="fas fa-envelope text-lg text-green-500"></i>
                        <span class="text-lg ml-2 font-medium">inforcskjs@gmail.com</span>
                    </div>
                    <div
                        class="flex items-center justify-center space-x-2 bg-white rounded-lg shadow-lg py-4 px-6 hover:shadow-xl transition duration-300">
                        <i class="fab fa-whatsapp text-lg text-yellow-500"></i>
                        <span class="text-lg ml-2 font-medium">+91 7800101010</span>
                    </div>
                </div>
            </div>
        </section>

        <!--Questions? Call Now End-->


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
