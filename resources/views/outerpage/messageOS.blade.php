@extends('outerpage.mainlayoutinnerpage')

@section('content')
<main id="main" class="main-page">
    <!--==========================
    Speaker Details Section
  ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Message From Organizing Secretary</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img
              src="{{asset('images/profilepic/Os.jpg')}}"
              alt="Speaker 1"
              class="img-fluid img-fluid-1"
            />
            <div class="details message-details">
              <h2>Dr. Prakash Joshi</h2>
              <h3>Organizing Secretary</h3>
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
              <b>Dear Esteemed Colleagues,</b>
              <br>
               <br>
              It is with great enthusiasm that I invite you to the 21st National Conference of Nepal Paediatric Society (XXIst NEPCON-2025), scheduled to be held from 22nd – 24th May 2025, at The Plaza Convention Centre, Lalitpur. This year’s theme, "Climate Change and Its Impact on Children: Safeguarding Future through Specialized Care." highlights our shared responsibility in addressing the pressing environmental challenges affecting child health. The conference will serve as a platform for paediatricians, researchers, and healthcare professionals to exchange knowledge and strategies that can help mitigate the impact of climate change on children's well-being.<br>
              This three-day academic event will feature a comprehensive scientific program, including workshops, orations, plenary sessions, chapter symposiums, panel discussions, free paper presentations, and a poster exhibition. Renowned experts from Nepal and across the globe will share their insights on paediatric healthcare advancements, fostering collaboration and innovation in our field. With around 400 local paediatricians and 50 distinguished international delegates, the conference promises to be a vibrant gathering of professionals dedicated to enhancing child health care.
              We encourage you to take this opportunity to engage in stimulating discussions, share your research, and network with peers and global experts. Your active participation will be invaluable in making this conference a resounding success. Let us come together to explore solutions that will help safeguard the future of our children. We look forward to welcoming you to Lalitpur for an enriching and impactful experience.
              <br>
              <br>
              Warm regards,
              <br>
              <br>
              <b>Dr. Prakash Joshi</b>
              
              <br>
              <br>
              <b>Organizing Secretary</b>
              <br>
              <br>
              <b>XXI <sup>st</sup> NEPCON 2025</b>
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
