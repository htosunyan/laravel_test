<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">{{ auth()->user() ? auth()->user()->name : 'Test'  }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ $page=='home' ? 'active' : '' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="/users">Users</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ $page == 'new-post' ? 'active' : '' }}" href="/new-post">Add new post</a>
                        <a class="dropdown-item" {{ $page == 'my-posts' ? 'active' : '' }} href="/my-post">My posts</a>
                        <a class="dropdown-item {{ $page == 'all-posts' ? 'active' : '' }}" href="/posts">See all posts</a>
                    </div>
                </li>
            @endif
        </ul>

        <ul class="navbar-nav my-2 my-lg-0">
            @if(auth()->user())
                <li class="nav-item {{ $page=='login' ? 'active' : '' }}">
                    <a class="nav-link" href="/logout">LogOut <span class="fas fa-sign-out"></span> </a>
                </li>
            @else
                <li class="nav-item {{ $page=='login' ? 'active' : '' }}">
                    <a class="nav-link" href="/login">SignIn <span class="fas fa-sign-in"></span> </a>
                </li>
                <li class="nav-item {{ $page=='register' ? 'active' : '' }}">
                    <a class="nav-link" href="/register">SignUp <span class="fas fa-plus"></span> </a>
                </li>
            @endif
        </ul>
    </div>
</nav>