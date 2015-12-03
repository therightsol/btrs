<head>
    <style>
    #google-map,
    body,
    html {
      padding: 0;
      height: 400px;
    }
  </style>
</head>
<body>
  <?php include 'includes/header.inc'; ?>
<header>

    <!-- Bootstrap -->
      <?php
        
    $username = $this->session->userdata('username');
        if (empty($username)) {
            // user not logged in so,
            include 'includes/annonymousMenu.inc';
        } else {
            // user is logged in so
            include 'includes/memberMenu.inc';
        }
            ?>
</header>
  
  <!-- Page Header -->
  <div class="page-header">
    <div class="page-header-inner">
      <div class="container">
        <h1 class="section-title page-title">
          Contact us
        </h1>
        <ol class="breadcrumb">
          <li><a href="contact1.html#">Home</a></li>
          <li class="page">Contact us</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Conatct Section -->
  <div id="google-map">
  </div>
  <section id="contact">
    <div class="contact-info">
      <div class="container">
        <div class="contact-info-wrapper clearfix">
          <div class="col-md-4 text-center">
            <div class="contact-item-wrapper wow fadeInUpQuick" data-wow-delay=".2s">
              <i class="fa fa-envelope fa-2x">
              </i>
              <h4>
                contact[at]example.com
              </h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="contact-item-wrapper  wow fadeInUpQuick" data-wow-delay=".5s">
              <i class="fa fa-mobile-phone fa-2x">
              </i>
              <h4>
                0300-1234567
              </h4>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="contact-item-wrapper  wow fadeInUpQuick" data-wow-delay=".8s">
              <i class="fa fa-map-marker fa-2x">
              </i>
              <h4>
                Johrar town Lahore,Pakistan
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="contact-form-wrapper" data-0="background-position:0px -200px;" data-10000="background-position:0px 2000;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 contact-form wow fadeIn" data-wow-delay=".2s">
            <form role="form" method="post">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" class="form-control radius-input" placeholder="Name" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="email" class="form-control email radius-input" placeholder="Email" name="email">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" class="form-control requiredField radius-input" placeholder="Subject" name="subject">
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" class="form-control requiredField radius-input" placeholder="Company" name="company">
                  </div>
                </div>
              </div>
            </form>
            <div class="col-md-12">
              <div class="form-group">
                <div class="controls">
                  <textarea rows="7" class="form-control flat-input" placeholder="Message" name="message">
                  </textarea>
                </div>
              </div>
              <button type="submit" id="submit" class="btn btn-common btn-lg">
                Send
              </button>
              <div id="success" style="color:#34495e;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Conatct Section End-->
  
    <!-- Footer Section -->
    <?php 
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
  ?>
    
  
    <!-- Google Maps JS Only for Contact Pages -->
    <script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng(-33.885429, 151.210081);
    var mapCoordinates = new google.maps.LatLng(-33.885429, 151.210081);
    
    
    var markers = [];
    var image = new google.maps.MarkerImage(
      'assets/img/map-marker.png',
      new google.maps.Size(84, 70),
      new google.maps.Point(0, 0),
      new google.maps.Point(60, 60)
    );
    
    function addMarker() {
      markers.push(new google.maps.Marker({
        position: plain,
        raiseOnDrag: false,
        icon: image,
        map: map,
        draggable: false
      }
                                         ));
      
    }
    
    function initialize() {
      var mapOptions = {
        backgroundColor: "#ffffff",
        zoom: 15,
        disableDefaultUI: true,
        center: mapCoordinates,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
          "featureType": "landscape.natural",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }
                     ]
        }
                 , {
                   "featureType": "landscape.man_made",
                   "stylers": [{
                     "color": "#ffffff"
                   }
                               , {
                                 "visibility": "off"
                               }
                              ]
                 }
                 , {
                   "featureType": "water",
                   "stylers": [{
                     "color": "#80C8E5"
                   }
                               , {
                                 "saturation": 0
                               }
                              ]
                 }
                 , {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [{
                     "color": "#999999"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text.stroke",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#333333"
                   }
                              ]
                 }
                 
                 , {
                   "featureType": "road.local",
                   "stylers": [{
                     "color": "#dedede"
                   }
                              ]
                 }
                 , {
                   "featureType": "road.local",
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#666666"
                   }
                              ]
                 }
                 , {
                   "featureType": "transit.station.bus",
                   "stylers": [{
                     "saturation": -57
                   }
                              ]
                 }
                 , {
                   "featureType": "road.highway",
                   "elementType": "labels.icon",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "featureType": "poi",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 
                ]
        
      }
          ;
      map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
      addMarker();
      
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  
  </body>
  
</html>