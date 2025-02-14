<div class="rounded-br-md rounded-bl-md  shadow-md shadow-verde">
    <div
        class="border-4 border-black justify-between items-center py-1 px-1 text-xl text-white title text-lg bg-gradient-to-r from-black via-gray-800 to-black">
        <div class="flex justify-between text-verde gap-2 items-center pl-1">
            <div class="flex gap-3 items-center">
                <span class="fa-solid fa-terminal"></span>
                <p class="">{{ $title }}</p>
            </div>
            <span class="fa-solid fa-{{ $icon }}"></span>
        </div>

    </div>
    <div class="rounded-br-md rounded-bl-md bg-gradient-to-b from-black/90 via-gray-900/90 to-black/90">
        {{ $slot }}
    </div>
</div>
