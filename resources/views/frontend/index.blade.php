<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

@include('frontend.partials.head')

<body>

@include('frontend.partials.nav')

@include('frontend.home.hero')

<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div data-uk-grid>

        @include('frontend.home.sidebarMenu')

      <div class="uk-width-expand@m">

        @include('frontend.home.searchNav')

        <div class="uk-child-width-1-2 uk-child-width-1-3@s" data-uk-grid>
            @yield('content')
        </div>
        @include('frontend.home.pagination')
      </div>
    </div>
  </div>
</div>

@include('frontend.home.videos')

@include('frontend.home.newsLetter')

@include('frontend.partials.footer')

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Kocina</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
      <li class="uk-active"><a href="index.html">Home</a></li>
      <li ><a href="recipe.html">Recipe</a></li>
      <li ><a href="search.html">Search</a></li>
      <li ><a href="contact.html">Contact</a></li>
      <li ><a href="sign-in.html">Sign In</a></li>
      <li ><a href="sign-up.html">Sign Up</a></li>
    </ul>
    <div class="uk-margin-medium-top">
      <a class="uk-button uk-width-1-1 uk-button-primary" href="sign-up.html">Sign Up</a>
    </div>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
