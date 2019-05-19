<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$setting[0]->web_name}}</title>
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/all.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./css/smoothslides.theme.css">
  <link rel="stylesheet" href="./css/slick-theme.css">
  <link rel="stylesheet" href="./css/slick.css">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>

  <div class="container-fluid header-container">
  <div class="row">
    <div class="container">
      <header>
        <a class="a-logo" href="#">
          <img src="{{url('storage/',$setting[0]->image)}}" alt="logo">
        </a>
        <ul>
          <li>
            <a href="./index">
                <span>
                  Home
                </span>
            </a>
          </li>
          <li class="drop-down-li">
            <a href="./projects">
                <span>
                  <i class="fas fa-angle-down"></i>
                  Projects
                </span>
            </a>
            <ul class="inside-ul inside-ul-services">
              <li class="sub-drop-down-li">
                <a href="./currentProject">
                    <span>
                      <i class="fas fa-angle-right"></i>
                      current projects
                    </span>
                </a>
              </li>
              <li>
                <a href="./finishedProject">
                    <span>
                      <i class="fas fa-angle-right"></i>
                      Finished Projects
                    </span>
                </a>
              </li>
              <li class="line-bottom">
              </li>
            </ul>
          </li>
          <li>
            <a href="./about">
                <span>
                  About Us
                </span>
            </a>
          </li>
          <li>
            <a href="./contact">
                <span>
                  Contact Us
                </span>
            </a>
          </li>
          <li>
            <a href="#">
                <span>
                  Arabic
                </span>
            </a>
          </li>
        </ul>

      </header>
    </div>
  </div>
</div>

  <div class="visible-header-md">

    <div class="lines-logo">
      <div class="lines">
        <span class="line first-line"></span>
        <span class="line middle-line"></span>
        <span class="line last-line"></span>
      </div>
      <a class="logo" href="./index">
        <img src="{{url('storage/',$setting[0]->image)}}" alt="">
      </a>
    </div>

    <div class="header-md">

      <ul class="nav-ul">
        <li>
          <a href="./index"><span>Home</span></a>
        </li>
        <li>
          <a href="./about"><span>About Us</span></a>
        </li>
        <li class="products-li">
          <a class="drop-A" href="./projects"><span>Projects</span> <i class="drop-down-i fas fa-angle-down"></i></a>
          <ul class="md-inside-ul-A">
            <li>
              <a href="./projects">
                Current Projects
              </a>
            </li>

            <li>
              <a href="./projects">
                Finished Projects
              </a>
            </li>

          </ul>
        </li>
        <li>
          <a href="./contact"><span>Contact Us</span></a>
        </li>
        <li>
          <a href="./index">عربى</a>
        </li>
      </ul>

    </div>

  </div>

  <div class="container-fluid home-slider-container">
    <div class="row">

      <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner">
          @foreach($slider as $slide => $slider)

          <div class="carousel-item @if($slide == 0 ) @echo active @endif">

            <div class="slider-img">
              <div class="slider-header">
                <h1 class="wow fadeInUp">
                  {{$slider->name}}
                </h1>
                <h5 class="wow fadeInUp" data-wow-delay="1s">
                  {{$slider->detail}}
                </h5>
                <div class="buttons">
                  <a class="p-button" href="{{url('/projects')}}">
                    Projects
                    <i class="fas fa-angle-double-right"></i>
                  </a>
                  <a class="c-button" href="{{url('/contact')}}">
                    Find Us
                    <i class="fas fa-angle-double-right"></i>
                  </a>
                </div>
              </div>
              <img class="d-block w-100" src="{{url('storage/' .$slider->image)}}" alt="img-{{$slide}}">
            </div>
          </div>
            @endforeach



        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>



  <div class="container-fluid counter-container">
    <div class="row">
      @foreach($counter as $counter)
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="single-counter">
          <img src="{{url('storage/' .$counter->image)}}" alt="buildings">
          <span class="counter">{{$counter->counter}}</span>
          <p class="counter-title">
            {{$counter->name}}
          </p>
        </div>
      </div>
      @endforeach



    </div>
  </div>


  <div class="slider">
    <div class="owl-carousel owl-theme" id="home-owl-carousel">

      @foreach($project as $project)

      <div class="item">
        <a href="./single-project/{{$project->id}}" class="single-project">
          <div class="img">
            <img src="{{url('storage/' .$project->image)}}" alt="p5">
          </div>
          <div class="title-des">
            <div class="title">
              {{$project->name}}
            </div>
            <div class="description">
             {{$project->mini_detail}}
            </div>
          </div>
        </a>
      </div>

      @endforeach

    </div>
  </div>


  <footer>
    <div class="top">

      <div class="left">
        <div class="logo">
          <img src="{{url('storage/',$setting[0]->image)}}" alt="logo">
        </div>
        <div class="links">
          <ul class="links-ul">
            <li><a href="./index">Home</a></li>
            <li><a href="./about">About Us</a></li>
            <li><a href="./projects">Projects</a></li>
            <li><a href="./contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="social">
          <p class="follow-p">
            Follow Us
          </p>
          <ul class="social-ul">
            <li>
              <a href="{{($setting[0]->facebook)}}">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="{{($setting[0]->twitter)}}">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="{{($setting[0]->google_map)}}">
                <i class="fas fa-map-marker-alt"></i>
              </a>
            </li>
            <li>
              <a href="{{($setting[0]->instegram)}}">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="{{($setting[0]->whatisapp)}}">
                <i class="fab fa-whatsapp"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="middle">
        <div class="about">
          <p class="about-h">
            About Us
          </p>
          <p>
            {{$setting[0]->aboutus_detail}}
          </p>
        </div>
      </div>
      <div class="right">
        <div class="address">
          <p class="addresses-h">Address</p>


          <div class="branches">
            @foreach($addresses as $address)
              <div class="branch">

                <p class="branch-name">
                  {{$address-> brunch}}
                </p>
                <p>
                  {{$address->address}}<br>
                  {{$address->phone }}
                </p>

              </div>@endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="bottom">
      <p>
        Copyright &copy; BE Group
      </p>
    </div>
  </footer>


  <script src=" ./js/jquery-3.3.1.min.js"> </script>
  <script src="./js/popper.min.js">
  </script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/wow.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/smoothslides-2.1.0.min.js"></script>
  <script src="./js/mixitup.min.js"></script>
  <script src="./js/jquery.waypoints.min.js"></script>
  <script src="./js/jquery.counterup.js"></script>
  <script src="./js/jquery-migrate-1.2.1.min.js"></script>
  <script src="./js/slick.min.js"></script>
  <script src="./js/index.js"></script>

</body>

</html>