@extends('layout.master')
@section('contant')
    <div class="continer d-flex p-2 grid gap-3 flex-wrap justify-center text-center">
        @foreach ($products as $item )
            <div class="card p-2 justify-center d-flex flex-column rounded" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">
                        {{$item->description}}
                    </p>
                    <p class="card-text">
                        {{$item->price . " JD"}}
                    </p>
                    <a href="#" class="btn btn-primary text-light">buy</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
