<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => 'ලබන්නාගේ දිනය',
                            'available-to'         => 'ලබන්නාගේ දිනය',

                            'available-every-week' => [
                                'no'    => 'නෑ',
                                'title' => 'සෑම සතියකම ලබා දීම',
                                'yes'   => 'ඔව්',
                            ],

                            'appointment' => [
                                'break-duration'         => 'ස්ලොට් අතුරින් වේලා (මිනිත්තු)',
                                'slot-duration'          => 'ස්ලොට් කාලය (මිනිත්තු)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'නැත',
                                    'title' => 'සියලු දින සඳහා එක ස්ලොට්',
                                    'yes'   => 'ඔව්',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'එක් කරන්න',
                                'break-duration'   => 'ස්ලොට් අතුරින් වේලා (මිනිත්තු)',
                                'close'            => 'වසා',
                                'description'      => 'ඇතුල් විස්තර',
                                'description-info' => 'ස්ලොට්ස් හදුනා ගැනීමේ කාල කාලසේක් හා දැක්වේ.',
                                'edit'             => 'සංස්කරණය',
                                'many'             => 'එක් දිනකට බොකින් හොයමු',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'ස්ලොට්ස් එකතු කරන්න',
                                        'close'      => 'වසන්ත',
                                        'day'        => 'දිනය',
                                        'edit-title' => 'ස්ලොට්ස් සංස්කරණය කරන්න',
                                        'friday'     => 'සිකුරාදා',
                                        'from'       => 'සිට',
                                        'from-day'   => 'සිට දිනය',
                                        'from-time'  => 'සිට වේලාව',
                                        'monday'     => 'සඳුදා',
                                        'open'       => 'විවෘත',
                                        'saturday'   => 'සෙනසුරාදා',
                                        'save'       => 'සුරක්ෂිතයි',
                                        'select'     => 'තෝරන්න',
                                        'status'     => 'ස්තුතිය',
                                        'sunday'     => 'ඉරිදා',
                                        'thursday'   => 'බ්‍රහස්පතින්දා',
                                        'to'         => 'සිට',
                                        'to-day'     => 'සිට දිනය',
                                        'to-time'    => 'සිට වේලාව',
                                        'tuesday'    => 'අඟහරුවාදා',
                                        'wednesday'  => 'බදාදා',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'එක් දිනක් සඳහා බොකින් හොයමු',
                                'open'             => 'විවෘත',
                                'slot-add'         => 'ස්ලොට් එක් කරන්න',
                                'slot-duration'    => 'ස්ලොට් කාලය (මිනිත්තු)',
                                'slot-title'       => 'ස්ලොට්ස් කාල කාලසේක්',
                                'title'            => 'පෙරනිමි',
                                'unavailable'      => 'ලබා ගත නොහැක',
                            ],

                            'event'       => [
                                'add'                => 'ක්ෂණික එකතු කරන්න',
                                'delete'             => 'මකන්න',
                                'description'        => 'විස්තර',
                                'description-info'   => 'කිසිවක් නොමැත.',
                                'edit'               => 'සංස්කරණය',

                                'modal'              => [
                                    'edit' => 'ටිකට් සංස්කරණය කරන්න',
                                    'save' => 'සුරක්ෂිතයි',
                                ],

                                'name'               => 'නම',
                                'price'              => 'මිල',
                                'qty'                => 'ප්රමාණය',
                                'special-price'      => 'විශේෂ මිලාව',
                                'special-price-from' => 'විශේෂ මිලාව',
                                'special-price-to'   => 'විශේෂ මිලාව දක්වා',
                                'title'              => 'ක්ෂණික එකතු',
                                'valid-from'         => 'වලංගු වන්නේ',
                                'valid-until'        => 'වලංගු වේ',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'ක්ෂණික එකතු කරන්න',
                                ],

                                'slots'   => [
                                    'add'         => 'ස්ලොට් එක් කරන්න',
                                    'description' => 'ස්ලොට්ස් සහ කාලය දීමනාව.',
                                ],
                            ],

                            'location'             => 'ස්ථානය',
                            'qty'                  => 'ප්‍රමාණය',

                            'rental'      => [
                                'daily'                  => 'දින පද්ධතියේ',
                                'daily-hourly'           => 'සිසුන් (දිනවල් සහ පැයක්)',
                                'daily-price'            => 'දින මිල',
                                'hourly'                 => 'පැයක් පද්ධතියේ',
                                'hourly-price'           => 'පැයක් මිල',

                                'same-slot-for-all-days' => [
                                    'no'    => 'නැත',
                                    'title' => 'සියලු දින සඳහා එක ස්ලොට්',
                                    'yes'   => 'ඔව්',
                                ],

                                'title'                  => 'ක්ෂණික වර්ගය',
                            ],

                            'slots'       => [
                                'add'              => 'ස්ලොට් එක් කරන්න',

                                'action'           => [
                                    'add' => 'එක් කරන්න',
                                ],

                                'description-info' => 'ස්ලොට්ස් හදුනා ගැනීමේ කාල කාලසේක් හා දැක්වේ.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'සික්රාම',
                                        'from'       => 'සිට',
                                        'monday'     => 'සරික්වාරය',
                                        'saturday'   => 'සෙනසුරාදා',
                                        'sunday'     => 'ඉරිදා',
                                        'thursday'   => 'බ්‍රහස්පතින්දා',
                                        'to'         => 'සිට',
                                        'tuesday'    => 'අඟහරුවාදා',
                                        'wednesday'  => 'බුදුදා',
                                    ],
                                ],

                                'save'             => 'සුරකින්න',
                                'title'            => 'ස්ලොට්ස් කාල කාලසේක්',
                                'unavailable'      => 'නොලැබේ',
                            ],

                            'table'       => [
                                'break-duration'            => 'ස්ලොට් අතුරින් වේලා (මිනිත්තු)',

                                'charged-per'               => [
                                    'guest'  => 'පැමිණවක්',
                                    'table'  => 'සාමාජිකය',
                                    'title'  => 'පිරිසැලසුම් කිරීමක්',
                                ],

                                'guest-capacity'            => 'පැමිණීමේ සීමාව',
                                'guest-limit'               => 'සාමාජික සඳහා පැමිණිය',
                                'prevent-scheduling-before' => 'පෙරදි වෙනස් කිරීම නොකළ',
                                'slot-duration'             => 'ස්ලොට් කාලය (මිනිත්තු)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'නැත',
                                    'title' => 'සියලු දින සඳහා එක ස්ලොට්',
                                    'yes'   => 'ඔව්',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'රැස්වීමේ ගමන් කිරීම',
                                'default'     => 'පෙරනිමි ගමන් කිරීම',
                                'event'       => 'සාමාන්‍ය ගමන් කිරීම',
                                'many'        => 'බොහෝ',
                                'one'         => 'එකම',
                                'rental'      => 'ක්රියාකාරී ගමන් කිරීම',
                                'table'       => 'වගාව කිරීම',
                                'title'       => 'වර්ගය',
                            ],

                            'title'                => 'බුකින් වර්ගය',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'බුකින්',
                ],

                'type' => [
                    'booking' => 'බුකින්',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'දිනය ගෙවීම්',
                    'booking-detailes' => 'දිනය තොරතුරු',
                    'canceled'         => 'අවලංගු කරන ලදි',
                    'closed'           => 'වසා ඇත',
                    'done'             => 'කළ යුතු',
                    'order-id'         => 'ඇණවුම් අංකය',
                    'pending'          => 'අක්‍රීය',
                    'price'            => 'මිල',
                    'status'           => 'ස්ත්‍රී/තත්ත්වය',
                    'time-slot'        => 'වේලාව:',
                    'view-details'     => 'විස්තර බලන්න',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'නිර්මාණය කළ දිනය',
                        'from'         => 'සිට',
                        'id'           => 'හැඳුනුම්පත් අංකය',
                        'order-id'     => 'ඇණවුම් අංකය',
                        'qty'          => 'ප්‍රමාණය',
                        'to'           => 'දක්වා',
                    ],

                    'title'    => 'ගිනුම් ප්‍රවේශ නිර්මාණය',
                ],

                'title' => 'ගිනුම් ප්‍රවේශ නිර්මාණය',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'වසා දමා ඇත',

                'cart'             => [
                    'booking-from' => 'ගිනුම් කිරීම දිනය',
                    'booking-till' => 'ගිනුම් කිරීම කැපවූ දිනය',
                    'daily'        => 'දෛනික පදනම',
                    'event-from'   => 'සිද්ධිය කිරීමේ දිනය',
                    'event-ticket' => 'සිද්ධිය ප්‍රවේශය',
                    'event-till'   => 'සිද්ධිය කැපවූ දිනය',
                    'hourly'       => 'පැය පදනම',

                    'integrity' => [
                        'event' => [
                            'expired' => 'මෙම සිඹිල්ලා ඉවත් වී ඇත.',
                        ],

                        'missing_options'        => 'මෙම නිෂ්පාදනය සඳහා විකල්ප නොමැත.',
                        'inventory_warning'      => 'අවශ්‍ය ප්‍රමාණය ලබා ගන්නා ලදි නොවේ, කරුණාකර පසුව නැවත උත්සහා කරන්න.',
                        'select_hourly_duration' => 'එක් පැයක් පැයකිරීම් දීමක් තෝරන්න.',
                    ],

                    'rent-from'    => 'විකිණීම කිරීම දිනය',
                    'rent-till'    => 'විකිණීම කැපවූ දිනය',
                    'rent-type'    => 'විකිණීම ක්‍රමය',
                    'renting_type' => 'විකිණීම ක්‍රමය',
                    'special-note' => 'විශේෂ ඉල්ලීම්/සටහන්',
                ],

                'per-ticket-price' => ':price ප්‍රවේශයට සාමාන්‍යයි',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'වසා දමා ඇත',
                            'today-availability' => 'අද ලබාදීම්',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'ඔබගේ ප්‍රවේශය නිර්මාණය කරන්න',
                        ],

                        'event-on'                 => 'සිද්ධිය',
                        'location'                 => 'ස්ථානය',

                        'rental'      => [
                            'choose-rent-option' => 'ක්ෂේත්‍රය තෝරන්න',
                            'daily-basis'        => 'දිනපතා මත',
                            'from'               => 'සිට',
                            'hourly-basis'       => 'පැය මත',
                            'rent-an-item'       => 'අයිතමය ක්ෂේත්‍රයට එක් කරන්න',
                            'select-date'        => 'දිනය තෝරන්න',
                            'select-rent-time'   => 'ක්ෂේත්‍ර කාලය තෝරන්න',
                            'select-slot'        => 'ස්ලොට් තෝරන්න',
                            'select-time-slot'   => 'Time Slot තෝරන්න',
                            'slot'               => 'ස්ලොට්',
                            'to'                 => 'දක්වා',
                        ],

                        'slot-duration-in-minutes' => ':minutes මිනිත්තු',
                        'slot-duration'            => 'ස්ලොට් කාලය',

                        'slots'       => [
                            'book-an-appointment' => 'ගිනුම් ලකුණු නිර්මාණය කරන්න',
                            'date'                => 'දිනය',
                            'no-slots-available'  => 'ලකුණු නොමැත',
                            'select-slot'         => 'ස්ලොට් තෝරන්න',
                            'title'               => 'ස්ලොට්',
                        ],

                        'table'       => [
                            'book-a-table'       => 'වගාව නිර්මාණය කරන්න',
                            'closed'             => 'වසා දමා ඇත',
                            'slots-for-all-days' => 'සියල්ල දින සඳහා පෙන්වන්න',
                            'special-notes'      => 'විශේෂ ඉල්ලීම්/සටහන්',
                            'today-availability' => 'අද ලබාදීම්',
                        ],

                        'view-on-map'              => 'මාප් දර්ශනය කරන්න',
                    ],
                ],
            ],
        ],
    ],
];
