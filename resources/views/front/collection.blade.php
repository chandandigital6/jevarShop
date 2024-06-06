
@extends('frontLayouts.main')
@section('title', 'collection')
@section('content')


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
