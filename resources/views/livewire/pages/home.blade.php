<div>
    <style>
        .banner .text{
            top: 40%;
        }
        .tint{
            background: linear-gradient(#243b551a, #000000e0 );
            
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
                        <h1 class="text-white text-xl md:text-2xl font-bold mb-3 text-center">Lorem ipsum dolor sit amet.</h1>
                        <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, id!</p>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <img src="/images/static/banner-2.jpg" loading="lazy" class=""/>
                    <div class="text absolute w-full">
                        <h2 class="text-white text-xl md:text-2xl font-bold mb-3 text-center">Lorem ipsum dolor sit amet.</h2>
                        <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, id!</p>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <img src="/images/static/banner-3.jpg" loading="lazy" class=""/>
                    <div class="text absolute w-full">
                        <h2 class="text-white text-xl md:text-2xl font-bold mb-3 text-center">Lorem ipsum dolor sit amet.</h2>
                        <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, id!</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next pr-3"></div>
            <div class="swiper-button-prev pl-3"></div>
        </div>
    </section>
    <section class="products py-12">
        <div class="container">
            <h2 class="text-xl md:text-2xl font-bold mb-5">Our Products</h2>
            <div class="flex grid grid-cols-12 overflow-hidden gap-4 gap-x-3">
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-1.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-2.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-3.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-4.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-5.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-6.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-7.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
                    <img src="/images/static/product-8.jpg" loading="lazy" class="rounded"/>
                    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
                        <h3 class="text-white text-center w-full py-10">Lorem, ipsum.</h3>
                    </div>
                    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
                        <h3 class="text-center">Lorem, ipsum dolor.</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, labore?</p>
                    </div>
                </div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="#151515"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <h3 class="text-xl md:text-2xl font-semibold mt-3">Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="#151515"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <h3 class="text-xl md:text-2xl font-semibold mt-3">Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                </div>
                <div class="col-span-12 md:col-span-6 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="#151515"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <h3 class="text-xl md:text-2xl font-semibold mt-3">Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                </div>
                <div class="col-span-12 md:col-span-6 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="#151515"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <h3 class="text-xl md:text-2xl font-semibold mt-3">Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                </div>
                <div class="col-span-12 md:col-span-6 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="#151515"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <h3 class="text-xl md:text-2xl font-semibold mt-3">Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                </div>
                <div class="col-span-12 md:col-span-6 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="#151515"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <h3 class="text-xl md:text-2xl font-semibold mt-3">Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iste ducimus quibusdam quas delectus sit?</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-12">@livewire('parts.suggestblogs')</div>
    <script src="{{ asset('/js/swiper.js') }}"></script>
    <script>
        var swiper = new Swiper(".bannerSlider", {
            // loop: true,
            fadeEffect: { crossFade: true },
            effect: "fade",
            // autoplay: { delay: 3000 },
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 30,
            hashNavigation: { watchState: true },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });
    </script>
</div>