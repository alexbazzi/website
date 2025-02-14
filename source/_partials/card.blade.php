@props([
    'image' => '',
    'image_alt' => 'Foo bar',
    'link' => '/',
    'title' => 'Something',
])


<a href="{{ $link }}"
    style="background-image: url('{{$image}}'); background-size: cover; background-position: center center;"
    class="block w-40 h-56 transition-all border rounded-md rounded-xs border-transparent hover:shadow-lg hover:border-verde hover:font-bold relative group
">
    <div class="w-full h-full bg-black/0 transition-all rounded-md group-hover: bg-black/60 absolute top-0 left-0"></div>
    {{-- <img src="{{ $image }}" alt="{{ $image_alt }}" class="w-full rounded-md h-auto"> --}}
    <p class="text-center break-words p-2 absolute bottom-1 left-1 z-10 transition transform ease-in-out text-white group-hover:-translate-y-32"> {{ $title }}</p>
</a>
