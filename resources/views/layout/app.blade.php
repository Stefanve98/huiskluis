<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Huiskluis</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>

        <!-- Left Panel -->
        @include('layout.navbar')
        <!-- Left Panel -->

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">

            <!-- Header-->
            @include('layout.header')
            <!-- Header-->

            @yield('content')

            @yield('scripts')
        </div> <!-- .content -->
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

    </body>
</html>
