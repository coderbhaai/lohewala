<div class="col-span-12 md:col-span-6 lg:col-span-3 mb-3 relative group product">
    <img src="/images/static/{{ $item['pic'] }}" loading="lazy" class="rounded"/>
    <div class="tint absolute bottom-0 w-full h-full flex flex-col justify-end rounded">
        <h3 class="text-white text-center w-full py-10">{{ $item['name'] }}</h3>
    </div>
    <div class="info absolute top-0 bottom-0 flex items-center justify-center rounded flex-col p-4 overflow-hidden">
        <h3 class="text-center">{{ $item['name'] }}</h3>
        <p class="text-center">{{ $item['text'] }}</p>
    </div>
</div>