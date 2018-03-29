@extends('layout.app')

@section('content')
    @include('element.breadcrumbs', [
        'crumbs' => [
            ['name' => 'Create'],
        ]
    ])

    <div class="mt-5">
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header">Add a house</div>

                <div class="card-body">
                    {!! BootForm::open(['url' => route('house.store'), 'method' => 'post']) !!}

                        <div class="col-lg-12 image-header mb-5"></div>

                        <div class="col-lg-6">
                            {!! BootForm::text('address[zip_code]', 'Zip code') !!}
                        </div>

                        <div class="col-lg-6">
                            {!! BootForm::text('address[city]', 'City') !!}
                        </div>

                        <div class="col-lg-6">
                            {!! BootForm::text('address[street]', 'Street') !!}
                        </div>

                        <div class="col-lg-3">
                            {!! BootForm::text('address[number]', 'Number') !!}
                        </div>

                        <div class="col-lg-3">
                            {!! BootForm::text('address[additional]', 'Additional') !!}
                        </div>

                        <div class="col-lg-3">
                            {!! BootForm::text('owner_from', 'Owner from', null, ['class' => 'form-control datepicker']) !!}
                        </div>

                        <div class="col-lg-3">
                            {!! BootForm::text('owner_until', 'Owner until', null, ['class' => 'form-control datepicker']) !!}
                        </div>

                        <div class="col-lg-6 mt-4">*Don't fill owner until if you are the current owner</div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right">Opslaan</button>
                        </div>

                    {!! BootForm::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/house/create.js"></script>
@endsection