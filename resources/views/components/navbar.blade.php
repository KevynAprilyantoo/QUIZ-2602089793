<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="roww">
  <div class="col-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src={{asset ('images/logo.png')}} alt="Logo" style="width: 100px; height: auto;">
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active me-3">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
    
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarCategory" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarCategory">
              @foreach ($categories as $category)
                <a class="nav-link dropdown-item" href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
              @endforeach
            </div>
        </li>
    
          <li class="nav-item active me-3" >
            <a class="nav-link" href="{{ route('writer') }}">Writers</a>
          </li>
          
          <li class="nav-item active me-3">
            <a class="nav-link" href="{{ route('about') }}">About Us</a>
          </li>
    
          <li class="nav-item active me-4">
            <a class="nav-link" href="{{ route('popular') }}">Popular</a>
          </li>
    
        </ul>
      </div>
    </nav>
  </div>
</div>