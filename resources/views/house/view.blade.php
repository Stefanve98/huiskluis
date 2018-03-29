@extends('layout.app')

@section('content')

    @include('element.breadcrumbs', [
        'crumbs' => [
            ['name' => 'view'],
        ]
    ])

    <div class="mt-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Huis</strong>
                    <a href="{{ route('house.edit', $house->id) }}" class="btn btn-sm btn-info pull-right">
                        <i class="fa fa-edit"></i> Bewerken
                    </a>
                </div>
                <div class="card-body card-block">
                    House info
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Kamers</strong>
                    <a href="{{ route('house.rooms.edit', $house->id) }}" class="btn btn-sm btn-info pull-right">
                        <i class="fa fa-edit"></i> Bewerken
                    </a>
                </div>
                <div class="card-body card-block">
                    All rooms in house + owners
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Notities</strong>
                    <a href="{{ route('house.view', $house->id) }}" class="btn btn-sm btn-info pull-right">
                        <i class="fa fa-edit"></i> Bewerken
                    </a>
                </div>
                <div class="card-body card-block">
                    Notes
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Bewoners</strong>
                    <button type="button" class="btn btn-sm btn-info pull-right" data-toggle="modal" data-target="#exampleModalLong">
                        <i class="fa fa-plus"></i> Bewoner inviten

                    </button>
                </div>
                <div class="card-body card-block">
                    Notes
                </div>
            </div>
        </div>
    </div>

    @include('user.add-user-modal')
@endsection