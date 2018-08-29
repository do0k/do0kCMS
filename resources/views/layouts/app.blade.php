<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('partials.nav.main')

    {{--<b-navbar toggleable="md" type="dark" variant="dark" class="py-0">

        <b-container>
            <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

            <b-navbar-brand href="#">
                <i class="do0k-dook text-white brand-logo"></i>
            </b-navbar-brand>

            <b-collapse is-nav id="nav_collapse">

                <b-navbar-nav>
                    <b-nav-item href="#">Link1</b-nav-item>
                    <b-nav-item href="#">Link2</b-nav-item>
                    <b-nav-item href="#">Link3</b-nav-item>
                </b-navbar-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">

                    <b-nav-form>
                        <b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Search"/>
                        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                    </b-nav-form>

                </b-navbar-nav>

            </b-collapse>
            <b-navbar-nav right>
                @if (Auth::guest())
                    <b-nav-item href="{{ route('login') }}">Login</b-nav-item>
                    <b-nav-item href="{{ route('register') }}">Register</b-nav-item>
                @else
                    <b-nav-item-dropdown right>
                        <!-- Using button-content slot -->
                        <template slot="button-content">
                            <em>Hi Pouria!</em>
                        </template>
                        <b-dropdown-item href="#">Profile</b-dropdown-item>
                        <b-dropdown-item href="#">Notifications</b-dropdown-item>
                        <b-dropdown-item href="#">Setting</b-dropdown-item>
                        <b-dropdown-divider></b-dropdown-divider>
                        <b-dropdown-item href="#">Signout</b-dropdown-item>
                    </b-nav-item-dropdown>
                @endif
            </b-navbar-nav>
        </b-container>

    </b-navbar>--}}

    <main class="py-4">
        @yield('content')
    </main>
</div>

{{--<script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>--}}
{{--<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>--}}
</body>
</html>
