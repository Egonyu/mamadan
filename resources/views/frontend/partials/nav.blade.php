<nav class="uk-navbar-container uk-letter-spacing-small">
    <div class="uk-container">
      <div class="uk-position-z-index" data-uk-navbar>
        <div class="uk-navbar-left">
          <a class="uk-navbar-item uk-logo" href="index.html">Mama Dan Groceries</a>
          <ul class="uk-navbar-nav uk-visible@m uk-margin-large-left">
            <li class="uk-active"><a href="{{ route('index') }}">Home</a></li>
            <li ><a href="recipe.html">Recipe</a></li>
            <li ><a href="search.html">Search</a></li>
            <li ><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="uk-navbar-right">
          <div>
            <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
            <div class="uk-drop uk-background-default" data-uk-drop="mode: click; pos: left-center; offset: 0">
              <form class="uk-search uk-search-navbar uk-width-1-1">
                <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>
              </form>
            </div>
          </div>
          <ul class="uk-navbar-nav uk-visible@m">
            <li ><a href="{{ route('login') }}">Sign In</a></li>
          </ul>
          <div class="uk-navbar-item">
            <div><a class="uk-button uk-button-primary" href="{{ route('register') }}">Sign Up</a></div>
          </div>
          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
            data-uk-navbar-toggle-icon></span></a>
        </div>
      </div>
    </div>
  </nav>
