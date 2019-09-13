<nav class="navbar navbar-expand navbar-dark bg-white" style="margin-bottom: 0">
    <button type="button" id="sidebarCollapse" class="btn btn-info-sidenav">
        <i class="fas fa-align-left"></i>

    </button>
    <a class="navbar-brand" href="#">
        <img src="/images/Eazy_Customs_Logo.png" width="" height="30" class="d-inline-block align-top" alt="">
        <span class="pink">It's so easy!</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="" href="#">
                    <img src="/images/user.jpg" width="30" class="avatar " alt="avatar image" >
                    <!--                    <span class="sr-only">(current)</span>-->
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-power-off pink" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</nav>
