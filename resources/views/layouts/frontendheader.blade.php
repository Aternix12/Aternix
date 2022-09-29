@extends('layouts.frontend')
@section('header')
<ul class="menu-level menu-level-2 ps-main-menu bs-list-unstyled">
  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/about"
      target="_self"
      data-menu-group="about">
      <i class="fab fa-artstation fa-fw fa-pad-right"></i>

      <span>About</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/subscribe"
      target="_self"
      data-menu-group="subscriptions">
      <i class="far fa-arrow-circle-up fa-fw fa-pad-right"></i>

      <span>Subscriptions</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/learning"
      target="_self"
      data-menu-group="learning">
      <i class="far fa-graduation-cap fa-fw fa-pad-right"></i>

      <span>Learning</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/marketplace/game-dev"
      target="_self"
      data-menu-group="marketplace">
      <i class="far fa-cube fa-fw fa-pad-right"></i>

      <span>Marketplace</span>

      <span class="badge-new js-active-marketplace-sale hidden">Sale</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/prints"
      target="_self"
      data-menu-group="prints">
      <i class="far icomoon icon-prints fa-fw fa-pad-right"></i>

      <span>Prints</span>

      <span class="badge-new js-active-prints-sale hidden">Sale</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/schools"
      target="_self"
      data-menu-group="schools">
      <i class="far fa-school fa-fw fa-pad-right"></i>

      <span>Schools</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/studios"
      target="_self"
      data-menu-group="studios">
      <i class="far fa-users fa-fw fa-pad-right"></i>

      <span>Studios</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/jobs"
      target="_self"
      data-menu-group="jobs">
      <i class="far fa-briefcase fa-fw fa-pad-right"></i>

      <span>Jobs</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/blogs"
      target="_self"
      data-menu-group="blogs">
      <i class="far fa-book fa-fw fa-pad-right"></i>

      <span>Blogs</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/challenges"
      target="_self"
      data-menu-group="challenges">
      <i class="far fa-trophy fa-fw fa-pad-right"></i>

      <span>Challenges</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="https://magazine.artstation.com">
      <i class="far fa-newspaper fa-fw fa-pad-right"></i>

      <span>Magazine</span>
    </a>
  </li>

  <li class="main-menu-item">
    <a
      class="main-menu-link"
      href="/guides"
      target="_self"
      data-menu-group="guides">
      <i class="far fa-book-reader fa-fw fa-pad-right"></i>

      <span>Guides</span>
    </a>
  </li>

  <li class="main-menu-item bs-d-sm-none dropdown dropdown-more">
    <button
      class="main-menu-link dropdown-toggle"
      type="button"
      data-toggle="dropdownMenu">
      <span>More</span>

      <i class="far fa-chevron-down fa-fw fa-pad-left text-primary animate animate-rotate"></i>
    </button>

    <div class="dropdown-more-list">
      <ul class="bs-list-unstyled">
        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="/about"
            target="_self">
            <i class="fab fa-artstation fa-fw fa-pad-right"></i>

            <span>About ArtStation</span>
          </a>
        </li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="/about/company"
            target="_self">
            <i class="far fa-building fa-fw fa-pad-right"></i>

            <span>About Company</span>
          </a>
        </li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="/about/marketing-services"
            target="_self">
            <i class="far fa-star fa-fw fa-pad-right"></i>

            <span>Marketing Services</span>
          </a>
        </li>

        <li class="main-menu-dropdown-divider"></li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="https://help.artstation.com"
            target="_blank">
            <i class="far fa-question fa-fw fa-pad-right"></i>

            <span>Help</span>
          </a>
        </li>

        <li class="main-menu-dropdown-divider"></li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="https://mt.artstation.com/subscription/q8BISXhn"
            target="_blank">
            <i class="far fa-envelope fa-fw fa-pad-right"></i>

            <span>Newsletter</span>
          </a>
        </li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="https://www.facebook.com/artstationhq"
            target="_blank">
            <i class="fab fa-facebook-f fa-fw fa-pad-right"></i>

            <span>Facebook</span>
          </a>
        </li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="https://www.instagram.com/artstationhq"
            target="_blank">
            <i class="fab fa-instagram fa-fw fa-pad-right"></i>

            <span>Instagram</span>
          </a>
        </li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="https://twitter.com/ArtStationHQ"
            target="_blank">
            <i class="fab fa-twitter fa-fw fa-pad-right"></i>

            <span>Twitter</span>
          </a>
        </li>

        <li class="main-menu-dropdown-divider"></li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="/tos"
            target="_self">
            <i class="far fa-gavel fa-fw fa-pad-right"></i>

            <span>Terms of Service</span>
          </a>
        </li>

        <li class="main-menu-dropdown-item">
          <a
            class="main-menu-dropdown-link"
            href="/privacy"
            target="_self">
            <i class="far fa-lock fa-fw fa-pad-right"></i>

            <span>Privacy Policy</span>
          </a>
        </li>
      </ul>
    </div>
  </li>

  <li class="main-menu-item bs-d-sm-none dropdown dropdown-more hidden js-currency-dropdown">
    <button
      class="main-menu-link dropdown-toggle"
      type="button"
      data-toggle="dropdownMenu">
      <span class="js-current-currency">USD, $</span>

      <i class="far fa-fw fa-chevron-down fa-pad-left animate animate-rotate"></i>
    </button>

    <div class="dropdown-more-list">
      <ul class="bs-list-unstyled">
        <li class="main-menu-dropdown-item">
          <button
            class="main-menu-dropdown-link"
            data-js-set-currency="usd"
            type="button">
            <span class="far fa-dollar-sign fa-pad-right-x2"></span>

            <span>USD</span>
          </button>
        </li>

        <li class="main-menu-dropdown-item">
          <button
            class="main-menu-dropdown-link"
            data-js-set-currency="cad"
            type="button">
            <span class="far fa-dollar-sign fa-pad-right-x2"></span>

            <span>CAD</span>
          </button>
        </li>

        <li class="main-menu-dropdown-item">
          <button
            class="main-menu-dropdown-link"
            data-js-set-currency="eur"
            type="button">
            <span class="far fa-euro-sign fa-pad-right-x2"></span>

            <span>EUR</span>
          </button>
        </li>

        <li class="main-menu-dropdown-item">
          <button
            class="main-menu-dropdown-link"
            data-js-set-currency="gbp"
            type="button">
            <span class="far fa-pound-sign fa-pad-right-x2"></span>

            <span>GBP</span>
          </button>
        </li>
      </ul>
    </div>
  </li>
</ul>
@endsection
