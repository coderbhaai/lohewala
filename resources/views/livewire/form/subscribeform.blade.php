<div class="flex pb-6">
    <form wire:submit.prevent="submit" method="POST">
        <div class="flex flex-col rounded-lg overflow-hidden sm:flex-row">
            <input class="px-4 border-none" type="email" placeholder="Your email" required wire:model="email">
            <button class="px-4 bg-action text-white font-semibold">Subscribe</button>
        </div>
    </form>
</div>
@if(session('message'))
    <style>.sweetalert{ bottom: 10%; }</style>
    <div class="sweetalert z-50 flex items-center justify-end gap-4 bg-action p-4 rounded-l-lg fixed right-0 shadow">
        <div class="space-y-1 text-sm">
            <h6 class="font-medium text-white">Message</h6>
            <p class="leading-tight text-white">{{ session('message') }}</p>
        </div>
    </div>
    <script>$(document).ready(function(){ $(".sweetalert").delay(2000).slideUp(300); });</script>
@endif