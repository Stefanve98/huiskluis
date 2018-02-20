@extends('layout.app')

@section('content')
    @include('element.breadcrumbs', [
        'crumbs' => [
            ['url' => route('house.index'), 'name' => 'House'],
            ['name' => 'Create'],
        ]
    ])

    <div class="mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Add a house</div>

                    <div class="card-body">
                        {!! BootForm::open()->action(route('house.store')) !!}

                            <div class="col-lg-12 image-header mb-5"></div>

                            <div class="col-lg-6">
                                {!! BootForm::text('Zip code', 'address[zip_code]') !!}
                            </div>

                            <div class="col-lg-6">
                                {!! BootForm::text('City', 'address[city]') !!}
                            </div>

                            <div class="col-lg-6">
                                {!! BootForm::text('Street', 'address[street]') !!}
                            </div>
                            <div class="col-lg-3">
                                {!! BootForm::text('Number', 'address[number]') !!}
                            </div>
                            <div class="col-lg-3">
                                {!! BootForm::text('Additional', 'address[additional]') !!}
                            </div>

                            <div class="col-lg-3">
                                {!! BootForm::text('Owner from', 'owner_from', null)->class('form-control datepicker') !!}
                            </div>

                            <div class="col-lg-3">
                                {!! BootForm::text('Owner until', 'owner_until', null)->class('form-control datepicker') !!}
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary pull-right">Opslaan</button>
                            </div>

                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/house/create.js"></script>
@endsection