@props([
    'name' => 'Default',
    'image' => '',
    'image_alt' => 'Some image',
    'link' => 'https://xbazzi.com/blog',
    'summary' => 'Default'
])

<a href="{{$link}}" class="
    block 
    border
    rounded
    rounded-xs
    border-transparent
    hover:shadow-lg 
    hover:border-cyan-300
    hover:font-bold

">
    <div class="overflow-hidden rounded rounded-xs flex items-center justify-center">
        <img src="{{$image}}" alt="{{$image_alt}}" class="w-full h-auto">
    </div>
    <p class="text p-2">{{$summary}}</p>
</a>