@php
    $site = config('site');
    $nav = config('navigation');
@endphp

<section class="header mar-bttom-add">
    <div class="updated-header-main-wrapper">
        <section class="top-navbar">
            <div class="top-navbar-contact">
                <div class="top-nav-content">
                    <div class="navbar-top-text">Call our homes or helpline:</div>
                    <div class="top-nav-border"></div>
                    <div class="top-phone-link">
                        <img loading="lazy" src="https://cdn.prod.website-files.com/666c550eaeae140accd55350/68e3e922bc5cf48b815dc4f5_icons8-phone-500%201.svg" alt="Phone white icon" class="top-phone-icon">
                        <a href="tel:{{ $site['phone_tel'] }}" class="navbar-top-link">{{ $site['phone'] }}</a>
                    </div>
                    <img loading="lazy" src="https://cdn.prod.website-files.com/666c550eaeae140accd55350/6675717a922f45f306591751_closewhite.svg" alt="close white icon" class="close-icon notifi-icon">
                </div>
            </div>
            <a href="#" class="hide-page-box w-inline-block js-hide-page">
                <img src="https://cdn.prod.website-files.com/666c550eaeae140accd55350/68e52d5672a14fee84246bfd_Mask%20group%20(1).svg" loading="lazy" alt="close white eyes" class="hide-icon-image">
                <div class="navbar-top-text"><strong>Hide This Page Now</strong></div>
            </a>
        </section>

        @include('partials.mobile-bottom-bar')

        <section class="header-update sticky">
            <div class="new-header-section destop-show-only">
                <div class="max-width new-width-1350">
                    <div class="new-menu-inner-main-wrapper updated-home">
                        <div class="navbar-logo-center updated-nav">
                            <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-center-container shadow-three w-nav">
                                <div class="container--new-menu padding-x">
                                    <div class="navbar-wrapper-three updated-home-nav-bar">
                                        <a href="{{ route('home') }}" aria-current="page" class="nav-logo-wrapper upadted-menu-logo-box logo-fix w-clearfix w-nav-brand w--current">
                                            <img width="Auto" src="{{ asset($site['logo']) }}" alt="{{ $site['name'] }} Site Logo" class="logo-image new-logo-menu updated-hoe-logo">
                                        </a>
                                        <div class="menu-drop-downs-main-wrapper">
                                            @foreach ($nav['main'] as $item)
                                                <x-nav-dropdown :item="$item" variant="desktop" />
                                            @endforeach
                                        </div>
                                        <div class="button-menu-box-updated">
                                            <div class="wg-element-2 mobile-hide set-new-translate right-margin-btn margin-0 none">
                                                <div>
                                                    <div data-delay="200" data-hover="true" class="wg-dropdown-4 w-dropdown">
                                                        <div lang="en" class="wg-dd-3-togle hover-aniamtion program-dropdown is-outline w-dropdown-toggle">
                                                            <div>our programs</div>
                                                            <div class="menu-dropdown-toggle-icon w-icon-dropdown-toggle"></div>
                                                        </div>
                                                        <nav class="wg-dd-3-list add-style w-dropdown-list">
                                                            @foreach ($nav['programs_quick'] as $program)
                                                                <a href="{{ $program['url'] }}" class="mega-menu-link-box-main updatedt-link w-inline-block">
                                                                    <div>{{ $program['label'] }}</div>
                                                                    <div class="drop-inner-icon">@include('components.nav-arrow-icon')</div>
                                                                </a>
                                                            @endforeach
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-navbar-button-wrap">
                                                <a href="{{ $nav['ctas']['apply']['url'] }}" class="solid-button main-navbar-btn space-fix hover-animation outline w-inline-block">
                                                    <div>{{ $nav['ctas']['apply']['label'] }}</div>
                                                </a>
                                            </div>
                                            <div class="wg-element-2 mobile-hide set-new-translate margin-0">
                                                <div class="wg-element-wrapper sw9">
                                                    <div data-delay="200" data-hover="true" class="wg-dropdown-3 w-dropdown">
                                                        <div lang="en" class="wg-dd-3-togle hover-aniamtion updated-home-language w-dropdown-toggle">
                                                            <div>EN</div>
                                                            <div class="menu-dropdown-lan w-icon-dropdown-toggle"></div>
                                                        </div>
                                                        <nav class="wg-dd-3-list w-dropdown-list">
                                                            <div class="w-locales-list">
                                                                <div role="list" class="w-locales-items">
                                                                    @foreach ($nav['languages'] as $lang)
                                                                        <div role="listitem" class="locale-design w-locales-item">
                                                                            <a hreflang="{{ $lang['code'] }}" href="{{ $lang['url'] }}" class="locale-link {{ $lang['code'] === 'en' ? 'w--current' : '' }}">{{ $lang['label'] }}</a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="new-header-section-updated-mobile w-nav">
                <div class="new-header-section">
                    <div class="navbar-wrapper-three updated-home-nav-bar updtaed-menu-wrapper">
                        <nav role="navigation" class="mobile-menu-updated w-nav-menu">
                            <div class="mobile-show-menu-new-home">
                                @foreach ($nav['main'] as $item)
                                    <x-nav-dropdown :item="$item" variant="mobile" />
                                @endforeach
                                <div class="mobile-menu-button">
                                    <div class="main-navbar-button-wrap show-mobile-update">
                                        <a href="{{ $nav['ctas']['apply']['url'] }}" class="solid-button main-navbar-btn space-fix hover-animation w-inline-block">
                                            <div class="button-text-16 large-font">APPLY FOR HELP</div>
                                        </a>
                                    </div>
                                    <div class="wg-element-2 mobile-hide set-new-translate show-update-mobile margin-tab">
                                        <div class="wg-element-wrapper sw9 set-width">
                                            <div data-delay="200" data-hover="true" class="wg-dropdown-3 w-dropdown">
                                                <div lang="en" class="wg-dd-3-togle hover-aniamtion updated-home-language w-dropdown-toggle">
                                                    <div>EN</div>
                                                    <div class="menu-dropdown-toggle-icon mr-left-10 w-icon-dropdown-toggle"></div>
                                                </div>
                                                <nav class="wg-dd-3-list bg-tramsparent w-dropdown-list">
                                                    <div class="w-locales-list">
                                                        <div role="list" class="w-locales-items">
                                                            @foreach ($nav['languages'] as $lang)
                                                                <div role="listitem" class="locale-design tab-center w-locales-item">
                                                                    <a hreflang="{{ $lang['code'] }}" href="{{ $lang['url'] }}" class="locale-link {{ $lang['code'] === 'en' ? 'w--current' : '' }}">{{ $lang['label'] }}</a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div class="mobile-menu-logo-updated w-container">
                            <a href="{{ route('home') }}" aria-current="page" class="nav-logo-wrapper upadted-menu-logo-box logo-fix w-clearfix w-nav-brand w--current">
                                <img width="Auto" src="{{ asset($site['logo']) }}" alt="{{ $site['name'] }} Site Logo" class="logo-image new-logo-menu updated-hoe-logo top-space">
                            </a>
                            <div class="mobile-meu-humbarger w-nav-button">
                                <img src="https://cdn.prod.website-files.com/666c550eaeae140accd55350/68e63438570d392871211fed_Hamburger%20Menu%201.webp" loading="lazy" alt="Hamburger menu icon" class="menu-hambarger-open">
                                <img src="https://cdn.prod.website-files.com/666c550eaeae140accd55350/68e6479c977dc2bc186d15c1_cross.svg" loading="lazy" alt="cross pink icon" class="menu-hambarger-close">
                            </div>
                        </div>
                        <img src="https://cdn.prod.website-files.com/666c550eaeae140accd55350/68e63c4d7fcfec11238eb49d_Union%20(6).svg" loading="lazy" alt="" class="menu-star-image">
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
