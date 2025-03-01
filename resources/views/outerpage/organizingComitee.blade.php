@extends('outerpage.mainlayoutinnerpage')
@section('css')
<style>
#speakers .speaker {
  text-align: center !important;
  padding: 20px !important;
  transition: all 0.3s ease-in-out !important;
}

#speakers .speaker img {
  width: 150px !important;  /* Adjusted for a smaller circle */
  height: 150px !important;
  object-fit: cover !important; /* Ensures the image covers without stretching */
  border-radius: 50% !important;
  border: 5px solid #ddd !important; /* Soft border */
  display: block !important;
  margin: 0 auto 15px auto !important;
}
#speakers .speaker .details {
  bottom :-60px !important;
}
#speakers .details {
  background: #f8f9fa !important; /* Light gray background */
  padding: 10px !important;
  border-radius: 10px !important;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1) !important;
}

#speakers .details h3 {
  font-size: 18px !important;
  font-weight: bold !important;
  margin-bottom: 5px !important;
}
#speakers .details  a {
  color: #007bff !important;
  text-decoration: none !important;
}
#speakers .details p {
  font-size: 14px !important;
  color: #555 !important;
  font-weight: 500 !important;
  margin-bottom: 0 !important;
}

</style>

@endsection


@section('content')
<main id="main" class="main-page">
<!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp ">
        <div class="container">

          <div class="section-header">
            <h2>Organizing Committee</h2>
            <p>Organizing Committee</p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Arun.png') }}"
                  alt="Speaker 1"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Maj. Gen. Dr. Arun Kumar Neopane (Retd.) </a></h3>
                  <p>Organising Chairperson</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/RamHari.png') }}"
                  alt="Speaker 2"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Ram Hari Chapagain</a></h3>
                  <p>Organising Co-Chair</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/prakash.png') }}"
                  alt="Speaker 3"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Prakash Joshi</a></h3>
                  <p>Organising Secretary</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/keshava.png') }}"
                  alt="Speaker 6"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Col. Dr. Keshav Agrawal</a></h3>
                  <p>Nepcon treasurer</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="section-header">
            <!-- <h2>Organizing Sub Committee</h2> -->
            <p>Organizing Sub Committee</p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Keshav.png') }}"
                  alt="Speaker 1"
                  class="img-fluid-2" style=""
                />
                <div class="details">
                  <h3><a href="#">Dr. Keshav Prasad Agrawal</a></h3>
                  <p>Finance and Registration</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Deepak.png') }}"
                  alt="Speaker 2"
                  class="img-fluid-2"
                  
                />
                <div class="details">
                  <h3><a href="#">Dr. Deepak Rajbhandari</a></h3>
                  <p>Transport and Travel</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/sangitashakya.png') }}"
                  alt="Speaker 3"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Sangita Shakya</a></h3>
                  <p>Hospitality and Cultural</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Smriti.png') }}"
                  alt="Speaker 4"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Smriti Mathema</a></h3>
                  <p>Scientific</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/SantoshA.png') }}"
                  alt="Speaker 5"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Santosh Adhikari</a></h3>
                  <p>IT and Event Management</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Love.png') }}"
                  alt="Speaker 6"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Love Kumar Sah</a></h3>
                  <p>Publicity</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Pawana.png') }}"
                  alt="Speaker 6"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Pawana Kayastha</a></h3>
                  <p>Reception</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/SangitaPuree.png') }}"
                  alt="Speaker 6"
                  class=" img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Sangita Puree Dhungana</a></h3>
                  <p>Memento & Prizes</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Ramchanda.png') }}"
                  alt="Speaker 6"
                  class=" img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Ram Chandra Bastola</a></h3>
                  <p>Trade and Stall</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/Srijana.png') }}"
                  alt="Speaker 6"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Srijana Basnet</a></h3>
                  <p>Workshop</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="speaker">
                <img
                  src="{{ asset('NEPAS_/SantoshP.png') }}"
                  alt="Speaker 6"
                  class="img-fluid-2"
                />
                <div class="details">
                  <h3><a href="#">Dr. Santosh Pokhrel</a></h3>
                  <p>e-Souvenir</p>
                  <div class="social">
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <!--==========================
      Schedule Section
    ============================-->
</main>
@endsection
