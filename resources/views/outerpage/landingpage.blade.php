@extends('outerpage.mainlayout')
@section('css')
  <style>
    /* Modal Styles */
    .modal {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1000;
    }

    /* Modal Content - Centered */
    .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* Center the modal */
    width: 90%;
    max-width: 450px;
    max-height: 80vh;
    background: white;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    }

    .modal img {
    width: 100%;
    height: auto;
    max-height: 70vh;
    border-radius: 5px;
    }

    /* Close Button */
    .close-btn {
    position: absolute;
    top: 8px;
    right: 10px;
    background: red;
    color: white;
    border: none;
    padding: 5px 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 50%;
    }

    /* Responsive Design */
    @media (max-width: 500px) {
    .modal-content {
      width: 95%;
      max-width: 350px;
    }
    }
  </style>
@endsection
@section('content')
  <section id="intro">
    <!-- Image Popup -->
    <div class="modal" id="imagePopup">
    <div class="modal-content">
      <button class="close-btn" onclick="closePopup()">×</button>
      <img src="Flyer NEPCON 2025.jpg" alt="Flyer">
    </div>
    </div>
    <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">
      <div class="logo">nepcon-2025</div>
      <div class="subtitle">
      <span class="roman">XXI</span><sup>st</sup> National Conference of
      Nepal Paediatric Society
      </div>
    </h1>
    <p class="mb-4 pb-0">
      22-24 May, 2025, The Plaza Convention Centre, Lalitpur
    </p>
    <a href="https://www.youtube.com/watch?v=j61j9X4xCnA" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
    <!-- <a href="#about" class="about-btn scrollto">About The Event</a> -->
    </div>
  </section>
  <main id="main">
    <!--==========================
      About Section
    ============================-->
    <section id="about">
    <div class="container">
      <div class="row">
      <div class="col-lg-6">
        <h2>About The Event</h2>
        <p>
        Climate Change and its Impact on Children: Safeguarding the
        Future through Specialized Care. A scientific bonanza that
        promises to be a landmark event in the field of paediatrics
        </p>
      </div>
      <div class="col-lg-3">
        <h3>Venue</h3>
        <p>The Plaza Convention Centre, Lalitpur</p>
      </div>
      <div class="col-lg-3">
        <h3>Mark Your Calendar</h3>
        <p>Thursday to Saturday<br />22-24 May,2025</p>
        <div class="countdown-container">
        <div class="countdown-title">Time Left</div>
        <div class="countdown">
          <div class="countdown-box">
          <span id="days" class="countdown-number">00</span>
          <span class="countdown-label">Days</span>
          </div>
          <div class="countdown-box">
          <span id="hours" class="countdown-number">00</span>
          <span class="countdown-label">Hours</span>
          </div>
          <div class="countdown-box">
          <span id="minutes" class="countdown-number">00</span>
          <span class="countdown-label">Minutes</span>
          </div>
          <div class="countdown-box">
          <span id="seconds" class="countdown-number">00</span>
          <span class="countdown-label">Seconds</span>
          </div>
        </div>
        </div>
      </div>
      </div>
    </section>

   

    <!--==========================
      Message From The CEO
    ============================-->
    <!-- <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
        <h2>Message From The CEO</h2>
        <p></p>
        </div>

        <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
          <img
            src="img/speakers/6.jpg"
            alt="Speaker 6"
            class="img-fluid"
          />
          <div class="details">
            <h3><a href="#">Willow Trantow</a></h3>
            <p>Non autem dicta</p>
            <div class="social">
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-google-plus"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="details">
          <h2>Brenden Legros</h2>
          <div class="social">
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-google-plus"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
          <p>
            Voluptatem perferendis sed assumenda voluptatibus. Laudantium
            molestiae sint. Doloremque odio dolore dolore sit. Quae labore
            alias ea omnis ex expedita sapiente molestias atque. Optio
            voluptas et.
          </p>

          <p>
            Aboriosam inventore dolorem inventore nam est esse. Aperiam
            voluptatem nisi molestias laborum ut. Porro dignissimos eum.
            Tempore dolores minus unde est voluptatum incidunt ut aperiam.
          </p>

          <p>
            Et dolore blanditiis officiis non quod id possimus. Optio non
            commodi alias sint culpa sapiente nihil ipsa magnam. Qui eum
            alias provident omnis incidunt aut. Eius et officia corrupti
            omnis error vel quia omnis velit. In qui debitis autem aperiam
            voluptates unde sunt et facilis.
          </p>
          </div>
        </div>
        </div>
      </div>
      </section> -->
    <section id="speakers" class="wow fadeInUp " style="visibility: visible; animation-name: fadeIn">
    <div class="container">
      <div class="section-header">
      <h2>Message</h2>
      <p>Message from the President and Organizing Secretary</p>
      </div>

      <div class="row">
      <div class="col-md-6">
        <img src="{{asset('NEPAS_/Arun.png')}}" alt="Speaker 1"
        class="img-fluid img-fluid-1" style="scale:0.75;" />
        <div class="details">
        <h3>Maj. Gen. Dr. Arun Kumar Neopane (Retd.)</h3>
        <h4>President</h4>
        <div class="social"></div>
        <p>
          Dear Esteemed Guests, Colleagues, and Friends,
          It is with immense pleasure and pride that I welcome you to Nepal and the NEPCON 2025, a
          scientific bonanza that promises to be a landmark event in the field of paediatrics. This year’s
          conference is designed to.....

        </p>
        <a href="{{route('message-detail')}}">
          <button class="btn read-more-btn m-1">Read More</button></a>
        </div>
      </div>

      <div class="col-md-6">
        <img src="{{asset('images/profilepic/Os.jpg')}}" alt="Speaker 1" class="img-fluid img-fluid-1" style="scale:0.75;"/>
        <div class="details">
        <h3>Dr. Prakash Joshi</h3>

        <h4>Organizing Secretary</h4>
        <div class="social"></div>
        <div>
          <p>

          Dear Esteemed Colleagues, Date: 14th February 2025 It is with
          great enthusiasm that I invite you to the 21st National
          Conference of Nepal Paediatric Society (XXIst NEPCON-2025),
          scheduled to be held from 22nd – 24th May 2025, at The Plaza
          Convention Centre, Lalitpur....

          </p>
          <a href="{{route('message-detail-os')}}">
          <button class="btn read-more-btn m-1">Read More</button></a>
        </div>

        <!-- <p>
            Aboriosam inventore dolorem inventore nam est esse. Aperiam
            voluptatem nisi molestias laborum ut. Porro dignissimos eum.
            Tempore dolores minus unde est voluptatum incidunt ut aperiam.
          </p>

          <p>
            Et dolore blanditiis officiis non quod id possimus. Optio non
            commodi alias sint culpa sapiente nihil ipsa magnam. Qui eum
            alias provident omnis incidunt aut. Eius et officia corrupti
            omnis error vel quia omnis velit. In qui debitis autem aperiam
            voluptates unde sunt et facilis.
          </p> -->
          </div>
        </div>
      </div>
      </div>
    </div>
    </section>


    <section id="schedule" class="section-with-bg ">
    <div class="container wow fadeInUp">
      <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
      </div>

      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item m-2">
        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">May 22, 2025</a>
      </li>
      <li class="nav-item m-2">
        <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">May 23, 2025</a>
      </li>
      <li class="nav-item m-2">
        <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">May 24, 2025</a>
      </li>
      </ul>

      <h3 class="sub-heading">Nepcon-2025 Schedule</h3>

      <div class="tab-content row justify-content-center">
      <!-- Schdule Day 1 -->
      <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
        <div class="row schedule-item">
        <div class="col-md-2"><time></time></div>
        <div class="col-md-10" style="margin-left: 43%;">
          <!-- <h4>Registration</h4> -->
          <p>Coming Soon.</p>
        </div>
        </div>

        <div class="row schedule-item hide">
        <div class="col-md-2"><time></time></div>
        <div class="col-md-10">
          <div class="speaker">
          <img src="img/speakers/1.jpg" alt="Brenden Legros" />
          </div>
          <h4>Keynote <span>Brenden Legros</span></h4>
          <p>Facere provident incidunt quos voluptas.</p>
        </div>
        </div>
      </div>
      <!-- End Schdule Day 1 -->

      <!-- Schdule Day 2 -->
      <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-2">
        <div class="row schedule-item">
        <div class="col-md-2"><time></time></div>
        <div class="col-md-10" style="margin-left: 43%;">
          <!-- <h4>
            Libero corrupti explicabo itaque.
            <span>Brenden Legros</span>
            </h4> -->
          <p>Coming Soon.</p>
        </div>
        </div>

        <div class="row schedule-item hide">
        <div class="col-md-2"><time>11:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
          <img src="img/speakers/2.jpg" alt="Hubert Hirthe" />
          </div>
          <h4>
          Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span>
          </h4>
          <p>
          Maiores dignissimos neque qui cum accusantium ut sit sint
          inventore.
          </p>
        </div>
        </div>
      </div>
      <!-- End Schdule Day 2 -->

      <!-- Schdule Day 3 -->
      <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-3">
        <div class="row schedule-item">
        <div class="col-md-2"><time></time></div>
        <div class="col-md-10" style="margin-left: 43%;">
          <!-- <h4>
            Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span>
            </h4> -->
          <p>Coming Soon</p>
        </div>
        </div>

        <div class="row schedule-item hide">
        <div class="col-md-2"><time></time></div>
        <div class="col-md-10">
          <div class="speaker">
          <!-- <img src="img/speakers/3.jpg" alt="Cole Emmerich" /> -->
          </div>
          <!-- <h4>
            Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span>
            </h4> -->
          <p>
          Veniam accusantium laborum nihil eos eaque accusantium
          aspernatur.
          </p>
        </div>
        </div>
      </div>
      <!-- End Schdule Day 2 -->
      </div>
    </div>
    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp ">
    <div class="container-fluid">
      <div class="section-header">
      <h2>Event Venue</h2>
      <p>Event venue location info and gallery</p>
      </div>

      <div class="row no-gutters">
      <div class="col-lg-6 venue-map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.2471298827304!2d85.31408569999999!3d27.678755799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1992f1275c81%3A0x4ee7cedb6cef87c7!2sThe%20Plaza!5e0!3m2!1sen!2snp!4v1739950970519!5m2!1sen!2snp"
        frameborder="0" style="border: 0" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
        <div class="col-11 col-lg-8">
          <h3><a href="https://theplazanepal.com/">The Plaza Convention Centre, Pulchowk, Lalitpur </a></h3>

          <p>
          “Climate Change and its Impact on Children: Safeguarding the
          Future through Specialized Care”
          </p>
        </div>
        </div>
      </div>
      </div>
    </div>

    <!-- <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/1.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/2.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/3.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/4.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/5.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/6.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/7.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="venue-gallery">
          <a
            href="img/venue-gallery/8.jpg"
            class="venobox"
            data-gall="venue-gallery"
          >
            <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid" />
          </a>
          </div>
        </div>
        </div>
      </div> -->
    </section>

    <!--==========================
      Hotels Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp ">
    <div class="container">
      <div class="section-header">
      <h2> Accommodation</h2>
      <p>Here are some hotels for Accommodation</p>
      </div>

      <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('images/hotels/himalayahotel.png')}}" alt="Himalaya Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://hotelhimalaya.com/" target="_blank">Hotel Himalaya</a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Kupondole,Lalitpur</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('images/hotels/squarehotel.jpg')}}" alt="Square Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://squarehotelktm.com/" target="_blank">Square Hotel </a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Sanepa,Lalitpur</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('images/hotels/vivantahotel.jpg')}}" alt="Vivanta Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://www.vivantahotels.com/en-in/destination/hotels-in-kathmandu/" target="_blank">Vivanta Hotel</a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Jhamsikhel,Lalitpur</p>
        </div>
      </div>
      </div>
      {{-- Row 2 For Hotel --}}
      <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('images/hotels/ShankarHotel.jpg')}} " alt="Shankar Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://www.shankerhotel.com.np/" target="_blank">Shankar Hotel </a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Lazimpat,Kathmandu</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('images/hotels/landmarkhotel.jpg')}}" alt="Landmark Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://www.landmarknepal.com/hotels/Landmark-Kathmandu"target="_blank">Landmark Nepal </a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          {{-- <i class="fa fa-star-half-full"></i> --}}
        </div>
        <p>Narayanhiti,Kathmandu</p>
        </div>
      </div>

      <!-- <div class="col-lg-4 col-md-6">
        <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('images/hotels/buddhahotel.jpg')}}" alt="Buddha Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://www.buddhaholidays.in/l" target="_blank">Buddha Holidays</a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Travel</p>
        </div>
      </div> -->
      </div>
    </div>
    </section>

     <!--==========================
      Partners Section
    ============================-->
    <section id="partners" class="section-with-bg wow fadeInUp ">
    <div class="container">
      <div class="section-header">
      <h2> Partners</h2>
      <p>Here are Our Travel Partners</p>
      </div>

      <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="partner">
        <div class="partner-img">
          <img src="{{asset('images/hotels/ntb.jpg')}}" alt="Himalaya Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://ntb.gov.np/" target="_blank">Nepal Tourism Board</a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Tourism Board Of Nepal</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="partner">
        <div class="partner-img">
          <img src="{{asset('images/hotels/buddhahotel.jpg')}}" alt="Buddha Hotel" class="img-fluid" />
        </div>
        <h3><a href="https://www.buddhaholidays.in/l" target="_blank">Buddha Holidays</a></h3>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>Travel</p>
        </div>
      </div>
      </div>
    </div>
    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp hide">
    <div class="container">
      <div class="section-header">
      <h2>Gallery</h2>
      <p>Check our gallery from the recent events</p>
      </div>
    </div>

    <div class="owl-carousel gallery-carousel">
      <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg"
        alt="" /></a>
      <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg"
        alt="" /></a>
      <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg"
        alt="" /></a>
      <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg"
        alt="" /></a>
      <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg"
        alt="" /></a>
      <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg"
        alt="" /></a>
      <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg"
        alt="" /></a>
      <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg"
        alt="" /></a>
    </div>
    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp hide">
    <div class="container">
      <div class="section-header">
      <h2>Sponsors</h2>
      </div>

      <div class="row no-gutters sponsors-wrap clearfix">
      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/1.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/2.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/3.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/4.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/5.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/6.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/7.png" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="sponsor-logo">
        <img src="img/sponsors/8.png" class="img-fluid" alt="" />
        </div>
      </div>
      </div>
    </div>
    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp hide">
    <div class="container">
      <div class="section-header">
      <h2>F.A.Q</h2>
      </div>

      <div class="row justify-content-center">
      <div class="col-lg-9">
        <ul id="faq-list">
        <li>
          <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis?
          <i class="fa fa-minus-circle"></i></a>
          <div id="faq1" class="collapse" data-parent="#faq-list">
          <p>
            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna
            id volutpat lacus laoreet non curabitur gravida. Venenatis
            lectus magna fringilla urna porttitor rhoncus dolor purus
            non.
          </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc
          faucibus a
          pellentesque? <i class="fa fa-minus-circle"></i></a>
          <div id="faq2" class="collapse" data-parent="#faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque
            habitant morbi. Id interdum velit laoreet id donec
            ultrices. Fringilla phasellus faucibus scelerisque
            eleifend donec pretium. Est pellentesque elit ullamcorper
            dignissim. Mauris ultrices eros in cursus turpis massa
            tincidunt dui.
          </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
          pellentesque
          habitant morbi? <i class="fa fa-minus-circle"></i></a>
          <div id="faq3" class="collapse" data-parent="#faq-list">
          <p>
            Eleifend mi in nulla posuere sollicitudin aliquam ultrices
            sagittis orci. Faucibus pulvinar elementum integer enim.
            Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
            tellus pellentesque eu tincidunt. Lectus urna duis
            convallis convallis tellus. Urna molestie at elementum eu
            facilisis sed odio morbi quis
          </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi
          in nulla?
          <i class="fa fa-minus-circle"></i></a>
          <div id="faq4" class="collapse" data-parent="#faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque
            habitant morbi. Id interdum velit laoreet id donec
            ultrices. Fringilla phasellus faucibus scelerisque
            eleifend donec pretium. Est pellentesque elit ullamcorper
            dignissim. Mauris ultrices eros in cursus turpis massa
            tincidunt dui.
          </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et
          tortor
          consequat? <i class="fa fa-minus-circle"></i></a>
          <div id="faq5" class="collapse" data-parent="#faq-list">
          <p>
            Molestie a iaculis at erat pellentesque adipiscing
            commodo. Dignissim suspendisse in est ante in. Nunc vel
            risus commodo viverra maecenas accumsan. Sit amet nisl
            suscipit adipiscing bibendum est. Purus gravida quis
            blandit turpis cursus in
          </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel
          pharetra vel
          turpis nunc eget lorem dolor?
          <i class="fa fa-minus-circle"></i></a>
          <div id="faq6" class="collapse" data-parent="#faq-list">
          <p>
            Laoreet sit amet cursus sit amet dictum sit amet justo.
            Mauris vitae ultricies leo integer malesuada nunc vel.
            Tincidunt eget nullam non nisi est sit amet. Turpis nunc
            eget lorem dolor sed. Ut venenatis tellus in metus
            vulputate eu scelerisque. Pellentesque diam volutpat
            commodo sed egestas egestas fringilla phasellus faucibus.
            Nibh tellus molestie nunc non blandit massa enim nec.
          </p>
          </div>
        </li>
        </ul>
      </div>
      </div>
    </div>
    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
    <div class="container wow fadeInUp hide">
      <div class="section-header">
      <h2>Newsletter</h2>
      <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
      </div>

      <form method="POST" action="#">
      <div class="form-row justify-content-center">
        <div class="col-auto">
        <input type="text" class="form-control" placeholder="Enter your Email" />
        </div>
        <div class="col-auto">
        <button type="submit">Subscribe</button>
        </div>
      </div>
      </form>
    </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp hide">
    <div class="container">
      <div class="section-header">
      <h2>Buy Tickets</h2>
      <p>
        Velit consequatur consequatur inventore iste fugit unde omnis eum
        aut.
      </p>
      </div>

      <div class="row">
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title text-muted text-uppercase text-center">
          Standard Access
          </h5>
          <h6 class="card-price text-center">$150</h6>
          <hr />
          <ul class="fa-ul">
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge
          </li>
          <li class="text-muted">
            <span class="fa-li"><i class="fa fa-times"></i></span>Community Access
          </li>
          <li class="text-muted">
            <span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access
          </li>
          <li class="text-muted">
            <span class="fa-li"><i class="fa fa-times"></i></span>After Party
          </li>
          </ul>
          <hr />
          <div class="text-center">
          <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal"
            data-ticket-type="standard-access">
            Buy Now
          </button>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title text-muted text-uppercase text-center">
          Pro Access
          </h5>
          <h6 class="card-price text-center">$250</h6>
          <hr />
          <ul class="fa-ul">
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Community Access
          </li>
          <li class="text-muted">
            <span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access
          </li>
          <li class="text-muted">
            <span class="fa-li"><i class="fa fa-times"></i></span>After Party
          </li>
          </ul>
          <hr />
          <div class="text-center">
          <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal"
            data-ticket-type="pro-access">
            Buy Now
          </button>
          </div>
        </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
        <div class="card-body">
          <h5 class="card-title text-muted text-uppercase text-center">
          Premium Access
          </h5>
          <h6 class="card-price text-center">$350</h6>
          <hr />
          <ul class="fa-ul">
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Community Access
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access
          </li>
          <li>
            <span class="fa-li"><i class="fa fa-check"></i></span>After Party
          </li>
          </ul>
          <hr />
          <div class="text-center">
          <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal"
            data-ticket-type="premium-access">
            Buy Now
          </button>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>

    <!-- Modal Order Form -->
    <div id="buy-ticket-modal" class="modal fade">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Buy Tickets</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="#">
          <div class="form-group">
          <input type="text" class="form-control" name="your-name" placeholder="Your Name" />
          </div>
          <div class="form-group">
          <input type="text" class="form-control" name="your-email" placeholder="Your Email" />
          </div>
          <div class="form-group">
          <select id="ticket-type" name="ticket-type" class="form-control">
            <option value="">-- Select Your Ticket Type --</option>
            <option value="standard-access">Standard Access</option>
            <option value="pro-access">Pro Access</option>
            <option value="premium-access">Premium Access</option>
          </select>
          </div>
          <div class="text-center">
          <button type="submit" class="btn">Buy Now</button>
          </div>
        </form>
        </div>
      </div>
      <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    </section>

    <!--==========================
      Coming Soon Section
    ============================-->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">
      <div class="section-header">
      <h2>Contact Us</h2>
      <p>For any queries, please contact us at:</p>
      </div>

      <div class="row contact-info">
      <div class="col-md-4">
        <div class="contact-address">
        <i class="ion-ios-location-outline"></i>
        <h3>Address</h3>
        <address>Baluwatar, Kathmandu, Nepal</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
        <i class="ion-ios-telephone-outline"></i>
        <h3>Phone Number</h3>
        <p><a href="tel:+977-9803594327">+977-9803594327</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
        <i class="ion-ios-email-outline"></i>
        <h3>Email</h3>
        <p>
          <a href="mailto:info@example.com">nepas2010@gmail.com, office@nepas.org.np/info@nepas.org.np
          </a>
        </p>
        </div>
      </div>
      </div>

      <div class="form ">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
          data-msg="Please enter at least 4 chars" />
          <div class="validation"></div>
        </div>
        <div class="form-group col-md-6">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
          data-rule="email" data-msg="Please enter a valid email" />
          <div class="validation"></div>
        </div>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
          data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        <div class="validation"></div>
        </div>
        <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required"
          data-msg="Please write something for us" placeholder="Message"></textarea>
        <div class="validation"></div>
        </div>
        <div class="text-center">
        <button type="submit">Send Message</button>
        </div>
      </form>
      </div>
    </div>
    </section>
    <!-- #contact -->
  </main>
@endsection
@section('script')
  <!-- <script>
    $(document).ready(function () {
    document.getElementById("imagePopup").style.display = "block";
    });
    function closePopup() {
    document.getElementById("imagePopup").style.display = "none";
    }
  </script> -->
@endsection