@extends('layouts.frontend') @section('content')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('/media/photos/about_hero.jpg'); background-position: 0% 70%;">
        <div class="bg-black-50">
            <div class="content content-top content-full text-center">
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
                            <a href="https://www.linkedin.com/in/tristan-mitchell-8024b3150/" target="_blank"
                                class="about-icons" style="--clr: #0a66c2;">
                                <i class="fa-brands fa-linkedin about-icons"></i>
                            </a>
                            <a href="https://github.com/Aternix12" target="_blank" class="about-icons" style="--clr: #6e5494;">
                                <i class="fa-brands fa-github about-icons"></i>
                            </a>
                            <a href="https://soundcloud.com/aternix12" target="_blank" class="about-icons" style="--clr: #ff7700;">
                                <i class="fa-brands fa-soundcloud about-icons"></i>
                            </a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Main -->

    <div id="main" class="content">
        <h2 class="content-heading">Inception</h2>
        <h5>Our aim is to re-imagine the digital experience.</h5>
        <p>
            We are a creative workspace focused on slowly pushing the assumed relation between user and
            technology, by ensuring our products produce a meaningful bond with its users.
            <br><br>
            Founded in 2014, we serve a passionate undertaking both in the professional and creative
            workspaces.
            Our specialisms lie in User-Portal Focused Software Solutions, Website Production and Game
            Development.
            <br><br>
            Aternix was also conceptualised as a publishing bedrock for self-developed launch titles, alongside website and
            software services.
            Through enthusiastic commitment over the coming years, we hope to see these creative titles by Aternix and
            outside developers alike find successful launches in our portfolio.
        </p>
        <h2 class="content-heading">About Me</h2>
        <p>
            I'm Tristan, but 'Twisty' has stuck my whole life. I was born and raised in rural Victoria and
            am 24y/o. I first started developing games at 10, and even then knew my adult life would be
            focused on producing experiences somewhere in the world of IT. I am currently knuckling down
            completing a BA CompSci at Swinburne Uni, Melbourne as of 2023. :)
            <br><br>
            I will be continuing my time on Aternix during and after Uni to see through titles currently in
            development.
        </p>

        <ul class="timeline timeline-centered timeline-alt">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-gd-sea">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="timeline-event-block block block-rounded block-fx-shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Website Launch</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                2022
                            </div>
                        </div>
                    </div>
                    <div class="block-content dark-mode">
                        <p>Aternix's new website was developed and launched in 2022/2023 as a central hub for all areas of
                            service and creation. The site maintains news and updates regarding games aswell as a public
                            forum.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-gd-fruit">
                    <i class="fa-brands fa-space-awesome"></i>
                </div>
                <div class="timeline-event-block block block-rounded block-fx-shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">War in Space</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                2018
                            </div>
                        </div>
                    </div>
                    <div class="block-content dark-mode">
                        <div class="d-flex">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="/media/photos/wis-arcade-icon.png" alt="" title="" style="">
                            </a>
                            <p>Originally based off earlier games, War in Space Arcade was Aternix's first main-line launch
                                titled to be published. This wave based arcade shooter contains 81 challenging levels with a
                                robust focus tree. My inspiration for the War in Space series was Galaga and Chicken
                                Invaders, where continuous perks are dropped and witty commentary deliniates stages.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-gd-sun">
                    <i class="fa-solid fa-cube"></i>
                </div>
                <div class="timeline-event-block block block-rounded block-fx-shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Foundation</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                2014
                            </div>
                        </div>
                    </div>
                    <div class="block-content dark-mode">
                        <div class="d-flex">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="/media/photos/old_company_logo.png" alt="" title="" style="">
                            </a>
                            <p>Aternix was a initially a teenage project of mine to publish my games online and give myself
                                a game-developer identity. During the brief life of the first website, I ran a personal
                                forum, and had download links for dozens of smaller games I made over the years.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-event">
                <div class="timeline-event-icon bg-gd-sublime">
                    <i class="fa-solid fa-dice-d20"></i>
                </div>
                <div class="timeline-event-block block block-rounded block-fx-shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Original Games</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                2008 - 2014
                            </div>
                        </div>
                    </div>
                    <div class="block-content dark-mode">
                        <div class="d-flex">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="/media/photos/soldier.jpg" alt="" title="" style="">
                            </a>
                            <p>Dozens of smaller games from numerous genres such as Arcade, Shooter, Strategy and Puzzle were created over my preteen and teen years. These projects gave me the dedication to move forward into the game industry after school, and pursue my understanding of what makes a gaming experience memorable.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- END Main -->
@endsection
