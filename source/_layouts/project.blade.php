@extends('_layouts.post')

@section('center')
<x-terminal-window title="{{$page->title}}" icon="lightbulb">
    <p class="font-bold pl-4 pt-4 text-white text-md">written by {{$page->author}} on {{date('m-d-y', $page->date)}}</p>
    <div class="p-8 !text-white">
        @yield('content')
    </div>
</x-terminal-window>
@endsection
