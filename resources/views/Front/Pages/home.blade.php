@extends('Front.MasterPage.master')

@section('container')
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>HOME</title>
        <style type="text/css">
            .container { position:relative; }
            .container{
                margin left: 0;
                position:relative;
                z-index:0;

                /*display: block;*/
                width: 100%;
                height: 100%;
            }
            .overlay {
                position:absolute;
                top: 22%;
                left: 35%;
                bottom: 50%;
                right: 35%;
                /* z-index:99;*/


            }

            hr{
                border-radius: 200px;

            }
            .item1,.item2{
                position: absolute;
                display: block;

                text-align: center;
                color: white;
                font-size: 50px;
                animation-duration: 20s;
                animation-timing-function: ease-in-out;
                animation-iteration-count: infinite;
            }

            /*body{
                background-color:#8B6A52;
            }*/
            .item1{
                animation-name: anim-1;
            }

            .item2{
                animation-name: anim-2;
            }
            @keyframes anim-1 {


                0%, 8.3% { left: -100%; opacity: 0; }
                8.3%,25% { left: 25%; opacity: 1; }
                33.33%, 100% { left: 110%; opacity: 0; }
            }

            @keyframes anim-2 {
                0%, 33.33% { left: -100%; opacity: 0; }
                41.63%, 58.29% { left: 25%; opacity: 1; }
                66.66%, 100% { left: 110%; opacity: 0; }

            }

            nav
            {
                background-color:#F5CEA1;
                margin-bottom: 0!important;
                height: 10%;
                width: 100%;

            }

            .navbar-static-top .navbar-brand,
            .navbar-static-top .navbar-brand:hover,
            .navbar-static-top .navbar-brand:focus {
                color: #FFF;
            }

            .navbar-static-top .navbar-nav > li > a {
                color: #FFF;
            }

            .navbar-static-top .navbar-nav > li > a:hover,
            .navbar-static-top .navbar-nav > li > a:focus {
                background-color: #7F5454;
            }

            .navbar-static-top .navbar-nav > .active > a,
            .navbar-static-top .navbar-nav > .active > a:hover,
            .navbar-static-top .navbar-nav > .active > a:focus {
                color: #FFF;
                background-color: #7F5454;
            }


        </style>

    </head>
    <body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color: black; margin-bottom:5px"><img src="public/Gallery/vintageBlack.png" width="80" height="40"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left:50%">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="file:///C:/Users/angel/Desktop/cafe/home.html" style="color:black"><font face="Forte" size="4px">Home</font></a>
                        </li>
                        <li>
                            <a href="#about" style="color:black"><font face="Forte" size="4px">About us</font></a>
                        </li>
                        <li>
                            <a href="file:///C:/Users/angel/Desktop/cafe/gallery.html" style="color:black"><font face="Forte" size="4px">Gallery</font></a>
                        </li>

                        <li>
                            <a href="#contact" style="color:black"><font face="Forte" size="4px">Contact us</font></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <video id="video" width=100% autoplay loop>
                <source src="public/Gallery/video.mp4" type="video/mp4" />
            </video>


            <div class="overlay">
                <font face="Forte">

                    <p class="item1">Live the Vintage.</p>



                    <p class="item2">Take Coffee with you.</p>

                </font>
            </div>
            <div id="about">
                <hr>
                <font face="Forte">
                    <h2><center>About Us</center><hr></h2></font>
                <div style="margin-left:15%; margin-right:15% ;text-align: justify">
                    <p>
                        The Vintage Cafe has an interesting fusion of historical and modern decor offering a casual laid back atmosphere with good quality food at affordable prices. Only fresh produce is used with emphasis on local Australian seafood, wines, local and imported cheeses. The wine and beer list offers great quality, variety and value for money.<br>
                        <a href="file:///C:/Users/angel/Desktop/cafe/about.html"><font face="Forte">Click to continue-->></font></a></p></div>

            </div>
            <div class="gallery">
                <hr>


                <center>
                    <img src="public/Gallery/bb.jpg" width="600px" height="400px"></center>
            </div>




            <div id="contact">
                <hr>

                <h2><center><font face="Forte"> Contact Us </font></center><hr></h2>


                <center><a href="#" ><img  src="public/Gallery/facebook.png" width="60px" height="60px"> </a>
                    <a href="#" ><img  src="public/Gallery/insta.png" width="60px" height="60px"> </a></center>

                <div >
                    <center><h4>Vintage Coffee &amp; Cafe</h4></center>

                    <div class="address"><center>
                            <p>Sundhara <span>Patan,Lalitpur </span>
                    </div>
                    </center>
                    <p>
                    <center><a>0156615718</a></p>

                    <h4>OPEN HOURS</h4>

                    <div class="hours">
                        <p>Daily: 7am to 4pm</p>
                        </center>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <hr><center><footer>
            <p>Vintage Coffee &amp; Cafe | <a href="#">E-mail</a> | <a href="#">Call</a> &nbsp;&nbsp;<span>Daily: 7am to 4pm</span></p>
        </footer></center><hr>

    </div>

    </div>




    <!--
	    <div class="slider">
	  		<div>

	   				 <p> Feel the Vintage Life </p>
					    <p> Duis laoreet risus nunc, id iaculis velit finibus non. </p>
					    <p>Pellentesque dictum nisi et tincidunt euismod.</p>
					    <p>Proin in interdum enim, in ultricies massa.</p>
				</font>
			</div>
		</div>
     </div>
  	</div> -->


    </div>

    </body>
    </html>

  <div class="container">


          @foreach($descriptionData as $description )
              <div col="md md-12">
                <h3>{{$description->name}}</h3>
                  {{$description}}
              </div>

              @endforeach
      {{$descriptionData->render()}}
  </div>


    <hr>

    <hr>
    <style>
        .imageClass{
            width:200px;
            height:200px;
            background:red;
            float:left;
            margin:5px;
        }
        .imageClass img{
            width: 200px;
            height: 200px;
        }
    </style>
    @foreach($imageData as $data)
   <div class="imageClass">
       <img src="{{URL::to('public/Gallery/'.$data->name)}}" alt="">
   </div>
    @endforeach


    @endsection;