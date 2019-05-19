<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$setting[0]->web_name}}</title>
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/smoothslides.theme.css')}}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
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
            <a href="{{url('/index')}}">
                <span>
                  Home
                </span>
            </a>
          </li>
          <li class="drop-down-li">
            <a href="/projects">
                <span>
                  <i class="fas fa-angle-down"></i>
                  Projects
                </span>
            </a>
            <ul class="inside-ul inside-ul-services">
              <li class="sub-drop-down-li">
                <a href="/currentProject">
                    <span>
                      <i class="fas fa-angle-right"></i>
                      current projects
                    </span>
                </a>
              </li>
              <li>
                <a href="/finishedProject">
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
            <a href="/about">
                <span>
                  About Us
                </span>
            </a>
          </li>
          <li>
            <a href="/contact">
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



  <div class="container-fluid single-project">
    <div class="img-div-top">
      <div class="offer-header">
        <h1>
          [- PROJECT -]
        </h1>
      </div>
    </div>

    <div class="container">

      <div class="row" style="margin-top: 4rem;">
        <div class="col-lg-6 col-md-10 col-sm-12">
          <div class="row">
            <div class="col">
              <div class="row">
                <div class="col">
                  <div class="details-img-slider">
                    <div class="owl-carousel owl-details owl-theme">
                      <img data-hash="img-1" class="img-details" src="{{url('storage/' .$project->image)}}">
                      <img data-hash="img-2" class="img-details" src="{{url('storage/' .$project->slider_image)}}">
                      <img data-hash="img-3" class="img-details" src="./images/p-3.jpeg">
                      <img data-hash="img-4" class="img-details" src="./images/p-4.jpg">
                      <img data-hash="img-5" class="img-details" src="./images/p-5.jpg">
                      <img data-hash="img-6" class="img-details" src="./images/p-6.jpeg">
                    </div>

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="hash-slider">
                    <a href="#img-1">
                      <img class="img-hash" src="{{url('storage/' .$project->image)}}">
                    </a>
                    <a href="#img-2">
                      <img class="img-hash" src="{{url('storage/' .$project->slider_image)}}">
                    </a>
                    <a href="#img-3">
                      <img class="img-hash" src="./images/p-3.jpeg">
                    </a>
                    <a href="#img-4">
                      <img class="img-hash" src="./images/p-4.jpg">
                    </a>
                    <a href="#img-5">
                      <img class="img-hash" src="./images/p-5.jpg">
                    </a>
                    <a href="#img-6">
                      <img class="img-hash" src="./images/p-6.jpeg">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-10 col-sm-12" style="margin-bottom: 3rem;">
          <div class="about-hotel">
            <h5>{{$en_project[$key]->name}}</h5>
            <ul>
              <li>
                <p>
                  {{$en_project[$key]->mini_detail}}
                </p>
              </li>
              <li>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda
                  perferendis inventore accusantium ullam distinctio eius veritatis modi.
                </p>
              </li>
              <li>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda
                  perferendis inventore accusantium ullam distinctio eius veritatis modi. </p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <div class="wow fadeIn offer-body">
            <div class="prices">
              <p class="sec-title">Project details</p>
              <div class="discription">
                <div class="price-1">
                  <ul>
                    <li>
                      <p>
                        {{$en_project[$key]->detail}}
                      </p>
                    </li>
                    <li>
                      <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda
                        perferendis inventore accusantium ullam distinctio eius veritatis modi.
                      </p>
                    </li>
                    <li>
                      <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda
                        perferendis inventore accusantium ullam distinctio eius veritatis modi.
                      </p>
                    </li>
                    <li>
                      <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda
                        perferendis inventore accusantium ullam distinctio eius veritatis modi.
                      </p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12" style="margin-bottom: 3rem;">
          @if ($message = Session::get('success'))
            <div class="alert alert-success" align="center">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            </div>
          @endif
          <form action="{{Route('message')}}" method="post">
            {{csrf_field()}}
            <div class="form-item">
              <label for="first-name">First Name :</label>
              <input type="text" name="firstname" id="first-name" />
            </div>
            <div class="form-item">
              <label for="last-name">Last Name :</label>
              <input type="text" name="lastname" id="last-name" />
            </div>
            <div class="form-item">
              <label for="email">Email Adress :</label>
              <input type="emial" name="email" id="email" />
            </div>
            <div class="form-item">
              <label for="phone">Phone Number :</label>
              <input type="text" name="phone" id="phone" />
            </div>
            <div class="form-item">
              <label for="message">Description : </label>
              <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
            </div>
            <button class="btn send-btn" type="submit">Send</button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13810.917553664618!2d31.3379009!3d30.07329045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1551711704145"
              height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
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

  <script src=" {{asset('js/jquery-3.3.1.min.js')}}"> </script>
  <script src="{{asset('js/popper.min.js')}}">
  </script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/smoothslides-2.1.0.min.js')}}"></script>
  <script src="{{asset('js/mixitup.min.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>

</body>

</html>