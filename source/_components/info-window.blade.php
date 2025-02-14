<div 
    x-data="{
        open: true, 
        minimized: false, 
        maximized: false,
        close() {this.open = false}}" 
    x-show="open" 
    :class="maximized ? 'fixed top-0 left-0 !bg-gray-300 w-full h-full transition-all' : ''"
    class="rounded-br-md  rounded-bl-md mx-auto bg-gray-300/80">
    <div
        class="flex border-4 border-black justify-between items-center py-1 px-1 text-white title text-lg bg-gradient-to-tr from-black from-25% via-verde via-70% to-black to-99%">
        <div class="flex gap-2 items-center pl-1">
            <span class="fa-solid fa-{{ $icon }}"></span>
            <p class="">{{ $title }}</p>
        </div>

        <div class="flex gap-1 ">
            <div
                x-on:click="minimized = !minimized"
                class="bg-gradient-t cursor-pointer from-pink-300 to-cyan-500 p-1 rounded-md size-7 flex items-center justify-center border-3 border-black">
                <span class="fa-solid fa-window-minimize"></span>
            </div>
            <div
                x-on:click="maximized = !maximized"
                class="bg-radial cursor-pointer from-pink-300 to-cyan-500 p-1 rounded-md size-7 flex items-center justify-center border-3 border-black">
                <span class="fa-regular fa-window-maximize"></span>
            </div>
            <div x-on:click="close" class="p-1 rounded-md cursor-pointer size-7 bg-cyan flex items-center justify-center border-3 border-black">
                <span class="fa-solid fa-xmark"></span>
            </div>
        </div>
    </div>
    <div x-show="!minimized" x-transition.duration.250ms {{$attributes->merge(['class' => ''])}}>
        {{ $slot }}
    </div>
</div>
