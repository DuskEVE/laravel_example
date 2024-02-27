<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('../resources/css/dusk.css') }}">
</head>
<body class="dusk-bg-gray">

  <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal-label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="login-modal-label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          login function work in prograss
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="top">
      <div class="top-img"></div>
  </div>

  <div class="nav-placeholder"></div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dusk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                個人作品集
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./calendar/">Calendar(萬年曆)</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="./p01/">作業二(WIP)</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                網頁設計乙級題目練習成果
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./web_b01/">第一題</a></li>
                <li><a class="dropdown-item" href="./web_b02/">第二題</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
          <!-- <form class="d-flex" role="search"> -->
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
          <!-- </form> -->
          <div class="d-flex">
            <button class="btn btn-outline-success login-btn">login</button>
          </div>
        </div>
      </div>
  </nav>

  <div class="container dusk-bg-lightgray">
      <div id="carouselAuto" class="carousel slide" data-bs-ride="carousel" style="height: 400px;">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/id/1/600/400" class="d-block m-auto" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/id/2/600/400" class="d-block m-auto" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/id/3/600/400" class="d-block m-auto" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselAuto" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselAuto" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>

  <div class="container dusk-bg-lightgray vh-100">
    <div class="text-center dusk-bg-lightgray text-light p-5">
      <h1>現在這裡什麼都沒有XD</h1>
    </div>
  </div>

  <div class="footer bg-dark text-light d-flex justify-content-center align-items-center">
      <span class="m-auto">page footer</span>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('../resources/js/dusk.js') }}"></script>
</body>
</html>