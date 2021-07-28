<nav class="navbar">
    <div class="container">        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-list">
                <li class="nav-item">
                    <a href="{{route('pages.index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.addStudent')}}" class="nav-link">New Student</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.cohort')}}" class="nav-link">Cohort</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.evidence')}}" class="nav-link">Evidence</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.notes')}}" class="nav-link">Notes</a>
                </li>
                <li class="nav-item" style="float:right">
                    @if(Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            {{csrf_field()}}
                            <a href="{{route('logout')}}" class="nav-link">Log out</a>
                        </form>
                    @else
                        <a href="{{route('login')}}" class="nav-link">Log in</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>