@extends('layout.app')

@section('content')

    @include('element.breadcrumbs', [
        'crumbs' => [
            ['url' => route('house.index'), 'name' => 'Houses'],
            ['name' => 'view'],
        ]
    ])

    <div class="container mt-4">
        <div class="col-xs-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <strong>House</strong>
                    <a href="{{ route('house.edit', $house->id) }}" class="btn btn-sm btn-info pull-right">
                        <i class="fa fa-edit"></i> Bewerken
                    </a>
                </div>
                <div class="card-body card-block">
{{--                    {{ dd($house->toArray()) }}--}}
                    House info
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <strong>Rooms</strong>
                    <a href="{{ route('house.rooms.edit', $house->id) }}" class="btn btn-sm btn-info pull-right">
                        <i class="fa fa-edit"></i> Bewerken
                    </a>
                </div>
                <div class="card-body card-block">
                    All rooms in house + owners
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <strong>Notes</strong>
                    <a href="{{ route('house.view', $house->id) }}" class="btn btn-sm btn-info pull-right">
                        <i class="fa fa-edit"></i> Bewerken
                    </a>
                </div>
                <div class="card-body card-block">
                    Notes
                </div>
            </div>
        </div>
{{--        {{ dd($house->toArray()) }}--}}
    </div>

@endsection