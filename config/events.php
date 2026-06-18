<?php

$cdn = 'https://cdn.prod.website-files.com/666c550eaeae140accd55350';
$placeholder = '#';

return [
    'categories' => [
        ['slug' => 'all', 'label' => 'All Events'],
        ['slug' => 'community-gatherings', 'label' => 'Community Gatherings'],
        ['slug' => 'seminars-workshops', 'label' => 'Seminars & Workshops'],
        ['slug' => 'eid-seasonal', 'label' => 'Eid & Seasonal Festivals'],
    ],
    'featured' => [
        [
            'title' => 'Gathering in Gratitude',
            'url' => $placeholder,
            'image' => '/images/events/gathering-in-gratitude.webp',
            'image_alt' => 'Women gathered for a gratitude brunch celebrating motherhood and women',
            'category' => 'eid-seasonal',
        ],
        [
            'title' => 'Tiny Chefs & Super Moms',
            'url' => $placeholder,
            'image' => '/images/events/tiny-chefs-super-moms.webp',
            'image_alt' => 'Mother and daughter cooking together in a kitchen',
            'category' => 'seminars-workshops',
        ],
        [
            'title' => 'Amaan Cafe',
            'url' => $placeholder,
            'image' => '/images/events/amaan-cafe.webp',
            'image_alt' => 'Women enjoying brunch and conversation at Amaan Cafe',
            'category' => 'community-gatherings',
        ],
        [
            'title' => 'Community Gatherings',
            'url' => $placeholder,
            'image' => "{$cdn}/66841deb0c7d375d077e61fe_nisa-events-gallery-img-desktop-1.webp",
            'image_alt' => 'Women connecting at a community gathering',
            'category' => 'community-gatherings',
        ],
        [
            'title' => 'Eid Celebration',
            'url' => $placeholder,
            'image' => "{$cdn}/66841deb5723739f66d5d8d9_nisa-events-gallery-img-desktop-3.webp",
            'image_alt' => 'Families celebrating Eid together',
            'category' => 'eid-seasonal',
        ],
    ],
];
