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
.portfolio-item {
    max-width: 26rem;
    margin-left: auto;
    margin-right: auto;
}
 .portfolio-item .portfolio-link {
    position: relative;
    display: block;
    margin: 0 auto;
}
 .portfolio-item .portfolio-link .portfolio-hover {
    display: flex;
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255, 200, 0, 0.9);
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacityease-in-out 0.25s;
}
.img-fluid {
    max-width: 100%;
    height: auto;
    border-radius: 55%;
    height: 304px !important;
    margin-left:10%;
    
}
.portfolio-item .portfolio-caption {
    padding: 1.5rem;
    text-align: center;
    background-color: #fff;
}
.portfolio-item .portfolio-caption .portfolio-caption-heading {
    font-size: 1rem;
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-weight: 700;
    margin-bottom: 0;
}
.portfolio-item .portfolio-caption .portfolio-caption-subheading {
    font-style: italic;
    /* font-size:0.7rem; */
    font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.subcommittetitle{
  font-weight:600;
}

@media (max-width: 768px) {
    .portfolio-item {
        max-width: 100%; /* Full width on smaller screens */
        margin-bottom: 20px; /* Add spacing */
    }

    .portfolio-item .portfolio-caption {
        padding: 1rem;
    }

    .portfolio-item .portfolio-caption-heading {
        font-size: 0.9rem;
    }

    .portfolio-item .portfolio-caption-subheading {
        font-size: 0.8rem;
    }

    .portfolio-item .portfolio-link img {
        width: 100%; /* Ensure full width */
        height: auto; /* Maintain aspect ratio */
        border-radius: 50%;
    }

    .portfolio-hover {
        opacity: 0.9; /* Improve hover visibility */
    }
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
            <div class="col-lg-4 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/Arun.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Organising Chairperson</div>
                                <div class="portfolio-caption-subheading text-muted">Maj. Gen. Dr. Arun Kumar Neopane (Retd.)</div>
                            </div>
                        </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/RamHari.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Organising Co-Chair</div>
                                <div class="portfolio-caption-subheading text-muted">Dr. Ram Hari Chapagain</div>
                            </div>
                        </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/prakash.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Organising Secretary</div>
                                <div class="portfolio-caption-subheading text-muted">Dr. Prakash Joshi</div>
                            </div>
                        </div>
            </div>
            <div class="col-lg-4 col-md-6" style="display:none;">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/keshava.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Nepcon treasurer</div>
                                <div class="portfolio-caption-subheading text-muted">Col. Dr. Keshav Agrawal</div>
                            </div>
                        </div>
            </div>
            
          </div>
          <div class="section-header">
            <!-- <h2>Organizing Sub Committee</h2> -->
            <p>Organizing Sub Committee</p>
          </div>
          <p class="subcommittetitle">1.Finance and Registration</p>
          <div class="row">
            
            <div class="col-lg-3 col-md-6" >
              
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/keshava.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Col Dr Keshav Agrawal (Retd)</div>
                                <div class="portfolio-caption-subheading text-muted">9808707755</div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Nikhil Agrawal</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Pragya Pradhan</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mr. Hari Shrestha </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Mr. Ashok Shrestha</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
</div>
<p class="subcommittetitle">2.Transport and Travel</p>
<div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/Deepak.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Deepak Rajbhandari</div>
                                <div class="portfolio-caption-subheading text-muted">9808707755</div>
                            </div>
                        </div>
            
            </div>
</div>
<p class="subcommittetitle">3.Hospitality and Cultural</p>
<div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/sangitashakya.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Sangita Shakya</div>
                                <div class="portfolio-caption-subheading text-muted">9851102406</div>
                            </div>
                        </div>
            
            </div>
            
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Anna Sharma</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6 ">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Luna Amatya</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Ajay Dhakal</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Henish Shakya</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Saurav Khetan </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Kabita Keyal</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Namrata Sindan</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Kishore Khatry</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Uttara </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Shama Shakya</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- <div class="speaker">
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
              </div> -->
              <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Dr. Shailendra Bir Karmacharya</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
            
            </div>

            
          </div>
<p class="subcommittetitle">4. Scientific</p> 
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/Smriti.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Smriti Mathema</div>
          <div class="portfolio-caption-subheading text-muted">9851044206</div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/bikashs.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Bikash Shrestha</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/prithuja.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Prithuja Poudyal</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    
    <!-- Additional Scientific Committee Members -->
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/surabhi.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Surabhi Aryal</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/archanan.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Archana Nepal</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/anish.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Anish Joshi</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/sudhir.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Sudhir Adhikari</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    
    <!-- Additional Scientific Committee Members -->
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Neema Shrestha</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/grishmau.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Grishma Uprety</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- IT and Event Management -->
  <p class="subcommittetitle">5. IT and Event Management</p>
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/SantoshA.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Santosh Adhikari</div>
          <div class="portfolio-caption-subheading text-muted">9869398751</div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/askal.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Askal Devkota</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/tribhuwan.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Tribhuwan Bhattarai</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    <!-- images/himalayanwalpaper.jpg -->
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Mr. Rajib Shrestha</div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
  </div>
  

  
<!-- Publicity -->
<p class="subcommittetitle">6. Publicity</p>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/Love.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Love Kumar Shah</div>
        <div class="portfolio-caption-subheading text-muted">9801727559</div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Kishor Khatry</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Dharmapal Ray</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Kuldip Goit</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Sharadha Acharya</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>
</div>

<!-- Reception -->
<p class="subcommittetitle">7. Reception</p>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/Pawana.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Pawana Kayastha</div>
        <div class="portfolio-caption-subheading text-muted">9860455950</div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Rachana Shrestha</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Amrit Dhungel</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Mandira Shrestha</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>
</div>

<!-- Memento & Prizes -->
<p class="subcommittetitle">8. Memento & Prizes</p>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal10">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/SangitaPuree.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Sangita Puree Dhungana</div>
        <div class="portfolio-caption-subheading text-muted">9841336700</div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal11">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Rachana Shrestha</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal12">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Amrit Dhungel</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal13">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/femaldummy.jpg') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Mandira Shrestha</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>
</div>

<!-- Trade and Stall -->
<p class="subcommittetitle">9. Trade and Stall</p>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal14">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/Ramchanda.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Ram Chandra Bastola</div>
        <div class="portfolio-caption-subheading text-muted">9856025224</div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal15">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Ashok Regmi</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal16">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Kiran Sharma</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal17">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Hari Khadka</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal18">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Raju Shedai</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="portfolio-item">
      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal19">
        <div class="portfolio-hover">
          <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
        </div>
        <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
      </a>
      <div class="portfolio-caption">
        <div class="portfolio-caption-heading">Dr. Yograj Sharma</div>
        <div class="portfolio-caption-subheading text-muted"></div>
      </div>
    </div>
  </div>
</div>
  
  <!-- Workshop -->
  <p class="subcommittetitle">10. Workshop</p>
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal14">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/Srijana.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Srijana Basnet</div>
          <div class="portfolio-caption-subheading text-muted">9841283459</div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- E-Souvenir -->
  <p class="subcommittetitle">11. E-Souvenir</p>
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal15">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/SantoshP.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Santosh Pokhrel</div>
          <div class="portfolio-caption-subheading text-muted">9857031621</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal15">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Prakash Jyoti Pokharel </div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal15">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. ⁠Anoop Singh Ranahotra </div>
          <div class="portfolio-caption-subheading text-muted"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal15">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content"><svg class="svg-inline--fa fa-plus fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"></path></svg></div>
          </div>
          <img class="img-fluid" src="{{ asset('NEPAS_/dummyimage.png') }}" alt="...">
        </a>
        <div class="portfolio-caption">
          <div class="portfolio-caption-heading">Dr. Shipra Chaudhary</div>
          <div class="portfolio-caption-subheading text-muted"></div>
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
