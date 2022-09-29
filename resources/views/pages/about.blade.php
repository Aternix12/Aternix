@extends('layouts.frontend') @section('content')

<!-- Hero -->

<div class="hero" id="about-hero">
  <div class="artist-info">
      <div class="avatar">
        <img
          id="about-profile-img"
          alt="Tristan Mitchell"
          src="/media/photos/Square Closeup.jpg"
          height="120"
          width="120"/>
      </div>

      <div class="artist-info-texts">
        <h1 class="artist-name artist-text">
          Tristan Mitchell
        </h1>
        <h3 class="artist-text">
          Founder
        </h3>
        <div>
          admin@aternix.com
        </div>

        <div>
          <i class="fa-solid fa-location-dot"></i>
          <span ng-bind-html="user.location">Melbourne, Australia</span>
        </div>

        <div class="about-icons">
          <a
            href="https://www.linkedin.com/in/tristan-mitchell-8024b3150/"
            target="_blank"
            class="about-icons">
            <i class="fa-brands fa-linkedin about-icons"></i>
          </a>
        </div>
      </div>
    </div>
</div>

<!-- END Hero -->

<!-- Main -->

<div id="main">
  <div class="row items-push">
    <div class="col-md-6">
      <div class="block block-rounded block-fx-shadow dark-mode">
        <div class="block-header block-header-default dark-mode">
          <h3 class="block-title">Inception</h3>
        </div>
        <div class="block-content dark-mode">
          <h5>Our aim is to re-imagine the digital experience.</h5>
          <p>
            We are a creative workspace focused on slowly pushing the assumed relation between user and technology, by ensuring our products produce a meaningful bond with its users.
            <br><br>
            Founded in 2014, we serve a passionate undertaking both in the professional and creative workspaces.
            Our specialisms lie in User-Portal Focused Software Solutions, Website Production and Game Development.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- END Main -->

@endsection
