@extends('master')
@section('content')
<div class="container-about-us">

<div class="about-us-swiper-container">
  <div class="swiper about-us-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://i.pinimg.com/736x/f7/2e/5a/f72e5ab17b4ecc8be010676ddcaba9d5.jpg" alt="About Slide 1" />
      </div>
      <div class="swiper-slide">
        <img src="https://i.pinimg.com/736x/e9/b3/34/e9b33430b42822e748242e61d77703f5.jpg" alt="About Slide 2" />
      </div>
      <div class="swiper-slide">
        <img src="https://i.pinimg.com/736x/93/25/6c/93256c3f91680c4df7dca525d3d9de5b.jpg" alt="About Slide 3" />
      </div>
      <div class="swiper-slide">
        <img src="https://i.pinimg.com/736x/b7/d5/ac/b7d5ac49c5520ffd8bfa69910a897d30.jpg" alt="About Slide 4" />
      </div>
      <div class="swiper-slide">
        <img src="https://i.pinimg.com/736x/19/2f/b1/192fb10202955bdd406636d217f7f0d6.jpg" alt="About Slide 5" />
      </div>
      <div class="swiper-slide">
        <img src="https://i.pinimg.com/736x/b3/72/68/b372680b2b22b1f3fef088c867039bcb.jpg" alt="About Slide 6" />
      </div>
    </div>
    <div class="swiper-pagination about-us-pagination"></div>
  </div>
</div>


        <section class="about-us">
            <h2 class="about-us-title">Welcome to Veloria Cos!</h2>
            <p class="about-us-content"> Veloria Cos is the perfect destination for cosplay enthusiasts. We provide high-quality costumes with a diverse range of styles, from anime and manga to characters from movies and video games.</p>
        </section>
        
        <section class="services">
            <div class="service-item">
                <img src="https://i.pinimg.com/736x/52/ab/9b/52ab9b38deee2512db12fed0e8ca800d.jpg" alt="Cosplay Costume Rental">
                <h3>Cosplay Costume Rental</h3>
            </div>
            <div class="service-item">
                <img src="https://i.pinimg.com/736x/5c/0d/54/5c0d541429e684ca1eb0608a8d66f8dd.jpg" alt="Custom Costume Design">
                <h3>Custom Costume Design</h3>
            </div>
            <div class="service-item">
                <img src="https://i.pinimg.com/736x/66/06/ee/6606ee130822ec19776f2192c35ee7f0.jpg" alt="Cosplay Photography Services">
                <h3>Cosplay Photography</h3>
            </div>
        </section>
        
        <div class="why-shop">
            <h2 class="div-title">Why you’ll love to shop on our website</h2>
            <div class="features">
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-heart"></i></div>
                    <h3>Take care with love</h3>
                    <p>We take care of your package with full attention and of course full of love...</p>
                </div>
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-headset"></i></div>
                    <h3>Friendly Customer Service</h3>
                    <p>You do not need to worry when you want to check your package...</p>
                </div>
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Refund Process</h3>
                    <p>Refund is a bad experience, but when it happens, we will ensure a smooth process...</p>
                </div>
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-truck"></i></div>
                    <h3>Fast Shipping</h3>
                    <p>We deliver your orders quickly and securely so you can enjoy your purchases sooner...</p>
                </div>
            </div>
        </div>
        
        <section class="team-section">
            <div class="team-header">
                <h2 class="team-title">OUR TEAM</h2>
                <button class="team-join-button">Join us</button>
            </div>
            <p class="team-subtitle"><i>Dream Makers</i></p>
            <div class="team-members">
                <div class="team-member">
                    <img src="https://i.pinimg.com/736x/62/cd/c4/62cdc409a7562892ae0195f13dcedb01.jpg" alt="Team Member 1">
                    <div class="content-member">
                        <div class="name-member">VI HANG</div>
                        <div class="position-member">Decorater</div>
                        <div class="contact-member">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/736x/f7/2e/5a/f72e5ab17b4ecc8be010676ddcaba9d5.jpg" alt="Team Member 1">
                    <div class="content-member">
                        <div class="name-member">TO NGA</div>
                        <div class="position-member">Decorater</div>
                        <div class="contact-member">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/474x/0b/68/e7/0b68e7feaffc3664e45d11a102d4f762.jpg" alt="Team Member 1">
                    <div class="content-member">
                        <div class="name-member">THUY TRANG</div>
                        <div class="position-member">Decorater</div>
                        <div class="contact-member">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://i.pinimg.com/736x/f7/2e/5a/f72e5ab17b4ecc8be010676ddcaba9d5.jpg" alt="Team Member 1">
                    <div class="content-member">
                        <div class="name-member">MINH HOANG</div>
                        <div class="position-member">Decorater</div>
                        <div class="contact-member">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
       
</div>



<script src="{{ asset('assets/js/about-us.js') }}"></script>
@endsection