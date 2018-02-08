<div class="row">
    <nav class="col-lg-12">
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
            @if (isset($crumbs) && !empty($crumbs))
                @foreach ($crumbs as $crumb)
                    @if (isset($crumb['url']))
                        <li><a href="{{ $crumb['url'] }}">{{ $crumb['name'] }}</a></li>
                    @else
                        <li class="active">{{ $crumb['name'] }}</li>
                    @endif
                @endforeach
            @endif
        </ul>
    </nav>
</div>