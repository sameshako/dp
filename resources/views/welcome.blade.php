@extends('layouts.front.app')

@section('content')

<div class="featured-properties content-area-7" id="results">
</div>



<div class="">
  <div class="container-fluid container">

    <div class="main-title">

      <h1>Anunturi promovate</h1>

      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->

    </div>

    <div class="row slick-fullwidth wow fadeInUp delay-04s animated" style="visibility: visible;">


      @foreach($properties_featured as $elem)
      <div class="slick-slide-item">

        <div class="property-box">

          <div class="property-thumbnail">

            <a href="properties-details.html" class="property-img">

              <div class="plan-price"><sup></sup>{{$elem->pret}}€<span></span> </div>

              <img class="img-fluid" alt="property-box" src="/storage/properties/{{$elem->slug}}/{{get_images($elem->images)}}">

            </a>
            <a href="/property/{{$elem->slug}}">

              <div class="property-overlay">

        
              </div>

            </a>
          </div><a href="/property/{{$elem->slug}}">

          </a>

          <div class="detail">

            <h1 class="title">

              <a href="/property/{{$elem->slug}}">{{$elem->title}}</a>

            </h1>

            <div class="location">

              <a href="properties-details.html">

                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> {{$elem->localitate}}

              </a>

            </div>

    

          </div>

        </div>

      </div>
      @endforeach

      <div class="slick-prev slick-arrow-buton">

        <i class="fa fa-angle-left"></i>

      </div>

      <div class="slick-next slick-arrow-buton">

        <i class="fa fa-angle-right"></i>

      </div>

    </div>

  </div>
</div>

<div class="">
  <div class="container-fluid container">

    <div class="main-title">

      <h1 style="margin-top: 150px;">Ultimele anunturi</h1>

      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->

    </div>

    <div class="row slick-fullwidth wow fadeInUp delay-04s animated" style="visibility: visible;">

     
    @foreach($properties as $elem)
      <div class="slick-slide-item">

        <div class="property-box">

          <div class="property-thumbnail">

            <a href="properties-details.html" class="property-img">

              <div class="plan-price"><sup></sup>{{$elem->pret}}€<span></span> </div>

              <img class="img-fluid" alt="property-box" src="/storage/properties/{{$elem->slug}}/{{get_images($elem->images)}}">

            </a>
            <a href="/property/{{$elem->slug}}">

              <div class="property-overlay">

        
              </div>

            </a>
          </div><a href="/property/{{$elem->slug}}">

          </a>

          <div class="detail">

            <h1 class="title">

              <a href="/property/{{$elem->slug}}">{{$elem->title}}</a>

            </h1>

            <div class="location">

              <a href="properties-details.html">

                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> {{$elem->localitate}}

              </a>

            </div>

    

          </div>

        </div>

      </div>
      @endforeach






      <div class="slick-prev slick-arrow-buton">

        <i class="fa fa-angle-left"></i>

      </div>

      <div class="slick-next slick-arrow-buton">

        <i class="fa fa-angle-right"></i>

      </div>

    </div>

  </div>
</div>

