@extends('layout.masterLogin')

@section('content')

    <section class="restaurantSection">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @can('create dishes')

            <h2>Gerechten</h2>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/park/restaurants/dishes') }}">Overzicht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/park/restaurants/dishes/create') }}">Maken <span class="fa fa-plus"></span></a>
                    </li>
                </ul>

            <form class="form" action="{{route('dishes.index')}}" method="POST">
                @csrf
                <h3>Gerecht aanmaken</h3>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input id="name" name="name" class="form-control" type="text" placeholder="Naam van gerecht" />
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving</label>
                    <textarea id="description" name="description" class="form-control" type="text" placeholder="Beschrijving van het gerecht"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prijs</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&euro;</span>
                        </div>
                        <input id="price" name="price" class="form-control" type="number" step=".01" placeholder="Prijs" />
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Maak Gerecht</button>
            </form>
            @endcan
            @cannot('create dishes')
                @yield('content', View::make('errors.noPermission'))
            @endcannot
        </div>
    </section>

@endsection