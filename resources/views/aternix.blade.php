@extends('layouts.frontend') @section('content')

<link
  href="/js/plugins/tsparticles/particles.css"
  rel="stylesheet">
</link>


<!-- Hero -->

<div id="tsparticles">
  <script
    src="/js/plugins/tsparticles/tsParticles.min.js">
  </script>

  <script src="/js/plugins/tsparticles/particles.js"></script>
</div>

<!-- END Hero -->
<div id="main">
<div class="row items-push">
  <div class="col-md-6 animated fadeIn">
    <a
      class="block block-rounded bg-image h-100 mb-0"
      href="javascript:void(0)"
      style="background-image: url('/media/photos/WarInSpace.png');">
      <div class="block-content bg-black-50">
        <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
          <p><span class="badge bg-primary fw-bold p-2 text-uppercase">2018</span></p>

          <p class="fs-sm">
            <span class="text-white fw-semibold me-1">
              <i class="fa fa-fw fa-steam text-white-50"></i>

              Steam
            </span>

            <span class="text-white fw-semibold me-1">
              <i class="fa fa-fw fa-heart text-white-50"></i>

              Itch TEST
            </span>

            <span class="text-white fw-semibold me-1">
              <i class="fa fa-fw fa-comments text-white-50"></i>

              IndieDB
            </span>

            <span class="text-white fw-semibold me-1">
                <i class="fa fa-fw fa-comments text-white-50"></i>

                ModDB
              </span>
          </p>
        </div>

        <p class="fs-lg fw-bold text-white mb-1">War in Space Arcade</p>

        <p class="fw-medium text-white-75">Our First Launch Title · Progressive Space Shooter</p>
      </div>
    </a>
  </div>

  <div class="col-md-6 animated fadeIn">
    <a
      class="block block-rounded bg-image h-100 mb-0"
      href="javascript:void(0)"
      style="background-image: url('/media/photos/CarbonField Promo Original.png');">
      <div class="block-content bg-black-50">
        <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
          <p>
            <span class="badge bg-danger fw-bold p-2 text-uppercase">In Development</span>
          </p>

          <p class="fs-sm">
            <span class="text-white fw-semibold me-1">
              <i class="fa fa-fw fa-eye text-white-50"></i>

              433
            </span>

            <span class="text-white fw-semibold me-1">
              <i class="fa fa-fw fa-heart text-white-50"></i>

              78
            </span>

            <span class="text-white fw-semibold me-1">
              <i class="fa fa-fw fa-comments text-white-50"></i>

              43
            </span>
          </p>
        </div>

        <p class="fs-lg fw-bold text-white mb-1">CarbonField</p>

        <p class="fw-medium text-white-75">Alt-History Trench Warfare RTS · Subscribe for Updates</p>
      </div>
    </a>
  </div>
</div>
</div>
@endsection