<section class="image-cover pb-0" style="background:#122947 url(https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/pattern.png) no-repeat;">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 col-md-7">
        <h2 class="text-light" style="color: #89c736 !important;">Ce spun clientii DirectProprietar.ro?</h2>
        <div class="smart-textimonials smart-light slick-initialized slick-slider" id="smart-textimonials">
          <!-- Single Item -->
          <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 3420px; transform: translate3d(-1140px, 0px, 0px);" role="listbox">
              <div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 570px;" tabindex="-1">
                <div class="smart-tes-content">
                  <p>Pe DirectProprietar.ro am reusit sa imi vand imobilul in cel mai scurt timp. Procesul a fost super usor, si ii recomand mai departe celor care vor sa vanda sau sa inchirieze un imobil si nu au timpul necesar. Multumesc!</p>
                </div>

                <div class="smart-tes-author">
                  <div class="st-author-box">
                    <div class="st-author-thumb">
                      <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="">
                    </div>
                    <div class="st-author-info">
                      <h4 class="st-author-title">Daniela Naomi</h4>
                      <span class="st-author-subtitle">Ramnicu Valcea</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 570px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                <div class="smart-tes-content">
                  <p>Pe DirectProprietar.ro am reusit sa imi vand imobilul in cel mai scurt timp. Procesul a fost super usor, si ii recomand mai departe celor care vor sa vanda sau sa inchirieze un imobil si nu au timpul necesar. Multumesc!</p>
                </div>

                <div class="smart-tes-author">
                  <div class="st-author-box">
                    <div class="st-author-thumb">
                      <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="">
                    </div>
                    <div class="st-author-info">
                      <h4 class="st-author-title">Rares Stefan</h4>
                      <span class="st-author-subtitle">Bucuresti</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 570px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                <div class="smart-tes-content">
                  <p>Pe DirectProprietar.ro am reusit sa imi vand imobilul in cel mai scurt timp. Procesul a fost super usor, si ii recomand mai departe celor care vor sa vanda sau sa inchirieze un imobil si nu au timpul necesar. Multumesc!</p>
                </div>

                <div class="smart-tes-author">
                  <div class="st-author-box">
                    <div class="st-author-thumb">
                      <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="">
                    </div>
                    <div class="st-author-info">
                      <h4 class="st-author-title">Mariana Popescu</h4>
                      <span class="st-author-subtitle">Iasi</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 570px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                <div class="smart-tes-content">
                  <p>Pe DirectProprietar.ro am reusit sa imi vand imobilul in cel mai scurt timp. Procesul a fost super usor, si ii recomand mai departe celor care vor sa vanda sau sa inchirieze un imobil si nu au timpul necesar. Multumesc!</p>
                </div>

                <div class="smart-tes-author">
                  <div class="st-author-box">
                    <div class="st-author-thumb">
                      <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="">
                    </div>
                    <div class="st-author-info">
                      <h4 class="st-author-title">Vasile Motu</h4>
                      <span class="st-author-subtitle">Bucuresti</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item slick-slide" data-slick-index="3" aria-hidden="true" style="width: 570px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                <div class="smart-tes-content">
                  <p>Pe DirectProprietar.ro am reusit sa imi vand imobilul in cel mai scurt timp. Procesul a fost super usor, si ii recomand mai departe celor care vor sa vanda sau sa inchirieze un imobil si nu au timpul necesar. Multumesc!</p>
                </div>

                <div class="smart-tes-author">
                  <div class="st-author-box">
                    <div class="st-author-thumb">
                      <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="">
                    </div>
                    <div class="st-author-info">
                      <h4 class="st-author-title">Daniela Naomi</h4>
                      <span class="st-author-subtitle">Ramnicu Valcea</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 570px;" tabindex="-1">
                <div class="smart-tes-content">
                  <p>Pe DirectProprietar.ro am reusit sa imi vand imobilul in cel mai scurt timp. Procesul a fost super usor, si ii recomand mai departe celor care vor sa vanda sau sa inchirieze un imobil si nu au timpul necesar. Multumesc!</p>
                </div>

                <div class="smart-tes-author">
                  <div class="st-author-box">
                    <div class="st-author-thumb">
                      <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="">
                    </div>
                    <div class="st-author-info">
                      <h4 class="st-author-title">Rares Stefan</h4>
                      <span class="st-author-subtitle">Bucuresti</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Item -->


          <!-- Single Item -->


          <!-- Single Item -->


        </div>
      </div>

      <div class="col-lg-6 col-md-5">
        <img src="https://via.placeholder.com/800x500" class="img-fluid" alt="">
      </div>

    </div>
  </div>
</section>

<section>
    <div class="our-newslatters-2">
        <div class="container">
            <div class="row inner">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="intro-text">
                        <h3>Abonează-te la newsletterul nostru</h3>
                        <p>Abonați-vă pentru a primi actualizări și informații. Nu vă faceți griji, nu vom trimite spam!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="Subscribe-box">
                        <form class="form-inline" action="#" method="GET">
                            <input type="text" class="form-control mb-sm-0" id="inlineFormInputName4" placeholder="Adresa de e-mail">
                            <button type="submit" class="btn">Ma abonez!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('js')

<script>
  function get_featured() {
    $.ajax({
      url: "/get_properties_featured",
      method: "POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    }).done(function(response) {
      $("#results").html(response);
    });
  }

  $(document).ready(function() {
    get_featured();
  });
</script>

@endpush

@endsection