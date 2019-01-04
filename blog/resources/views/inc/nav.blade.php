<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">The News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
        @include('inc.Auth')
                  </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort the news!
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">top ten</a>
                <a class="dropdown-item" href="#">top ten most visited</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>

              @if(Auth::check())
            <ul class="nav-item dropdown">
                <li>
                <a href="{{ route('blog.index') }}">
                        Manage my NewsPosts
                    </a>
                </li>
          </ul>
              @endif

        </div>
      </nav>