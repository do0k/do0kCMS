<b-navbar toggleable="md" type="dark" variant="dark" class="py-0" fixed="top">

    <b-container fluid>
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
                    <b-dropdown-item href="{{ route('manage.dashboard') }}">Manage</b-dropdown-item>
                    <b-dropdown-divider></b-dropdown-divider>
                    <b-dropdown-item href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </b-dropdown-item>
                </b-nav-item-dropdown>
            @endif
        </b-navbar-nav>
    </b-container>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</b-navbar>
