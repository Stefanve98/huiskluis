@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Add a house</div>

                    <div class="card-body">
                        {!! BootForm::open(['url' => 'foo/bar']) !!}
                            <div class="col-lg-6 pull-right">
                                {!! BootForm::text('Test', 'email') !!}
                            </div>
                            {!! BootForm::submit('Opslaan', 'btn-primary pull-right') !!}
                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
