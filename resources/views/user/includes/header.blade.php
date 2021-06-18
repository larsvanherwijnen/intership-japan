<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a href="#" class="text-white text-uppercase font-weight-bold">Internship Japan</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Mission</a></li>
                    <li class="nav-item active"><a href="{{route('searchInterns')}}" class="nav-link text-uppercase font-weight-bold">Search Interns<span
                                class="sr-only">(current)</span></a></li>
                    @if(Auth::check())
                        <li class="nav-item">  <a href="{{route('logout')}}" class="nav-link text-uppercase font-weight-bold">logout</a></li>
                        <li class="nav-item"><a href="{{route("profile", ['id' => Auth::user()->id ])}}" class="nav-link text-uppercase font-weight-bold"><i class="fas fa-user"></i> Profile</a></li>
                    @else
                        <li class="nav-item"><a href="{{route("login")}}" class="nav-link text-uppercase font-weight-bold">Login or sign up</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="PageBG PageBG--home d-flex">
    <div class="container d-flex justify-content-center">
        <div class="d-flex flex-column text-center align-middle justify-content-center text-white">
            <h1 class="header-text-size">Intership Japan</h1>
            <h6>Non-profit organization for establish and support a new andbetter system of internships in
                Japan</h6>
        </div>
    </div>
</div>


