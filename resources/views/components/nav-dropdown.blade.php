@props(['item', 'variant' => 'desktop'])

@if ($variant === 'desktop')
    <div data-hover="true" data-delay="0" class="menu-dropdown {{ !empty($item['hidden']) ? 'none-dropdown' : '' }} w-dropdown">
        <div class="menu-dropdown-toggle w-dropdown-toggle">
            <div>{{ $item['label'] }}</div>
            <div class="menu-dropdown-toggle-icon w-icon-dropdown-toggle"></div>
        </div>
        <nav class="menu-dropdown-content-wrapper w-dropdown-list">
            <div class="menu-dropdown-content-inner-wrapper {{ !empty($item['wide']) ? 'bigger' : '' }}">
                @foreach ($item['children'] as $child)
                    <a href="{{ $child['url'] }}" class="mega-menu-link-box-main updatedt-link w-inline-block">
                        <div>{{ $child['label'] }}</div>
                        <div class="drop-inner-icon">@include('components.nav-arrow-icon')</div>
                    </a>
                @endforeach
            </div>
        </nav>
    </div>
@else
    <div data-delay="0" data-hover="false" class="mobile-mega-menu-dropdown {{ !empty($item['hidden']) ? 'none-mobile-menu-dropdown' : '' }} w-dropdown">
        <div class="menu-drop-down w-dropdown-toggle">
            <h4 class="mega-menu-heading-3">{{ $item['label'] }}</h4>
            <div class="icon-6 w-icon-dropdown-toggle"></div>
        </div>
        <nav class="mobile-dropdown-links padinng-mobile-zero w-dropdown-list">
            <div class="menu-dropdown-content-inner-wrapper mobile-upadte">
                @foreach ($item['children'] as $child)
                    <a href="{{ $child['url'] }}" class="mega-menu-link-box-main updatedt-link mobile-set w-inline-block">
                        <div>{{ $child['label'] }}</div>
                        <div class="drop-inner-icon">@include('components.nav-arrow-icon')</div>
                    </a>
                @endforeach
            </div>
        </nav>
    </div>
@endif
