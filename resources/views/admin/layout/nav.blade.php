<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <form class="container" action="{{route('logout.admin')}}" method="post" >

        @csrf
        <button  class="form-control" type="submit"> Logout</button>

    </form>
    <form class="container" action="{{route('home')}}" method="Get" >

        @csrf
        <button  class="form-control" >Website</button>

    </form>



</nav>
