@props([
    'name' => 'link',
    'icon_type' => 'solid',
    'icon' => 'house',
    'link' => 'https://www.xbazzi.com',
    'text' => 'somelink',
    'newtab' => true
])

<a href="{{ $link }}" class="block grid gap-4 grid-cols-12" @if($newtab) target="_blank" @endif>
    <div class="flex items-center justify-center col-span-1">
        <span class="text-verde fa-md fa-{{ $icon_type }} fa-{{ $icon }}"></span>
    </div>
    <div class="text-verde flex items-center col-span-11">
        <p>{{ $text }}</p>
    </div>
</a>
