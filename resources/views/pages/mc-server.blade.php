@extends('layouts.frontend') @section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6 vertical-center-col">
                <a class="block block-rounded bg-image minecraft-covers"
                    style="background-image: url('/media/photos/BannerAternix.webp');"
                    href="https://www.curseforge.com/minecraft/modpacks/thicc-craft">
                </a>
            </div>
            <div class="col-md-6">
                <div class="block block-themed block-rounded">
                    <div class="block-header bg-warning">
                        <img src="/media/photos/BucketAxolotl.webp" style="width: 24px; margin-right: 4px !important;">
                        <h3 class="block-title">ThiccCraft</h3>
                    </div>
                    <div class="block-content">
                        <h5>Modpack Link:
                            <span class="content-span">
                                <a class="fw-semibold"
                                    href="https://www.curseforge.com/minecraft/modpacks/thicc-craft">Thicc Craft on
                                    Curseforge</a>
                            </span>
                        </h5>
                        <h5>Official Server IP:
                            <span class="fw-semibold text-muted content-span">mc.aternix.com</span>
                        </h5>
                        <h5>Server Status:
                            <span class="fw-semibold text-muted content-span" id="server-status" style="color:yellow !important">Pinging...</span>
                        </h5>
                        <img id="server-icon"/>
                            <span id="motd"></span>
                        <h5 style="clear: both">Minecraft Version:
                            <span class="fw-semibold text-muted content-span" id="server-version">?</span>
                        </h5>
                        <h5>Players:
                            <span class="fw-semibold text-muted content-span" id="player-count">?</span>
                        </h5>
                        <p>ThiccCraft brings the best of both magic and technology under a robust but modest playset of the
                            most recent mods. Here you will find an experience that we and our team (my friends) find to
                            suit your magic, exploration and technology tree needs, without the overhead of packs like ATM8.
                            Start simple or take on an additional 4 dimensions with renowned mods like Create, Ars Nouveau,
                            Immersive Engineering, Occultism, All the Biomes and many, many more. </p>
                            
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe src="http://123.3.84.55:6284/" title="Thicc Craft Dynmap"></iframe>
            </div>
        </div>
        <hr style="color: white;">
        <div class="row">
            <div class="col-md-6 vertical-center-col">
                <a class="block block-rounded bg-image minecraft-covers"
                    style="background-image: url('/media/photos/BannerVanilla.webp');" href="javascript:void(0)">
                </a>
            </div>
            <div class="col-md-6">
                <div class="block block-themed block-rounded">
                    <ul class="nav nav-tabs nav-tabs-block" role="tablist" style="background-color: #6f9c40 !important;">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab"
                                data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home"
                                aria-selected="true">
                                <h3 class="block-title">Vanilla</h3>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile"
                                aria-selected="false" tabindex="-1">
                                <h3 class="block-title">Join for Bedrock</h3>
                            </button>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="btabs-static-home" role="tabpanel"
                            aria-labelledby="btabs-static-home-tab" tabindex="0">
                            <h5>Modpack Link:
                                <span class="content-span">
                                    <a class="fw-semibold"
                                        href="https://www.curseforge.com/minecraft/modpacks/thicc-craft">Thicc Craft on
                                        Curseforge</a>
                                </span>
                            </h5>
                            <h5>Official Server IP:
                                <span class="fw-semibold text-muted content-span">vanilla.aternix.com</span>
                            </h5>
                            <h5>Minecraft Version:
                                <span class="fw-semibold text-muted content-span">1.19.2</span>
                            </h5>
                            <p>Bacon ipsum dolor amet capicola tail t-bone flank. Sausage flank meatloaf, landjaeger alcatra
                                turkey andouille filet mignon venison. Frankfurter fatback kevin sirloin pig landjaeger
                                corned
                                beef alcatra cupim porchetta. Pastrami frankfurter kevin, rump turkey chuck short loin
                                tongue
                                prosciutto.

                                Ham tenderloin short loin andouille biltong shankle pastrami bresaola burgdoggen chuck
                                sirloin
                                frankfurter salami shank drumstick. Bresaola cow tongue porchetta tail pork belly sirloin,
                                spare
                                ribs turducken drumstick flank salami biltong. Prosciutto tongue cupim, spare ribs salami
                                short
                                loin ham hock. Cupim hamburger bacon cow. Chicken shankle fatback, short ribs pork chop
                                brisket
                                bacon picanha andouille meatball. Landjaeger hamburger turducken salami beef ribs rump,
                                short
                                loin tri-tip burgdoggen pork belly.</p>
                        </div>
                        <div class="tab-pane" id="btabs-static-profile" role="tabpanel"
                            aria-labelledby="btabs-static-profile-tab" tabindex="0">
                            <h4 class="fw-normal">Profile Content</h4>
                            <p>...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
