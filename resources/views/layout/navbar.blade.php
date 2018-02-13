<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('house.index') }}">
                {{--<img src="/images/logo.png" alt="Logo">--}}
                Huiskluis
            </a>
            <a class="navbar-brand hidden" href="{{ route('house.index') }}">
                {{--<img src="../images/logo2.png" alt="Logo">--}}
                Huiskluis
            </a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('house.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>