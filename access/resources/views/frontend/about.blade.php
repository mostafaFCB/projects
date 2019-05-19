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
              <a href="./finishedProject">
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


  <div class="container-fluid about-page">
    <div class="social-icons">
      <ul>
        <li>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-map-marker-alt"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
      </ul>
    </div>

    <div class="container" style="margin-bottom: 2rem; z-index: 1;">
      <div class="row" style="align-items: center;">
        <div class="col">
          <h2 style="margin-bottom: 2rem;">About Us</h2>
        </div>
      </div>
  @foreach($aboutuscontent as $aboutuscontent)
      <div class="row" style="margin-bottom: 2rem;">
        <div class="about-s">
          <div class="about-text">
            <h3 class="about-title">
              {{$aboutuscontent->name}}
            </h3>
            <p class="p-t">
              {{$aboutuscontent->detail}}
            </p>
            <div class="quote"></div>
          </div>

          <div class="about-img">
            <img src="{{url('storage/'.$aboutuscontent->image)}}" alt="about image">
          </div>
        </div>
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

              </div>
            @endforeach
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


  <script src="./js/jquery-3.3.1.min.js"> </script>
  <script src="./js/popper.min.js"></script>
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