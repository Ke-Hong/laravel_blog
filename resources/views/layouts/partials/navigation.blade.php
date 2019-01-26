<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark {{ $class ?? 'static-top' }}">
    <div class="container">
        <a class="navbar-brand" href="{{route('home.index')}}">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{(request()->is('/'))? 'active' : ''}}">
                    <a class="nav-link" href="{{route('home.index')}}">首頁
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('about'))? 'active' : ''}}">
                    <a class="nav-link" href="{{route('about.index')}}">關於</a>
                </li>
                <li class="nav-item {{(request()->is('posts'))? 'active' : ''}}">
                    <a class="nav-link" href="{{route('posts.index')}}">文章</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
