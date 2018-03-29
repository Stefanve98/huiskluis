{{--<div class="breadcrumbs" style="border-bottom: red">--}}
    {{--<div class="col-sm-12">--}}
        <div class="page-header">
            {{--<div class="page-title">--}}
                <ol class="breadcrumb text-right pl-3">
                    @if (isset($crumbs) && !empty($crumbs))
                        <li><a href="{{ route('house.index') }}"><i class="fa fa-home"></i> Home</a></li>
                        @foreach ($crumbs as $crumb)
                            @if (isset($crumb['url']))
                                <li><a href="{{ $crumb['url'] }}">{{ $crumb['name'] }}</a></li>
                            @else
                                <li class="active">{{ $crumb['name'] }}</li>
                            @endif
                        @endforeach
                    @endif
                </ol>
            {{--</div>--}}
        </div>
    {{--</div>--}}
{{--</div>--}}