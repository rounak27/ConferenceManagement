@extends('outerpage.mainlayoutinnerpage')

@section('content')
<main id="main" class="main-page">
    <!--==========================
    Speaker Details Section
  ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Message From President</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img
              src="{{asset('images/profilepic/Dr-Arun-Neupane-modified.png')}}"
              alt="Speaker 1"
              class="img-fluid img-fluid-1"
              style="scale: 0.75;"
            />
            <div class="details message-details">
              <h2>Maj. Gen. Dr. Arun Kumar Neopane (Retd.)</h2>
              <h3>President</h3>
            </div>
          </div>

          <div class="col-md-6">
            <div class="details">
              <div class="social">
                <!-- <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a> -->
              </div>
              Dear Esteemed Guests, Colleagues, and Friends,<br /><br />
              It is with immense pleasure and pride that I welcome you to
              Nepal and the NEPCON 2025, a scientific bonanza that promises to
              be a landmark event in the field of paediatrics. This year’s
              conference is designed to be a vibrant platform for knowledge
              exchange, collaboration, and innovation. The program is packed
              with a diverse range of activities, including: <br /><br />
              - Inspiring Orations by renowned experts, <br />- Plenary
              Sessions featuring global thought leaders,<br />
              - Guest Lectures by distinguished speakers,<br />
              - Engaging Panel Discussions on pressing paediatric issues,
              <br />
              - Free Paper Presentations showcasing cutting-edge research,
              <br />
              - A Gala Dinner to foster camaraderie and networking, <br />
              - Cultural Show celebrating the rich heritage of Nepal.
              <br /><br />
              We are confident that NEPCON 2025 will not only enrich your
              professional expertise but also provide an opportunity to
              experience the warmth and hospitality of Nepal. Let us come
              together to share ideas, build partnerships, and work towards a
              brighter future for child health. Thank you for being a part of
              this extraordinary event. We look forward to your active
              participation and wish you a memorable and productive time in
              Nepal. <br /><br />Warm regards,<br />
              <strong
                >Maj. Gen. Dr. Arun Kumar Neopane (Retd.) President
                (2023-25),</strong
              ><br />
              Nepal Paediatric Society Kathmandu Nepal
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
@section('script')
<script src="{{asset('js/contactform/contactform.js')}}"></script>
@endsection
