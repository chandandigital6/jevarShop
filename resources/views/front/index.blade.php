
@extends('frontLayouts.main')
@section('title', 'Home - Repair')


    @section('content')



        <!--Slider Start-->

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('asset/img/Carat-Gallery-Slider-1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset/img/Carat-Gallery-Slider-2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset/img/Carat-Gallery-Slider-3.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--Slider End-->






        <!--About Start-->

        <section class="bg-yellow-200 text-gray-900">
            <div class="container mx-auto px-6 py-12 md:flex md:items-center">
                <div class="md:w-1/2 md:pr-12 animate-fadeIn">
                    <h1 class="text-5xl font-bold leading-tight mb-4">
                        SERVICE BEYOND <br> COMPARE SINCE <br> <span class="text-6xl text-gray-700">1940</span>
                    </h1>
                    <p class="text-lg leading-relaxed mb-6">
                        We are the 5th generation having paternal business since 1940, has made it their mission to
                        strive
                        every
                        day to earn the confidence and trust of our clients by meeting and exceeding their expectations
                        of
                        quality, service, and unsurpassed value. We ensure our actions are consistent with our Corporate
                        Values,
                        enabling us to maintain the relationships and reputation, which our family-owned firm has
                        developed
                        throughout our history.
                    </p>
                    <p class="text-lg leading-relaxed">
                        The foundation of a family business, and the basis on which our company has grown; an emphasis
                        on
                        personalization and strong ties to our clients, industry, and communities,Carat Gallery Diamonds
                        an
                        enterprise of Rishabh Chand Sudhir Kumar Jain Sarraf provides our clients with more than they
                        imagined for less than they anticipate.
                    </p>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0 animate-fadeIn">
                    <img src="{{asset('asset/img/about-side.jpg')}}" alt="Jewelry Image" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </section>


        <!--About End-->


        <!--Browse Our Popular Collections Start-->

        <div class="w-full mx-auto py-12 bg-red-100">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-8">Browse Our Popular Collections</h1>
            <div class="md:w-90 mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 w-5/6">

                <!-- Rings Card -->
                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('asset/img/ring.jpeg')}}" alt="Rings" class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">Rings</h3>
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
                <!-- Necklaces Card -->
                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('asset/img/neckless.jpeg')}}" alt="Necklaces" class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">Necklaces</h3>
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
                <!-- Earrings Card -->
                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('asset/img/earing.jpeg')}}" alt="Earrings" class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">Earrings</h3>
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
                <!-- Bracelets Card -->
                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('asset/img/bracelet.jpeg')}}" alt="Bracelets" class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">Bracelets</h3>
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
                <!-- Pendant Set Card -->
                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('asset/img/pendant.jpeg')}}" alt="Pendant Set"
                             class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">Pendant Set</h3>
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
                <!-- Bangles Card -->
                <div>
                    <div
                        class="bg-white shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                        <img src="{{asset('asset/img/bangles.jpeg')}}" alt="Bangles" class="w-full h-80 object-cover rounded-t-lg">
                    </div>
                    <h3 class="text-lg font-semibold mt-4 mb-2 text-center">Bangles</h3>
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
            </div>
        </div>

        <!--Browse Our Popular Collections End-->



        <!--Why Buy From Us? Start-->


        <div class="bg-gray-100 animate-fadeInFromTop">
            <div class="container mx-auto py-16">
                <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">Why Buy From Us?</h1>
                <p class="text-center mb-12 mx-auto max-w-2xl text-gray-600">With an exclusive collection of finely
                    crafted
                    jewellery that makes you go head over heels in one glance, our offerings include rings, earrings,
                    pendants, mangalsutras, bangles, bracelets, nose pins, necklaces, etc.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('asset/img/ethical.jpg')}}" alt="Exclusive Collections"
                             class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-2">Exclusive Collections</h2>
                        <p class="text-gray-500">Discover unique and elegant designs curated just for you.</p>
                    </div>
                    <div
                        class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('asset/img/Exclusive-Range.jpg')}}" alt="Ethical And Transparent"
                             class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-2">Ethical And Transparent</h2>
                        <p class="text-gray-500">We ensure ethical sourcing and complete transparency in our processes.
                        </p>
                    </div>
                    <div
                        class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('asset/img/Jewellery-desire.jpg')}}" alt="Lifelong Relationship"
                             class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-2">Lifelong Relationship</h2>
                        <p class="text-gray-500">Our commitment is to build lifelong relationships with our customers.
                        </p>
                    </div>
                    <div
                        class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('asset/img/Lifelong-Relationship.jpg')}}" alt="Jewellery You Desire"
                             class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-2">Jewellery You Desire</h2>
                        <p class="text-gray-500">Find the perfect piece that resonates with your style and personality.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!--Why Buy From Us? End-->



        <!--ENJOY THE MOMENT START-->

        <div class="bg-red-100 animate-fadeInFromTop">
            <div class="container mx-auto py-16 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 p-6 text-center md:text-left">
                    <h1 class="text-4xl md:text-7xl font-bold text-gray-800 mb-6">ENJOY THE MOMENT</h1>
                    <p class="text-gray-700 mb-6 text-2xl">Why not make every moment special? Our life is meaningless
                        without those that we share. Let them know how much they mean to <strong>YOU</strong>.</p>
                    <p class="text-gray-700 mb-6 text-2xl">Exclusive & Personalised just for you to feel your inner
                        <strong>JOY</strong>.
                    </p>
                    <button
                        class="mt-4 bg-yellow-500 text-white py-2 px-6 rounded-full hover:bg-yellow-600 hover:shadow-lg transition duration-300">Explore
                        Our Collection</button>
                </div>
                <div class="md:w-1/2">
                    <img src="{{asset('asset/img/enjoy-the-movment.jpg')}}" alt="Woman with Jewellery" class="w-full rounded-lg">
                </div>
            </div>
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
            <div class="flex flex-col md:flex-row items-center">
                <div class="mb-4 md:mb-0 md:w-1/2 md:order-1">
                    <img src="{{asset('asset/img/logo-igi.png')}}" alt="Your Logo" class="h-30 md:h-40 lg:h-40 xl:h-50 rounded-lg ">
                </div>
                <div class="md:w-1/2 md:order-2 fade-in-right overflow-auto">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2 text-gray-900">Your Organization Name</h1>
                    <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                        Diamond is the only gem made of a single element: It is <span
                            class="font-bold text-gray-800">typically about 99.95 percent carbon</span>.
                        The other 0.05 percent can include one or more trace elements, which are atoms that aren’t part
                        of
                        the diamond’s essential chemistry.
                        Some trace elements can influence its color or crystal shape.
                    </p>
                </div>
            </div>
        </div>


        <!--Your Organization Name End-->


        <!--Handmade Jewellery Start-->

        <div class="bg-red-100 py-6 animate-fadeInFromTop">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 mb-6 md:mb-0 mt-20">
                        <h1 class="mb-4 text-5xl">
                            <span>Handmade Jewellery</span><br>
                            Made With Love
                        </h1>
                        <p class="text-lg leading-relaxed mb-4 text-black">
                            Necklaces may have been one of the earliest types of adornment worn by humans. They often
                            serve
                            ceremonial, religious, magical, or funerary purposes and are also used as symbols of wealth
                            and
                            status, given that they are commonly made of precious metals and stones.
                        </p>
                        <a class="btn btn-sm py-2 px-4 rounded-full bg-yellow-500 text-white hover:bg-yellow-600 transition duration-300"
                           href="#">
                            Our Collection
                        </a>
                    </div>
                    <div class="md:w-1/2 fade-in-right">
                        <img src="{{asset('asset/img/indian-traditional-jewellery.jpg')}}" alt="Handmade Jewellery"
                             class="w-full rounded-lg">
                    </div>
                </div>
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
