
@extends('frontLayouts.main')
@section('title', 'About')
@section('content')


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
        <div class="container mx-auto px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-8 text-left text-black">About Proprietor</h2>
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/3 text-center">
                    <img src="{{asset('asset/img/PROPRIETOR.jpeg')}}" alt="Proprietor Image"
                         class="w-full rounded-lg shadow-lg mb-4">
                    <h3 class="font-bold text-2xl text-black">Sudhir Kumar Jain</h3>
                    <h5 class="text-xl font-light text-black mt-2">Owner of Rishabh Chand Sudhir Kumar Jain Sarraf
                    </h5>
                </div>
                <div class="md:w-2/3 text-black mb-40">
                    <p class="text-lg leading-relaxed">
                        All that Glitters…<br>
                        Accept criticism as a challenge and use it to constantly improve myself.
                        I am a very positive person and the word IMPOSSIBLE is not in my dictionary.
                        open up Sudhir Kumar Jain, the owner of Rishabh Chand Sudhir Kumar Jain Sarraf,
                        Alinagar, Gorakhpur. His father was a jeweller merchant himself.
                        We are in this business for more than 70 years now. My whole family,
                        including me and my four siblings, are all into this business.
                        <br><br>
                        I am the youngest of all siblings and I never wanted to pursue a job,
                        anywhere. For 12 years, I worked with my father, learning all the skills
                        of this business, in his shop.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Apart from this, Now we’re bringing a jewellery brand by the name of ‘CaratGallery’. We also
                        make members in this format, and
                        it works on the concept of lucky draw where the
                        winner gets an exclusive jewellery gift from us for an
                        amount that is much less as compared to the
                        original cost of the jewellery. I plan to make this a premium brand in years to come. In the
                        long run we
                        hope to see a number of units, nationwide, of Carat Gallery diamonds.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!--About Proprietor End-->



    <!--Why Buy From Us? Start-->


    <div class="bg-gray-100 animate-fadeInFromTop">
        <div class="container mx-auto py-16">
            <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">Why Buy From Us?</h1>
            <p class="text-center mb-12 mx-auto max-w-2xl text-gray-600">With an exclusive collection of finely
                crafted
                jewellery that makes you go head over heels in one glance, our offerings include rings,
                earrings,
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
                    <p class="text-gray-500">We ensure ethical sourcing and complete transparency in our
                        processes.
                    </p>
                </div>
                <div
                    class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <img src="{{asset('asset/img/Jewellery-desire.jpg')}}" alt="Lifelong Relationship"
                         class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Lifelong Relationship</h2>
                    <p class="text-gray-500">Our commitment is to build lifelong relationships with our
                        customers.
                    </p>
                </div>
                <div
                    class="card text-center bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <img src="{{asset('asset/img/Lifelong-Relationship.jpg')}}" alt="Jewellery You Desire"
                         class="mx-auto mb-4 w-full h-48 object-cover rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Jewellery You Desire</h2>
                    <p class="text-gray-500">Find the perfect piece that resonates with your style and
                        personality.
                    </p>
                </div>
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
