@extends('layout.app')

@section('content')
    @include('element.breadcrumbs', [
        'crumbs' => [
            ['url' => route('house.index'), 'name' => 'House'],
            ['name' => 'Create'],
        ]
    ])

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">Add a house</div>

                    <div class="card-body">
                        {!! BootForm::open()->action(route('house.rooms.update', $house->id))->put() !!}
                            @foreach($roomTypes as $key => $roomType)
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">{{ $roomType->name }}</label>
                                    <div class="col-2">
                                        <input class="form-control roomTypes" type="number"
                                               {{--name="roomType[{{ $roomType->id }}]"--}}
                                        >
                                    </div>
                                </div>

                                <div id="ttttt"></div>
                                {{--<div class="row">--}}
                                    {{--<div class="offset-3 col-lg-9 mb-4" id="roomType_{{ $roomType->id }}">--}}
                                        {{--<input type="text" name="roomType[{{ $roomType->id }}][0][surface]"> M<sup>2</sup>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            @endforeach
                            {!! BootForm::submit('Opslaan') !!}
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