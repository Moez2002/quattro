@php
    $gettitle = App\Models\coordonneesmodel::getRecord();
    $getRecentTitle = App\Models\coordonneesmodel::orderBy('id', 'desc')->first();
@endphp
<footer class="footer bg-cover"  data-overlay-dark="98">
    <div class="footer-main-area">
      <div class="logo-footer">
        <img src="public/assets/images/logo-quattro.png" alt="" />
        <div class="slogan-logo-footer">You can find inspiration,ideas,and innovation</div>
      </div>
      <div class="container footer" >
        <div class="row modification" >
        @foreach($gettitle as $value_home1_title)
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 modified">
            <div class="widget footer-widget mrr-50 mrr-md-0">
              <h5 class="widget-title text-white mrb-30">{{$value_home1_title->Title_en}}</h5>
              <address class="mrb-0">
                <div class="mrb-15">
                  <a href="#"><i class="fas fa-phone-alt mrr-10"></i>{{$value_home1_title->phone}}</a>
                </div>
                <div class="mrb-15">
                  <a href="#"><i class="fas fa-envelope mrr-10"></i>{{$value_home1_title->email}}</a>
                </div>
                <div class="mrb-0">
                  <a href="#"><i class="fas fa-home mrr-10"></i>{{$value_home1_title->adresse}}</a>
                </div>
              </address>
            </div>
          </div>
          @endforeach
          <div class="col-xl-12">
            <div class="text-center">
            @php
          $gettitle = App\Models\contact1block2model::getRecord();
        @endphp
        @foreach($gettitle as $value_contact1_link)
          <ul class="social-list">
            <li>
              <a href="{{ $value_contact1_link->facebook }}"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="{{ $value_contact1_link->tiktok }}"><i class="fab fa-tiktok"></i></a>
            </li>
            <li>
              <a href="{{ $value_contact1_link->linkedin }}"><i class="fab fa-linkedin"></i></a>
            </li>
            <li>
              <a href="{{ $value_contact1_link->instagram }}"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
          @endforeach
        </div>  </div>  </div>
        <!-- <div class="row pdt-30 pdb-30 footer-copyright-area"> -->
        <div class="area-zone">
          <div class="col-xl-12">
            <div class="text-center">
              <span> 2024. ALL RIGHTS RESERVED, POWERED BY <a href="https://hypermedia.com.tn/" target="_blank">HYPERMEDIA</a> </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>