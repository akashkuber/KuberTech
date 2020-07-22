<!DOCTYPE html>
<html lang="en">
<head>
  <title>KuberTech | Learn free programming from professional developer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  footer {
    text-align: center;
    padding: 20px 0;
    color: pink;
    width: 100%;
  }
  .carousel-caption {
  	top: 10%;
  }
  
  footer a, footer a:hover {
    color: white;
  }
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  .back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
  }
    .carousel-item .img-fluid {
      width:100%;
    }
  .carousel-item a {
    display: block;
    width:100%;
  }
  .navbar-brand {
  	font-weight: bold;
  }
  @media only screen 
    and (min-width : 320px) 
    and (max-width : 480px) {
        .carousel-caption p {font-size: 14px;}
        .carousel-caption h1 {font-size: 18px;}
    }
  .card-heading-first h1,
  .card-heading-second h1,
  .card-heading-third h1,
  .card-heading-forth h1
  { 
    text-align: center;
    padding: 50px 0;
    color: white;
  }
  .card-heading-first {
  	background-image: radial-gradient(circle farthest-corner at 100% 100%,#d873e8,#4637d0);
  }
  .card-heading-second {
  	background-image: radial-gradient(circle farthest-corner at 100% 100%,#ffc247,#f75f1e);
  }
  .card-heading-third {
  	background-image: radial-gradient(circle farthest-corner at 100% 100%,#bae447,#12b35d);
  }
  .card-heading-forth {
  	background-image: radial-gradient(circle farthest-corner at 100% 100%,#009fff,#2343ff);
  }
  
  .card-description {
  	background-color: #222b45;
    color: white;
    height: 150px;
  }
  #about-us .jumbotron{
  	background: linear-gradient(45deg, rgb(106, 120, 209), rgb(0, 40, 80))
  }
  
  </style>
  <script>
  $(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
</script>
</head>
<body>
<?php echo '
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="https://akashkuber.github.io/KuberTech/">KuberTech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item nav-link">
        <a class="nav-link active" href="#homepage">Home</a>
      </li>
      <li class="nav-item nav-link">
        <a class="nav-link" href="#my-portfolio">Portfolio</a>
      </li>
      <li class="nav-item nav-link">
        <a class="nav-link" href="#my-blog">Blog</a>
      </li>
      <li class="nav-item nav-link">
        <a class="nav-link" href="#about-us">About</a>
      </li>
      <li class="nav-item nav-link">
        <a class="nav-link" href="#contact-us">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container-fluid" id="homepage">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 0;">
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="a.jpg" alt="Los Angeles" >
            <div class="carousel-caption">
                      <h1>Learn WEB Application Development</h1>
                      <p>Here you can learn the HTML5, CSS3, Javascript, ReactJs, AngularJs, Java.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="b.jpg" alt="Chicago">
            <div class="carousel-caption">
                      <h1>Learn Mobile App Development</h1>
                      <p>Here you can learn the Android and iOS app developement using ionic, React Native, swift Programming.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="c.jpg" alt="New York">
            <div class="carousel-caption">
                      <h1>Learn API Development</h1>
                      <p>Here you can learn the NodeJs, ExpressJs, Third party API integration, Social media API integration.</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
    
    
  </div>
</div>


<section class="jumbotron text-center" id="my-portfolio">
        <div class="container">
          <h1 class="jumbotron-heading">Portfolio</h1>
          <p class="lead text-muted">We are corporate level developer and we have mission to teach coporate level programming to the college student.</p>
          <p class="lead text-muted"> Here you can learn free programming languages and create your own website, mobile application and API.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Website Designing</a>
            <a href="#" class="btn btn-secondary my-2">APP Developement</a>
            <a href="#" class="btn btn-success my-2">API Implementation</a>
          </p>
        </div>
      </section>

<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
             <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body card-heading-second">
                  <h1 class="card-text">HTML5</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">HTML5 is the latest Hypertext Markup Language (HTML), the standard programming language for describing the contents and appearance of Web pages.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body card-heading-third">
                  <h1 class="card-text">CSS3</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">CSS3 used to format structured content. It is responsible for font properties, colors, text alignments, graphics, background images, tables and other components.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body card-heading-forth">
                  <h1 class="card-text">Javascript</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">JavaScript is a scripting or programming language that allows you to implement complex features on web pages. JavaScript is a client scripting language which is used for creating web pages.</p>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
               <div class="card-body card-heading-first">
                  <h1 class="card-text">RectJs</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">React. js is an open-source JavaScript library that is used for building user interfaces specifically for single-page applications. React also allows us to create reusable UI components</p>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
               <div class="card-body card-heading-second">
                  <h1 class="card-text">AngularJs</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">AngularJS is an open source full featured JavaScript framework developed by Google. It was designed to build dynamic web apps in the first place.</p>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body card-heading-third">
                  <h1 class="card-text">NodeJs</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">Node. js is primarily used for non-blocking, event-driven servers, due to its single-threaded nature. It's used for traditional web sites and back-end API services.</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body card-heading-second">
                  <h1 class="card-text">Swift</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">Swift is a powerful and intuitive programming language for macOS, iOS, watchOS, tvOS and beyond. Swift code is safe by design, yet also produces software that runs lightning-fast.</p>
                </div>
              </div>
            </div> 
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
               <div class="card-body card-heading-third">
                  <h1 class="card-text">Ionic</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">Ionic is an HTML5 mobile app development framework targeted at building hybrid mobile apps. Hybrid apps are essentially small websites running in a browser shell.</p>
                </div>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
               <div class="card-body card-heading-forth">
                  <h1 class="card-text">React Native</h1>
                </div>
                <div class="card-body card-description">
                  <p class="card-text">React Native is an open-source mobile application framework created by Facebook. It is used to develop applications for Android, iOS, Web.</p>
                </div>
              </div>
            </div>  
            
          </div>
        </div>
      </div>

<div class="container" id="about-us">
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">About Us</h1>
          <p class="lead my-3">Our developer, designers, and software engineers provide free full-stack development and consulting services.</p>
         
        </div>
      </div>  
      
<div class="row mb-2" id="my-blog">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Develope</strong>
              <h3 class="mb-0">
                <a target="_blank" class="text-dark" href="http://akashkuber.blogspot.com/2019/12/angular-basics.html">AngularJs Blog</a>
              </h3>
              <div class="mb-1 text-muted">Dec 22</div>
              <p class="card-text mb-auto">These Angular docs help you learn and use the Angular framework and development platform, from your first single-page apps.</p>
              <a target="_blank" href="http://akashkuber.blogspot.com/2019/12/angular-basics.html">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="angular logo" style="width: 190px; height: 190px;padding: 20px 20px 0px 0px;" src="AngularJs.svg" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a target="_blank" class="text-dark" href="http://akashkuber.blogspot.com/2017/08/create-your-first-reactjs-application.html">ReactJs Blog</a>
              </h3>
              <div class="mb-1 text-muted">Aug 28</div>
              <p class="card-text mb-auto">React is an open-source JavaScript library for building user interfaces. It is maintained by Facebook and a community of individual developers and companies.</p>
              <a target="_blank" href="http://akashkuber.blogspot.com/2017/08/create-your-first-reactjs-application.html">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="react logo" src="ReactJs.png" data-holder-rendered="true" style="width: 190px; height: 190px;padding: 20px 20px 0px 0px;">
          </div>
        </div>
      </div>      
</div>

    
<div class="album py-5 bg-light" id="contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-4"> 
            	<h2 class="featurette-heading">Contact Us </h2>
            <p class="lead">If you have a question or need help, you can contact us through filling form.</p>
            </div>
            <div class="col-md-8">      
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">First Name*</label>
                <input type="text" class="form-control" required placeholder="First name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Last Name*</label>
                <input type="text" class="form-control" required placeholder="Last name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address*</label>
                <input type="email" class="form-control" required id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Your Question*</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
          </div>            
     </div>
  </div>
  </div>
  
  
<footer class="bg-dark">
    © 2020 Copyright:
    <a href="KuberTech.com">KuberTech.com</a>
  
</footer>
<a id="back-to-top" href="#" class="btn btn-success btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>
      '; ?> 
</body>
</html>
