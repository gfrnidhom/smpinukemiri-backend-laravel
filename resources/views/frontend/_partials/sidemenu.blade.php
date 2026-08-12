 <!--==============================
    Sidemenu
 ============================== -->
 <div class="sidemenu-wrapper d-none d-lg-block ">
     <div class="sidemenu-content">
         <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
         <div class="widget footer-widget">
             <div class="newsletter-logo mb-30">
                 <a href="{{ route('home-dashboard') }}"><img src="{{ $settings['first_logo'] }}" width="250px" alt="SMP Islam Nurul Ulum"></a>
             </div>
             <p class="footer-text mb-30">{{ strip_tags($settings['description_sort']) }}</p>
             <h3 class="widget_title">Hubungi Kami</h3>
             <div class="contact-feature mb-20">
                 <div class="contact-feature-icon">
                     <i class="fal fa-location-dot"></i>
                 </div>
                 <div class="media-body">
                     <p class="contact-feature_label">Alamat:</p>
                     <span class="contact-feature_link">{{ strip_tags($settings['address']) }}</span>
                 </div>
             </div>
             <div class="contact-feature mb-20">
                 <div class="contact-feature-icon">
                     <i class="fal fa-phone"></i>
                 </div>
                 <div class="media-body">
                     <p class="contact-feature_label">Telepon/WA:</p>
                     <a href="tel:{{ $settings['phone'] }}" class="contact-feature_link">{{ $settings['phone'] }}</a>
                 </div>
             </div>
             <div class="contact-feature mb-20">
                 <div class="contact-feature-icon">
                     <i class="fal fa-envelope"></i>
                 </div>
                 <div class="media-body">
                     <p class="contact-feature_label">Email:</p>
                     <a href="mailto:{{ $settings['email'] }}" class="contact-feature_link">{{ $settings['email'] }}</a>
                 </div>
             </div>
             <div class="th-social mt-20">
                 <a href="{{ $settings['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                 <a href="{{ $settings['instagram'] }}"><i class="fab fa-instagram"></i></a>
                 <a href="{{ $settings['tiktok'] }}"><i class="fab fa-tiktok"></i></a>
                 <a href="{{ $settings['youtube'] }}"><i class="fab fa-youtube"></i></a>
             </div>
         </div>
     </div>
 </div>
 <div class="popup-search-box d-none d-lg-block">
     <button class="searchClose"><i class="fal fa-times"></i></button>
     <form action="{{ route('blogs') }}" method="GET">
         <input type="text" name="search" placeholder="Cari berita atau informasi...">
         <button type="submit"><i class="fal fa-search"></i></button>
     </form>
 </div>
