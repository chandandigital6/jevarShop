@extends('frontLayouts.main')
@section('title', 'Contact')
@section('content')


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

    <!--Contact Form Start-->

    <div class="bg-gray-300">
        <div class="w-full flex items-center justify-center py-12">
            <div class="w-full max-w-4xl bg-gray-800 text-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-center mb-4">Get In Touch</h2>
                <p class="text-center mb-8">We collaborate with ambitious brands and people; we’d love to build
                    something great together.</p>
                <form class="space-y-6" method="post" action="{{route('appointment.store')}}" >
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="text" placeholder="Name *" name="name"
                               class="w-full p-4 bg-white text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <input type="email" placeholder="Email *" name="email"
                               class="w-full p-4 bg-white text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <input type="tel" placeholder="Mobile No *" name="number"
                               class="w-full p-4 bg-white text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <textarea placeholder="Message *" rows="4" name="msg"
                              class="w-full p-4 bg-white text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                    <div class="flex justify-center">
                        <button type="submit"
                                class="bg-yellow-500 text-gray-900 font-semibold py-3 px-8 rounded-lg hover:bg-yellow-600 transition duration-300">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Contact Form End-->




@endsection
