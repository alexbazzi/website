@props([
    'name' => 'link',
    'icon_type' => 'solid',
    'icon' => 'house',
    'link' => 'https://www.xbazzi.com',
    'text' => 'somelink',
    'newtab' => true
])

<div class="pl-5 text-lg pt-2">
    <a href="{{ $link }}" @if($newtab) target="_blank" @endif><span class="fa-{{ $icon_type }} fa-{{ $icon }}"></span>
        {{ $text }}</a>
</div>
