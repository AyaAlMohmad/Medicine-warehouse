@extends('layouts.frontend.app')
@section('content')
<div class="services" id="services">

    <div class="containerr">
        @foreach ($items as $item)
        <div class="box">
            <h3>{{ $item->title }}</h3>
            <div class="info">
                <a href="{{ route('service.show',$item->id) }}">Details</a>
            </div>
        </div> 
        @endforeach
       
        {{-- <div class="box">

            <h3>Fixing Issues</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
        </div>
        <div class="box">

            <h3>Location</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
        </div>
        <div class="box">

            <h3>Coding</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
        </div>
        <div class="box">

            <h3>Security</h3>
            <div class="info">
                <a href="#">Design</a>
            </div>
        </div>
        <div class="box">
            <h3>Marketing</h3>
            <div class="info">
                <a href="#">Details</a>
            </div>
        </div> --}}
    </div>
 </div>

@endsection