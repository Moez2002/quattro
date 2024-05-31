<header class="header-style-01">
      <div class="header-topbar">
        <div class="topbar-wrapper">
        @php
          $gettitle = App\Models\contact1block2model::getRecord();
        @endphp
        @foreach($gettitle as $value_contact1_link)
          <ul class="topbar-social">
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
          <ul class="topbar-info">
            <div class="btn-request"><a href="{{asset('/Quotationrequest')}}">Quotation Request</a></div>
            <div class="topbar-info-right">
            <div class="topbar-search">
              <a href="#" class="search-toggler">
                <img src="{{ asset('public\assets1\images\objects\Loop.png')}}" class="base-icon-search-1" alt="shopBag" />
              </a>
            </div>
              
              
  
            </div>
          </ul>
  
        </div>
      </div>
          @php
            $categories = App\Models\categoriesmodel::getRecord();
          @endphp
      <nav class="main-menu sticky-header">
        <div class="main-menu-wrapper">
          <div class="left-section">
            <ul class="main-nav-menu">
            
              <li>
                <a href="/Foire/aboutus" class="Nav">ABOUT</a>
              </li>
              <li>
                <a href="/Foire/actualités" class="Nav">ACTUALITÉS</a>
              </li>
              
              @foreach($categories as $category)
    @if($category->category_id == null)
    @if(!in_array($category->name, ['WARDROBE', 'FURNITURE']))
        <li class="">
            <a href="{{ asset("categories/".$category->slug) }}" class="nav">{{$category->name}}</a>
            <ul>
                @foreach($categories as $subcategory)
                    @if($subcategory->category_id == $category->id)
                        <li><a href="/Foire/produit/{{$subcategory->slug}}">{{$subcategory->name}}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
    @endif
    @endif
@endforeach
              

            </ul>
          </div>
          <div class="center-section">
            <div class="main-menu-logo">
              <a href="/Foire">
                <img src="{{ asset('public/assets/images/logo-quattro.png') }}" class="image-logo" alt="logo" />
              </a>
            </div>
          </div>
          <div class="right-section">
            <ul class="main-nav-menu">
            @foreach($categories as $category)
    @if($category->category_id == null)
    @if(in_array($category->name, ['WARDROBE', 'FURNITURE']))
        <li class="">
            <a href="{{ asset("categories/".$category->slug) }}" class="nav">{{$category->name}}</a>
            <ul>
                @foreach($categories as $subcategory)
                    @if($subcategory->category_id == $category->id)
                        <li><a href="/Foire/produit/{{$subcategory->slug}}">{{$subcategory->name}}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
        @endif
    @endif
@endforeach 
              <li><a href="/Foire/contact" class="Nav">CONTACT</a></li>
              <li>
                <a href="/Foire/catalogue" class="Nav">CATALOGUE</a>
              </li>
            </ul>
          </div>
          <div class="main-menu-right">
            <a href="#" class="mobile-nav-toggler">
              <span></span>
              <span></span>
              <span></span>
            </a>
            <div class="header-contact-info">
              <div class="header-contact-info-icon">
                <i class="base-icon-011-phone-1"></i>
              </div>
              <div class="header-contact-info-text">
                <p class="call-text">Call Anytime</p>
                <h5 class="phone-no"><a href="tel:123456789">+12 345 666 789</a></h5>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>