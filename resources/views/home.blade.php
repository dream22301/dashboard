@extends('layouts.app')

@section('judul', 'HomePage')

@section('content')
<div class="grid grid-rows-[4.5rem_2fr] w-full min-h-screen">
    <div class="w-full min-h-full grid grid-cols-[64rem_1fr] bg-gray-100">
        <div class="w-full">test</div>
        <div class="w-full flex relative items-center">
            <div class="absolute left-0 top-1/4 h-1/2 w-0.5 bg-gray-400"></div>
            <img src="{{ asset('img/account.svg') }}" alt="account" class="icon">
        </div>
    </div>
    <div class="w-full h-full bg-amber-300">t</div>
</div>
@endsection