@extends('layout.app')

@section('content')
    @include('element.breadcrumbs', [
        'crumbs' => [
            ['url' => route('house.view', $house->id), 'name' => 'House'],
            ['name' => 'Rooms'],
        ]
    ])

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">House rooms</div>

                    <div class="card-body">
                        {!! BootForm::open(['url' => route('house.rooms.update', $house->id), 'method' => 'put']) !!}
                        {{ csrf_field() }}
                            @foreach($roomTypes as $key => $roomType)

                                <div class="col-lg-12">
                                    <div class="col-lg-2">{{ $roomType->name }}</div>
                                    <div class="col-lg-2">
                                        <input class="form-control roomCountField rooms_{{ $roomType->id }}_count" type="number" readonly="" value="{{ count($roomType->rooms) }}">
                                    </div>
                                    <i class="fa fa-plus mt-1 ml-3 fa-2x cursor-pointer" onclick="addRoom({{ $roomType->id }})"></i>

                                    <div class="form-data-{{ $roomType->id }}">
                                        @foreach($roomType->rooms as $room)
                                            @include('rooms.partials.room-info', $room)
                                        @endforeach
                                    </div>

                                </div>

                            @endforeach

                            <div class="col-lg-12">
                                <input class="btn btn-primary pull-right" type="submit" value="Opslaan">
                            </div>

                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/rooms/edit.js"></script>
@endsection