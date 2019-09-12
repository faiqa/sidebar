


<nav id="sidebar" class="bg-purple">
    <div class="sidebar-header bg-purple" style="padding-bottom: 0">
        {{--    &lt;!&ndash;                    <input type="search" class="form-control" placeholder="Search...">&ndash;&gt;--}}
        <form class="form-inline" method="post" action="/search_query">
            @csrf
            <div class="input-group show">
                <input id="search" name="search" type="text" class="form-control border-0" placeholder="Search...">
                <div class="input-group-append">
                    <button class="btn btn-secondary bg-white border-0 " id="search-field" type="submit">
                        <i class="fa fa-search purple"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="#">
                <i class="fas fa-home navIcon "></i>
                <span class="navText">Home</span>
            </a>
        </li>

        {!! $kb !!}
        {!! $chat !!}

        <li>

            <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-cog navIcon  " aria-hidden="true"></i>
                <span class="navText">Settings</span>
            </a>
            <ul class="collapse list-unstyled menu-level-2" id="settingsSubmenu">
                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#">Subscriptions</a>
                </li>
                <li>
                    <a href="#">Account Settings</a>
                </li>
                <li>
                    <a href="#">Notifications Preferences</a>
                </li>
                <li>
                    <a href="#">Language Preferences</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-info-circle navIcon  "></i>
                <span class="navText">Help</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-location-arrow navIcon  "></i>
                <span class="navText">Contact Us</span>
            </a>
        </li>
    </ul>
</nav>

