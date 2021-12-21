<div>
    <style>
        .banner .text{
            top: 40%;
        }
        .tint{
            background: linear-gradient(#243b551a, #000000e0 );
            
        }
        .banner h1, .banner h2, .banner p{
            text-shadow: 2px 2px #000;
        }
        .product >.info{
            visibility: hidden;
            opacity: 0;
            transition: 0.5s all;
        }
        .product:hover .info{
            visibility: visible;
            opacity: 1;
            background: #f19f40;
        }
        .bg-why{
            background: url(/images/static/bg-1.jpg) no-repeat center center;
            background-size: cover;
        }
    </style>
    <section class="banner">
        <div class="swiper-container bannerSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    <img src="/images/static/banner-1.jpg" class=""/>
                    <div class="text absolute w-full">
                        <h1 class="text-white text-2xl md:text-3xl font-bold mb-3 text-center">One stop solution for shed material</h1>
                        <p class="text-white text-center">We provide all kind of shed material that you might need.</p>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <img src="/images/static/banner-2.jpg" loading="lazy" class=""/>
                    <div class="text absolute w-full">
                        <h2 class="text-white text-2xl md:text-3xl font-bold mb-3 text-center">One stop solution for advertising material</h2>
                        <p class="text-white text-center">We provide all advertising material and support.</p>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <img src="/images/static/banner-3.jpg" loading="lazy" class=""/>
                    <div class="text absolute w-full">
                        <h2 class="text-white text-2xl md:text-3xl font-bold mb-3 text-center">All kind of Iron and Steel works</h2>
                        <p class="text-white text-center">We provide all kind of iron and steel material.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next pr-3"></div>
            <div class="swiper-button-prev pl-3"></div>
        </div>
    </section>
    <section class="products py-12">
        <div class="container">
            <h2 class="text-xl md:text-2xl font-bold mb-5">Our Advertising Products</h2>
            <div class="flex grid grid-cols-12 overflow-hidden gap-4 gap-x-3">
                @foreach($adProducts as $i) @livewire('parts.homeproductitem', ["item" => $i]) @endforeach
            </div>
        </div>
    </section>
    <section class="products py-12">
        <div class="container">
            <h2 class="text-xl md:text-2xl font-bold mb-5">Our Shed Products</h2>
            <div class="flex grid grid-cols-12 overflow-hidden gap-4 gap-x-3">
                @foreach($shedProducts as $i) @livewire('parts.homeproductitem', ["item" => $i]) @endforeach
            </div>
        </div>
    </section>
    <section class="whyus py-12">
        <div class="container">
            <h2 class="text-xl md:text-2xl font-bold mb-5">Why Us</h2>
            <div class="flex grid grid-cols-12 overflow-hidden gap-4 gap-x-3">
                <div class="bg-why col-span-12 md:col-span-6 mb-3 rounded">
                </div>
                <div class="col-span-12 md:col-span-6 mb-3 py-5">
                    <p>Lohewala is recognized as the expert in the industry as our services are backed by state-of-the-art equipment and extensive experience. All our products are of brilliant quality and are provided at a very competitive price and a very quick turnaround. </p>
                    <p>Iron and steel works being a specialized field, we have built long-term partnerships with local, small, and major companies across the country. Our flexibility, professionalism, and expertise help us exceed the client’s needs – always. </p>
                    <p>Our service focuses on our bespoke products, and our ability to create customized products that meet the high standards of the industry. Be it a unique metal fabrication, bolts, base plates, or flashings, we are always ready to offer the best to our clients.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('/js/swiper.js') }}"></script>
    <script>
        var swiper = new Swiper(".bannerSlider", {
            loop: true,
            fadeEffect: { crossFade: true },
            effect: "fade",
            autoplay: { delay: 3000 },
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 30,
            hashNavigation: { watchState: true },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });
    </script>
</div>