@extends('layout.app')

@section('content')

@include('element.breadcrumbs', [
    'crumbs' => [
        ['name' => 'Houses'],
    ]
])

<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12">
            <a href="{{ route('house.create') }}" class="btn btn-primary pull-right" style="margin-right: 100px; margin-bottom: 15px">Huis toevoegen</a>
        </div>
    </div>

    @foreach($houses as $key => $house)
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">
                        House {{ $key + 1 }}
                        <a href="{{ route('house.view', $house->id) }}" class="btn btn-info pull-right">Bekijk</a>
                    </div>

                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="col-lg-4" style="height: 225px">
                                <img src="https://maps.googleapis.com/maps/api/streetview?size=250x250&location={{ $house->address->street . ' ' . $house->address->number . ',' . $house->address->city }}&key=AIzaSyAFFq4olLlonitvQnSWOjNQAkwJswu-fpM">
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-12">
                                    <b style="font-size: 18px">
                                        {{ $house->address->street . ' ' . $house->address->number }}, <br/>
                                        {{ $house->address->zip_code . ' ' . $house->address->city }}
                                    </b>
                                </div>
                                <div class="col-lg-12">
                                    Kamers: <br/>
                                    Opervlakten: <br />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
