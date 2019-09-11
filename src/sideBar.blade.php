<style>
    .sidenav {
        display: none;
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        /*background-color: #111;*/
        background-color: #941B81;
        overflow-x: hidden;
        padding-top: 60px;
        margin-top: 70px;
        border-right: 1px solid #d60b51;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 15px;
        /*color: #818181;*/
        color: white;
        display: block;
        /*border-bottom: #941b80 solid 0.5px;*/
        border-top: white solid 0.5px;
    }

    .sidenav a:hover {
        /*color: #f1f1f1;*/
        color: white;
        background: #d60b51;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0px;
        right: 25px;
        font-size: 15px;
        margin-left: 50px;
        border-bottom: none !important;
        border-top: none !important;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
</style>

<div id="mySidenav" class="sidenav">
    {{--    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>--}}
    <a href="javascript:void(0)" style="background: none!important; color: white; right: 3px" class="closebtn" onclick="closeNav()"><small>Close</small></a>
    <a href="#"><i class="fa fa-home mr-2" aria-hidden="true"></i>Home</a>
    <a href="#"><i class="fa fa-credit-card mr-2" aria-hidden="true"></i>Subscription</a>
    <a href="#"><i class="fa fa-bullhorn mr-2" aria-hidden="true"></i>What's New ?</a>
    <a href="#" style="border-bottom: white solid 0.5px;"><i class="fa fa-info-circle mr-2" aria-hidden="true"></i>Help</a>
</div>

<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.display = "none";
    }
</script>


