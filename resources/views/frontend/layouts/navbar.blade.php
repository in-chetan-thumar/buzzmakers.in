<header class="mb-5">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid responsive-container">
        <div class="mobile-nav">
          <a class="navbar-brand pt-0" href={{route('frontend.home')}}>
            <img src={{asset('assets/frontend/images/logo.svg')}} class="logo" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#buzzmenu"
            aria-controls="buzzmenu" aria-expanded="false" aria-label="Toggle navigation">
            Menu
          </button>
        </div>
        <div class="desktop-menu">
          <ul class="navbar-nav ms-auto mb-lg-0">

            <li class="nav-item">
              <a class="nav-link" href={{route('frontend.about')}}>About Us</a>
            </li>
            <li class="nav-item dropdown">
{{--              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                aria-expanded="false" >--}}
{{--                Services--}}
{{--              </a>--}}
              <ul class="dropdown-menu">
                <li class="arrow-up">
                  <div></div>
                </li>
                <li>
                  <a class="dropdown-item" href={{route('frontend.services.strategy')}}>Strategy</a>
                </li>
                <li>
                  <a class="dropdown-item" href={{route('frontend.services.content')}}>Marketing</a>
                </li>
                <li>
                  <a class="dropdown-item" href={{route('frontend.services.technology')}}>Technology</a>
                </li>
                <li>
                  <a class="dropdown-item" href={{route('frontend.services.design')}}>Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href={{route('frontend.services.studio')}}>Buzz Studio</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href={{route('frontend.work')}}>Our Work</a>
            </li>
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" href="#">Blogs</a>--}}
{{--            </li>--}}
            <li class="nav-item">
              <a class="nav-link" href={{route('frontend.news')}}>News & Media</a>
            </li>
{{--            <li class="nav-item">--}}
{{--              <a class="nav-link" href="{{route('frontend.careers')}}">Careers</a>--}}
{{--            </li>--}}
            <li class="nav-item">
              <a class="nav-link" href={{route('frontend.contact')}}>Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- collpase menu for mobile start -->
  <div class="collapse mobile-menu-area" id="buzzmenu">
    <img src="{{asset('assets/frontend/images/logo.svg')}} "style="width:125px; aspect-ratio: 16/9;" alt="logo">
    <ul class="navbar-nav ms-auto mb-lg-0">
      <li class="nav-item dropdown">
{{--        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--          Services--}}
{{--        </a>--}}
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href={{route('frontend.services.strategy')}}>Strategy</a></li>
          <li><a class="dropdown-item" href={{route('frontend.services.content')}}>Marketing</a></li>
          <li><a class="dropdown-item" href={{route('frontend.services.technology')}}>Technology</a></li>
          <li><a class="dropdown-item" href={{route('frontend.services.design')}}>Design</a></li>
          <li><a class="dropdown-item" href={{route('frontend.services.studio')}}>Buzz Studio</a></li>
        </ul>
      </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('frontend.about')}}>About Us</a>
        </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href={{route('frontend.work')}}>Our Work</a>
      </li>


{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href={{route('frontend.blog')}}>Blogs</a>--}}
{{--      </li>--}}
      <li class="nav-item">
        <a class="nav-link" href={{route('frontend.news')}}>News & Media</a>
      </li>
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href={{route('frontend.careers')}}>Careers</a>--}}
{{--      </li>--}}
        <li class="nav-item">
            <a class="nav-link" href={{route('frontend.contact')}}>Contact</a>
        </li>
      <li class="close-menu-btn">
        <a href="#" data-bs-toggle="collapse" data-bs-target="#buzzmenu" aria-expanded="false" aria-controls="buzzmenu"><i
            class="bi bi-x-circle-fill"></i></a>
      </li>
    </ul>
  </div>
