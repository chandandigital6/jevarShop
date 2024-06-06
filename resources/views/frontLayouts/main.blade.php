<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carat Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/styles.css')}}">
{{--    <link rel="stylesheet" href="../src/styles.css">--}}
</head>


<body>



<!--Header Start-->
@include('frontLayouts.header')

<!--Header End-->

<main id="main-content">



    @yield('content')


</main>



<!-- Footer Start -->


@include('frontLayouts.footer')


<!-- Footer End -->



<!-- Navbar Start -->
<div class="fixed bottom-0 w-full bg-black p-1 sm:hidden mt-16">
    <div class="flex justify-around">
        <a href="https://www.caratgallery.in/collection" class="text-bold text-white text-decoration-none p-2">
            <div class="flex flex-col items-center">
                <img src="https://www.caratgallery.in/assets/img/icons/wedding-ring.png" class="w-6 h-6 mb-1"
                     alt="Collection">
                <span class="text-xs">Collection</span>
            </div>
        </a>

        <a href="#contactUsModal" data-toggle="modal" class="text-bold text-white text-decoration-none p-2">
            <div class="flex flex-col items-center">
                <img src="https://www.caratgallery.in/assets/img/icons/estimate.png" class="w-6 h-6 mb-1"
                     alt="Get Free Quote">
                <span class="text-xs">Get Free Quote</span>
            </div>
        </a>

        <a href="tel:7800101010" class="text-bold text-white text-decoration-none p-2">
            <div class="flex flex-col items-center">
                <img src="https://www.caratgallery.in/assets/img/icons/call-now.png" class="w-6 h-6 mb-1"
                     alt="Call Now">
                <span class="text-xs">Call Now</span>
            </div>
        </a>

        <a href="https://api.whatsapp.com/send?text=Hi Carat Gallery! I have enquiry regarding your products.&amp;phone=917355748439"
           class="text-bold text-white text-decoration-none p-2">
            <div class="flex flex-col items-center">
                <img src="https://www.caratgallery.in/assets/img/icons/whatsapp.png" class="w-6 h-6 mb-1"
                     alt="WhatsApp">
                <span class="text-xs">WhatsApp</span>
            </div>
        </a>
    </div>
</div>
<!-- Navbar End -->




<script src="{{asset('asset/scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
