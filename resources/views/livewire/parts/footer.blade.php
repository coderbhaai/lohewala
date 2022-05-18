<footer class="bg-primary">
    <style>
        footer h6:after {
            margin-top: 4px;
            border-bottom: 2px solid #fff;
            border-color: #fff;
            display: block;
            content: "";
            width: 250px;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .whatsapp{
            bottom: 2em;
            right: 1.5em;
        }
    </style>
    <div class="container py-12">
        <div class="flex grid grid-cols-12 gap-x-5">
            <div class="col-span-12 md:col-span-4">
                <a href="/"><img class="logo" src="{{ asset('images/logo.png') }}" alt="AmitKK Logo" width="120" height="45"/></a>
                <p class="text-white">Aapka apna Lohewala provides all kind of iron and steel material for sheds, advertisement, construction and industry purpose.  </p>
            </div>
            <div class="col-span-12 md:col-span-4">
                <h6 class="text-white text-xl md:text-2xl relative mb-5 pb-3">Support</h6>
                <ul>
                    <li class="text-white"><a href="{{ route('about') }}">About Us</a></li>
                    <li class="text-white"><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-4">
                <h6 class="text-white text-xl md:text-2xl relative mb-5 pb-3">Subscribe</h6>
                @livewire('form.subscribeform')
                <!-- <h6 class="text-white text-xl md:text-2xl relative mb-5 pb-3">Follow Us</h6>
                <ul class="flex items-center space-x-2 mt-5">
                    <li class="px-3 inline-block"><a class="" target="_blank" href="https://www.facebook.com/Amitkk-110578507216727"> <img src="/images/icons/facebook-white.svg" alt=" Connect with AmitKK Facebook Page" class="w-4 transition duration-500 ease-in-out group-hover:scale-150" width="21" height="21"></a></li>
                    <li class="px-3 inline-block"><a class="" target="_blank" href="https://www.linkedin.com/in/amitkhare588/"> <img src="/images/icons/linkedin-white.svg" alt=" Connect with AmitKK Linkedin Page" class="w-4 transition duration-500 ease-in-out group-hover:scale-150" width="21" height="21"></a></li>
                    <li class="px-3 inline-block"><a class="" target="_blank" href="https://twitter.com/AmitdoubleK"> <img src="/images/icons/twitter-white.svg" alt=" Connect with AmitKK Twitter Page" class="w-4 transition duration-500 ease-in-out group-hover:scale-150" width="21" height="21"></a></li>
                    <li class="px-3 inline-block"><a class="" target="_blank" href="https://www.instagram.com/_amitkk_/"> <img src="/images/icons/instagram-white.svg" alt=" Connect with AmitKK Instagram Page" class="w-4 transition duration-500 ease-in-out group-hover:scale-150" width="21" height="21"></a></li>
                    <li class="px-3 inline-block"><a class="" target="_blank" href="//api.whatsapp.com/send?phone=918424003840&amp;text=%20Hi,%20I%20got%20your%20number%20from%20AmitKK%20Website."> <img src="/images/icons/whatsapp-white.svg" alt=" Connect with AmitKK Whats App" class="w-4 transition duration-500 ease-in-out group-hover:scale-150" width="21" height="21"></a></li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between px-6 border-t py-2 border-opacity-30">
        <p class="text-white">© Aapka Apna Lohewala</p>
        <p class="text-white">Designed & Developed by <a href="https://www.amitkk.com" target="_blank">AmitKK</a></p>
    </div>
    <a target="_blank" href="//api.whatsapp.com/send?phone=919899359541&amp;text=%20Hi,%20I%20got%20your%20number%20from%20Lohewala%20Website." class="whatsapp fixed w-12 z-50"><img src="/images/icons/whatsapp-button.svg" alt="Connect with Lohewala on Whats App" width="50" height="50"></a>
</footer>