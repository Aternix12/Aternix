@extends('layouts.frontend') @section('content')
    <!-- Hero -->

    <div class="hero" id="about-hero">
        <div id="about-hero-image">

        </div>
        <div class="artist-info">
            <div class="avatar">
                <img id="about-profile-img" alt="Tristan Mitchell" src="/media/photos/Square Closeup.jpg" height="120"
                    width="120" />
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
                    <a href="https://www.linkedin.com/in/tristan-mitchell-8024b3150/" target="_blank" class="about-icons">
                        <i class="fa-brands fa-linkedin about-icons"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- END Hero -->

    <!-- Main -->

    <div id="main" class="content">
        <div class="row items-push">
            <div class="col-md-6 hidden">
                <div class="block block-rounded block-fx-shadow dark-mode">
                    <div class="block-header block-header-default dark-mode">
                        <h3 class="block-title">Vision</h3>
                    </div>
                    <div class="block-content dark-mode">
                        <h5>Our aim is to re-imagine the digital experience.</h5>
                        <p>
                            We are a creative workspace focused on slowly pushing the assumed relation between user and
                            technology, by ensuring our products produce a meaningful bond with its users.
                            <br><br>
                            Founded in 2014, we serve a passionate undertaking both in the professional and creative
                            workspaces.
                            Our specialisms lie in User-Portal Focused Software Solutions, Website Production and Game
                            Development.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden">
                <div class="block block-rounded block-fx-shadow dark-mode">
                    <div class="block-header block-header-default dark-mode">
                        <h3 class="block-title">Inception</h3>
                    </div>
                    <div class="block-content dark-mode">
                        <p>
                            Gday
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <ul class="timeline timeline-centered timeline-alt">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-default">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="timeline-event-block block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">New Friends</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                just now
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg"
                                                    alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Sara Fields</div>
                                                <div class="fs-sm text-muted">3 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg"
                                                    alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Ralph Murray</div>
                                                <div class="fw-normal fs-sm text-muted">5 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg"
                                                    alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Amber Harvey</div>
                                                <div class="fw-normal fs-sm text-muted">16 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg"
                                                    alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Marie Duncan</div>
                                                <div class="fs-sm text-muted">23 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg"
                                                    alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Brian Cruz</div>
                                                <div class="fw-normal fs-sm text-muted">23 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                                                <img class="img-avatar img-avatar48"
                                                    src="assets/media/avatars/avatar7.jpg" alt="">
                                                <span
                                                    class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Lori Moore</div>
                                                <div class="fw-normal fs-sm text-muted">35 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-info">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="timeline-event-block block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Update</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                30 min ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="d-flex fs-sm">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="assets/media/avatars/avatar4.jpg" alt="" title="" style="">
                            </a>
                            <div class="flex-grow-1">
                                <p>
                                    <a class="fw-semibold" href="javascript:void(0)">Amber Harvey</a>
                                    Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                    vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                    tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                </p>
                                <p>
                                    <a class="text-dark me-2" href="javascript:void(0)">
                                        <i class="fa fa-reply fa-fw text-muted"></i> Reply
                                    </a>
                                    <a class="text-dark me-2" href="javascript:void(0)">
                                        <i class="fa fa-redo fa-fw text-muted"></i> Retweet
                                    </a>
                                    <a class="text-dark me-2" href="javascript:void(0)">
                                        <i class="fa fa-heart fa-fw text-muted"></i> Like
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-success">
                    <i class="fa fa-images"></i>
                </div>
                <div class="timeline-event-block block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">New Gallery</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                2 hrs ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row items-push js-gallery img-fluid-100 js-gallery-enabled">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo11@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo11.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo12@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo12.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo13@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo13.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo14@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo14.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo15@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo15.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo16@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo16.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo17@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo17.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="assets/media/photos/photo18@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo18.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-danger">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="timeline-event-block block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Meeting</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                3 hrs ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="d-flex fs-sm push">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <i class="fa fa-utensils fa-fw fa-3x text-danger-light"></i>
                            </a>
                            <div class="flex-grow-1">
                                <p>
                                    You have a meal meeting scheduled with <a class="fw-semibold"
                                        href="javascript:void(0)">Thomas Riley</a> today at 16:18.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-xsmooth">
                    <i class="far fa-file-alt"></i>
                </div>
                <div class="timeline-event-block block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Post</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                6 hrs ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                            tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                            quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                            luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                            tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                            quis in sit varius lorem sit metus mi.</p>
                        <a class="btn btn-sm btn-alt-secondary push" href="javascript:void(0)">Read More..</a>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-dark">
                    <i class="fa fa-cogs"></i>
                </div>
                <div class="timeline-event-block block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">System</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                1 day ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
                            <div class="flex-grow-1 me-3">
                                <p class="mb-0">Core successfully <a class="alert-link"
                                        href="javascript:void(0)">updated</a> to v3.2!</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="fa fa-fw fa-check-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


    </div>

    <!-- END Main -->
@endsection
