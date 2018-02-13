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
                            {!! BootForm::submit('Opslaan') !!}

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