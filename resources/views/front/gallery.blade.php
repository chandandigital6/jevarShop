
@extends('frontLayouts.main')
@section('title', 'Gallery')
@section('content')


    <!-- CG Diamond Club Start -->
    <div class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
        <div class="bg-white shadow-lg w-full max-w-6xl mx-auto rounded-lg overflow-hidden">
            <div class="bg-gray-900 text-white p-8 md:p-12 lg:p-16 rounded-lg">
                <h1 class="text-6xl font-bold mb-8 text-center text-gray-300">CG DIAMOND CLUB</h1>
                <div class="my-10">
                    <p class="mb-6 leading-relaxed">Rishabh Chand Sudhir Kumar Jain Sarraf has constantly been
                        aiming for excellence in its product quality and delivery, and optimizing the customer
                        experience.</p>
                    <p class="mb-6 leading-relaxed">As part of this, we are launching a CG diamond club, which is a
                        jewelry purchase scheme that allows individuals to deposit a sum of money every month, which
                        can be used to make a jewelry purchase at a subsidized rate.</p>
                    <p class="leading-relaxed">This scheme allows individuals to set aside money for a purchase at a
                        later date and also avail of a discount on the purchase.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- CG Diamond Club End -->

    <!-- Scheme Details -->
    <div class="container mx-auto mb-10 px-4">
        <h2 class="text-4xl font-bold text-left mt-5 mb-8 text-gray-800">We are offering a 12 months scheme</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($counters->take(1) as $counter)


            <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg aos-init aos-animate h-80 flex flex-col justify-between"
                 data-aos="fade-up" data-aos-duration="2000">
                <span class="text-9xl font-bold mb-4 text-gray-700">{{$counter->number}}</span>
                <p class="text-lg leading-relaxed">{!! $counter->title !!}</p>
            </div>
            @endforeach
                @foreach($counters->skip(1)->take(1) as $counter)
            <div class="md:col-span-2 bg-gray-900 text-white p-6 rounded-lg shadow-lg aos-init aos-animate h-80 flex flex-col justify-between"
                 data-aos="fade-up" data-aos-duration="2000">
                <span class="text-9xl font-bold mb-4 text-gray-700">{{$counter->number}}</span>
                <p class="text-lg leading-relaxed">
                    {!! $counter->title !!}
                </p>
            </div>
                @endforeach
                @foreach($counters->skip(2)->take(4) as $counter)
            <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg aos-init aos-animate h-80 flex flex-col justify-between"
                 data-aos="fade-up" data-aos-duration="2000">
                <span class="text-9xl font-bold mb-4 text-gray-700">{{$counter->number}}</span>
                <p class="text-lg leading-relaxed"> {!! $counter->title !!}</p>
            </div>
                @endforeach
                @foreach($counters->skip(6)->take(1) as $counter)
            <div class="md:col-span-2 bg-gray-900 text-white p-6 rounded-lg shadow-lg aos-init aos-animate h-80 flex flex-col justify-between"
                 data-aos="fade-up" data-aos-duration="2000">
                <span class="text-9xl font-bold mb-4 text-gray-700">{{$counter->number}}</span>
                <p class="text-lg leading-relaxed">
                    {!! $counter->title !!}
                </p>
            </div>
                @endforeach
        </div>
    </div>
    <!-- Scheme Details End -->

    <!-- Your Organization Name Start -->
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="mb-4 md:mb-0 md:w-1/2 md:order-1">
                <img src="{{asset('asset/img/logo-igi.png')}}" alt="Your Logo" class="h-30 md:h-40 lg:h-40 xl:h-50 rounded-lg">
            </div>
            <div class="md:w-1/2 md:order-2 fade-in-right overflow-auto" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-3xl md:text-4xl font-bold mb-2 text-gray-900">Your Organization Name</h1>
                <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">
                    Diamond is the only gem made of a single element: It is <span
                        class="font-bold text-gray-800">typically about 99.95 percent carbon</span>.
                    The other 0.05 percent can include one or more trace elements, which are atoms that aren’t part
                    of the diamond’s essential chemistry.
                    Some trace elements can influence its color or crystal shape.
                </p>
            </div>
        </div>
    </div>
    <!-- Your Organization Name End -->


    <!-- Terms & Conditions Start -->

    <div class="container mx-auto">
        <h1 class="pt-4 mb-4 text-5xl font-bold">Terms & Conditions</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="dark-box bg-gray-900 text-white p-6 rounded-lg shadow-lg h-80">
                    <span class="count text-9xl text-gray-700">01</span>
                    <p class="lead text-white num-style-1 mt-12">
                        There is no cancellation of order & money once paid to will not be refunded by
                        <b class="only-font">"CARAT GALLERY"</b>.
                    </p>
                </div>
            </div>
            <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="dark-box bg-gray-900 text-white p-6 rounded-lg shadow-lg h-80">
                    <span class="count text-9xl text-gray-700">02</span>
                    <p class="lead text-white num-style-1 mt-12">
                        Exchange Facility Within 15 Days.<br><br>
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="dark-box bg-gray-900 text-white p-6 rounded-lg shadow-lg h-80">
                    <span class="count text-9xl text-gray-700">03</span>
                    <p class="lead text-white num-style-1 mt-12">
                        Cash back 80% with original bill and certificate.<br><br>
                    </p>
                </div>
            </div>
            <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="dark-box bg-gray-900 text-white p-6 rounded-lg shadow-lg h-80">
                    <span class="count text-9xl text-gray-700">04</span>
                    <p class="lead text-white num-style-1 mt-12">
                        No exchange or refund on damaged products or weared.
                    </p>
                </div>
            </div>
            <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="dark-box bg-gray-900 text-white p-6 rounded-lg shadow-lg h-80">
                    <span class="count text-9xl text-gray-700">05</span>
                    <p class="lead text-white num-style-1 mt-12">
                        All disputes subject to Gorakhpur jurisdiction only.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Terms & Conditions End -->


    <!-- Join Our Diamond Club Start -->

    <div class="bg-gray-900 py-6 mt-16 aos-init aos-animate fade-in" data-aos="fade-up" data-aos-duration="2000">
        <div class="container mx-auto bg-[#292929] p-5 md:p-8">
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-7/12">
                    <div>
                        <h2 class="text-2xl md:text-3xl text-white text-center mb-1 mt-4">Join Our Diamond Club</h2>
                        <div class="contact-form mt-4 mb-2">
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-full px-2 mb-4">
                                    <label for="cname" class="text-white">Name<span
                                            class="text-red-500">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtname" type="text"
                                           id="ContentPlaceHolder1_txtname"
                                           class="form-control w-full p-2 border border-gray-300 rounded"
                                           placeholder="Name *">
                                </div>
                                <div class="w-full md:w-1/2 px-2 mb-4">
                                    <label for="cemail" class="text-white">Email</label>
                                    <input name="ctl00$ContentPlaceHolder1$txtemail" type="email"
                                           id="ContentPlaceHolder1_txtemail"
                                           class="form-control w-full p-2 border border-gray-300 rounded"
                                           placeholder="Email *">
                                </div>
                                <div class="w-full md:w-1/2 px-2 mb-4">
                                    <label for="cphone" class="text-white">Mobile No<span
                                            class="text-red-500">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtmobileno" type="text" maxlength="10"
                                           id="ContentPlaceHolder1_txtmobileno"
                                           class="form-control w-full p-2 border border-gray-300 rounded"
                                           placeholder="Mobile No *">
                                </div>
                                <div class="w-full px-2 mb-4">
                                    <label for="cname" class="text-white">Month<span
                                            class="text-red-500">*</span></label>
                                    <select name="ctl00$ContentPlaceHolder1$dbl_month"
                                            id="ContentPlaceHolder1_dbl_month"
                                            class="form-control w-full p-2 border border-gray-300 rounded">
                                        <option value="Please Select">Please Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnsave','')"
                                        id="ContentPlaceHolder1_btnsave" type="submit"
                                        class="btn bg-yellow-500 text-white py-2 px-4 rounded-full w-full">
                                    <span>SUBMIT</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-5/12 mt-4 md:mt-0 text-center">
                    <img src="{{asset('asset/img/qr-code.jpg')}}" class="mx-auto h-80 md:h-96 w-auto">
                </div>
            </div>
        </div>
    </div>

    <!-- Join Our Diamond Club End -->


    <!-- Map Start -->
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
    <!-- Map End -->


@endsection
