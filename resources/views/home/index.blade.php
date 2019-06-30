@extends('layouts.main')

@section('content')
    <section class="banner text-center">
        <div class="jumbo-text">
            <h1>Buy & Sell secondhand</h1>
            <h2>Sell things you don't use and find great deals</h2>
        </div>
    </section>

    <nav class="navigation">
        <ul>
            @foreach ($categories as $category)
                <li><a href="#">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </nav>


    <div class="listing">

        <div class="container">
            <div class="row">
                @foreach ($goods as $item)
                    <list-item item='@json($item)'></list-item>
                @endforeach
            </div>
        </div>
    </div>


@endsection
