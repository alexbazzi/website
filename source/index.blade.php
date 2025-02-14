@extends('_layouts.main')

@section('body')
    {{-- <div class="flex gap-4">
<div>

    <div class="bg-indigo-500 size-24 border border-black"></div>
    <div class="bg-indigo-500 size-24 border border-black"></div>
    <div class="bg-indigo-500 size-24 border border-black"></div>
    <div class="bg-indigo-500 size-24 border border-black"></div>
</div>
<div>

    <div class="bg-indigo-500 size-24 border border-black"></div>
    <div class="bg-indigo-500 size-24 border border-black"></div>
    <div class="bg-indigo-500 size-24 border border-black"></div>
    <div class="bg-indigo-500 size-24 border border-black"></div>
</div>
<div class="grid grid-cols-5 grid-rows-4 flex-1">
    <div class="bg-white col-span-1 row-start-1 row-end-1 col-start-2  border-black"></div>
    <div class="bg-white col-span-5 row-start-2 row-end-2 border  border-black"></div>
    <div class="bg-white col-span-1 row-start-3 row-end-3 col-start-2  border-black"></div>
</div>
</div> --}}

    <div class="grid gap-4 grid-cols-12 max-w-5xl mx-auto">
        <div class="col-span-8 flex flex-col gap-8">
            <x-info-window title="whoami" padding="0" margin="1" icon="user">
                <p class="text-lg px-4 pt-4 text-justify">
                    Software & aerospace engineer. Experienced in algorithms, systems programming, and scientific computing.
                </p>
                <p class="text-lg px-4 py-8 text-justify">
                    As you can see, I am not a front end developer.
                </p>
            </x-info-window>
            {{-- Projects section --}}
            <x-info-window title="projects" class="p-4" icon="lightbulb">
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($projects as $p)
                        @include('_partials.card', [
                            'title' => $p->title,
                            'image' => $p->image,
                            'link' => $p->getUrl(),
                        ])
                    @endforeach
                </div>
            </x-info-window>
            {{-- Blog section --}}
            <x-info-window title="blog" class="p-4" icon="blog">
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($blog as $p)
                        @include('_partials.card', [
                            'title' => $p->title,
                            'image' => $p->image,
                            'link' => $p->getUrl(),
                        ])
                    @endforeach
                </div>
            </x-info-window>
        </div>
        <div class="col-span-4 flex flex-col gap-8">
            <x-terminal-window title="links" icon="link">
                <div class="text-white">
                    <ul>
                        <li>
                            @include('_partials.link', [
                                'text' => 'Home',
                                'icon_type' => 'solid',
                                'icon' => 'home',
                                'newtab' => false,
                                'link' => '/',
                            ])
                        </li>
                        <li>
                            @include('_partials.link', [
                                'text' => 'GitHub',
                                'icon_type' => 'brands',
                                'icon' => 'github',
                                'link' => 'https://github.com/xbazzi',
                            ])
                        </li>
                        <li>
                            @include('_partials.link', [
                                'text' => 'LinkedIn',
                                'icon_type' => 'brands',
                                'icon' => 'linkedin',
                                'link' => 'https://linkedin.com/in/alexbazzi',
                            ])
                        </li>
                    </ul>
                    <div class="flex justify-between items-center pb-2 pl-5 pt-2 ">
                        <a target='_blank' rel='noreferrer noopener' href='mailto:xander@xbazzi.com'>
                            <img class="h-auto" src="/assets/img/gifs/email_keyboard.gif">
                        </a>
                    </div>
                </div>

            </x-terminal-window>

            <x-terminal-window title="darknet.org -rss" icon="rss">
                <div class="text-xs p-4 text-white rounded-md pl-1" id="rss-feed">Loading... Or is it?</div>
            </x-terminal-window>
        </div>
    </div>
    {{-- Footer --}}
    <div class="flex w-full h-auto">
        <img src="/assets/img/gifs/green_lights.gif" alt="lightspeed">
        <img src="/assets/img/gifs/green_lights.gif" alt="lightspeed">
    </div>
@endsection
