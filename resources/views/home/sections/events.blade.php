@php
    $events = config('events');
@endphp
<section class="upcoming-events bg-half-white">
    <div class="w-layout-blockcontainer container-41 w-container">
        <div class="cta-heading no-space d-flex">
            <div class="heading-block mobile-center-align">
                <h2 class="heading-2 center-mobile-hd slide-left mobile-cetner">Upcoming Events &amp; Workshops</h2>
            </div>
            <a href="#" class="solid-button pink-outline-btn small-button slide-right updated-12px-border w-inline-block">
                <div class="button-text-4">VIEW ALL</div>
            </a>
        </div>
        <div class="event-category-filters" data-event-filters>
            @foreach ($events['categories'] as $category)
                <button
                    type="button"
                    class="event-category-btn {{ $category['slug'] === 'all' ? 'active' : '' }}"
                    data-event-category="{{ $category['slug'] }}"
                >
                    {{ $category['label'] }}
                </button>
            @endforeach
        </div>
        <div class="ue-inner">
            <div class="card-slider-wrap nppad">
                @foreach ($events['featured'] as $event)
                    <div class="slide-item border-on-hover" data-event-category="{{ $event['category'] }}">
                        <div class="card-body progm">
                            <a href="{{ $event['url'] }}" class="link-block-12 w-inline-block">
                                <img
                                    src="{{ $event['image'] }}"
                                    loading="lazy"
                                    alt="{{ $event['image_alt'] }}"
                                    class="event-slider-img"
                                >
                            </a>
                            <h3 class="event-card-title">{{ $event['title'] }}</h3>
                            <p class="para-text-16 mt-10">{{ $event['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
