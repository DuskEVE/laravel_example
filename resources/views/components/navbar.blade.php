<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{$slot}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            {{-- <a class="nav-link active" aria-current="page" href="#">Home</a> --}}
            <x-navlink  href="/" :active="request()->is('/')" type="a">
                Home
            </x-navlink>
          </li>
          <li class="nav-item">
            <x-navlink  href="one" :active="request()->is('one')" type="a">
                Link one
            </x-navlink>
          </li>
          <li class="nav-item">
            <x-navlink  href="two" :active="request()->is('two')" type="a">
                Link two
            </x-navlink>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>