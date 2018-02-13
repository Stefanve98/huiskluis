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
                            @foreach($roomTypes as $roomType)
                            <form class="form-inline">
                                <div class="form-group">
                                    <labv jffor="rg-from">Ab: </label>
                                    <input type="text" id="rg-from" name="rg-from" value="" class="form-control">
                                </div>
                                <!-- rest of form -->
                            </form>
{{--                                test {!! Form::number('count', null, ['class' => 'form-control']) !!}--}}
                            @endforeach
                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
