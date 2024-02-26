<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'স্লট মধ্যে বিরতির সময় (মিনিট)',
                            'slot-duration'          => 'স্লট সময়কাল (মিনিট)',

                            'same-slot-for-all-days' => [
                                'no'    => 'না',
                                'title' => 'সব দিনের জন্য একই স্লট',
                                'yes'   => 'হ্যাঁ',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'যোগ করুন',
                            'break-duration'   => 'স্লট মধ্যে বিরতির সময় (মিনিট)',
                            'close'            => 'বন্ধ',
                            'description'      => 'বুকিং তথ্য',
                            'description-info' => 'স্লটগুলির ভিত্তিতে সময়কাল তৈরি হবে এবং দৃষ্টিগোচ্ছ হবে।',
                            'edit'             => 'সম্পাদনা',
                            'many'             => 'এক দিনের জন্য অনেক বুকিং',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'স্লট যোগ করুন',
                                    'close'      => 'বন্ধ',
                                    'day'        => 'দিন',
                                    'edit-title' => 'স্লট সম্পাদনা করুন',
                                    'friday'     => 'শুক্রবার',
                                    'from'       => 'হতে',
                                    'from-day'   => 'থেকে দিন',
                                    'from-time'  => 'থেকে সময়',
                                    'monday'     => 'সোমবার',
                                    'open'       => 'খোলা',
                                    'saturday'   => 'শনিবার',
                                    'save'       => 'সংরক্ষণ করুন',
                                    'select'     => 'নির্বাচন করুন',
                                    'status'     => 'অবস্থা',
                                    'sunday'     => 'রবিবার',
                                    'thursday'   => 'বৃহস্পতিবার',
                                    'to'         => 'প্রতি',
                                    'to-day'     => 'প্রতি দিন',
                                    'to-time'    => 'প্রতি সময়',
                                    'tuesday'    => 'মঙ্গলবার',
                                    'wednesday'  => 'বুধবার',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'একটি দিনের জন্য একটি বুকিং',
                            'open'             => 'খোলা',
                            'slot-add'         => 'স্লট যোগ করুন',
                            'slot-title'       => 'স্লটের সময় দৈর্ঘ্য',
                            'slot-duration'    => 'স্লট সময়কাল (মিনিট)',
                            'title'            => 'ডিফল্ট',
                        ],

                        'event'       => [
                            'add'                => 'টিকেট যোগ করুন',
                            'delete'             => 'মুছে ফেলুন',
                            'description-info'   => 'কোনও টিকেট পাওয়া যায়নি।',
                            'description'        => 'বর্ণনা',
                            'edit'               => 'সম্পাদনা',

                            'modal'              => [
                                'save' => 'সংরক্ষণ করুন',
                            ],

                            'name'               => 'নাম',
                            'price'              => 'মূল্য',
                            'qty'                => 'পরিমাণ',
                            'special-price-from' => 'বিশেষ মূল্য থেকে',
                            'special-price-to'   => 'বিশেষ মূল্য পর্যন্ত',
                            'special-price'      => 'বিশেষ মূল্য',
                            'title'              => 'টিকেটগুলি',
                            'valid-from'         => 'বৈধ হবে হবে',
                            'valid-until'        => 'বৈধ থাকবে',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'টিকেট যোগ করুন',
                            ],

                            'slots'   => [
                                'add'         => 'স্লট যোগ করুন',
                                'description' => 'সময় দৈর্ঘ্যের সাথে উপলব্ধ স্লটগুলি।',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'দৈনিক এবং প্রতি ঘণ্টা উভয় (Both)',
                            'daily-price'            => 'দৈনিক মূল্য',
                            'daily'                  => 'দৈনিক ভিত্তিতে',
                            'hourly-price'           => 'প্রতি ঘণ্টা মূল্য',
                            'hourly'                 => 'প্রতি ঘণ্টা ভিত্তিতে',

                            'same-slot-for-all-days' => [
                                'no'    => 'না',
                                'title' => 'সব দিনের জন্য একই স্লট',
                                'yes'   => 'হ্যাঁ',
                            ],

                            'title'                  => 'রেন্টিং প্রকার',
                        ],

                        'slots'       => [
                            'add'              => 'স্লট যোগ করুন',

                            'action'           => [
                                'add' => 'যোগ করুন',
                            ],

                            'description-info' => 'স্লটগুলির ভিত্তিতে সময়কাল তৈরি হবে এবং দৃষ্টিগোচ্ছ হবে।',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'শুক্রবার',
                                    'from'       => 'থেকে',
                                    'monday'     => 'সোমবার',
                                    'saturday'   => 'শনিবার',
                                    'sunday'     => 'রবিবার',
                                    'thursday'   => 'বৃহস্পতিবার',
                                    'to'         => 'প্রতি',
                                    'tuesday'    => 'মঙ্গলবার',
                                    'wednesday'  => 'বুধবার',
                                ],
                            ],

                            'save'             => 'সংরক্ষণ করুন',
                            'title'            => 'স্লটের সময় দৈর্ঘ্য',
                            'unavailable'      => 'অপ্রাপ্য',
                        ],

                        'table'       => [
                            'break-duration'            => 'স্লট মধ্যে বিরতির সময় (মিনিট)',

                            'charged-per'               => [
                                'guest'  => 'অতিথি',
                                'table'  => 'টেবিল',
                                'title'  => 'প্রতি মুল্য',
                            ],

                            'guest-capacity'            => 'অতিথি ধারণক্ষমতা',
                            'guest-limit'               => 'টেবিল প্রতি অতিথি সীমা',
                            'prevent-scheduling-before' => 'পূর্বে নির্ধারিত করা অনুমোদিত নয়',
                            'slot-duration'             => 'স্লট সময়কাল (মিনিট)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'না',
                                'title' => 'সব দিনের জন্য একই স্লট',
                                'yes'   => 'হ্যাঁ',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'থেকে উপলব্ধ',
                            'available-to'         => 'পর্যন্ত উপলব্ধ',

                            'available-every-week' => [
                                'no'    => 'না',
                                'title' => 'প্রতি সপ্তাহে উপলব্ধ',
                                'yes'   => 'হ্যাঁ',
                            ],

                            'location'             => 'লোকেশন',
                            'qty'                  => 'পরিমাণ',

                            'type'                 => [
                                'appointment' => 'অ্যাপয়েন্টমেন্ট',
                                'default'     => 'ডিফল্ট',
                                'event'       => 'ইভেন্ট',
                                'many'        => 'বহু',
                                'one'         => 'এক',
                                'rental'      => 'ভাড়া',
                                'table'       => 'টেবিল',
                                'title'       => 'ধরণ',
                            ],

                            'title'                => 'বুকিং প্রকার',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'বুকিং',
                ],

                'type' => [
                    'booking' => 'বুকিং',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'বুকিং তারিখ',
                    'booking-detailes' => 'বুকিং বিবরণ',
                    'canceled'         => 'বাতিল করা হয়েছে',
                    'closed'           => 'বন্ধ',
                    'done'             => 'সম্পন্ন',
                    'order-id'         => 'অর্ডার আইডি',
                    'pending'          => 'মুলতুবি',
                    'price'            => 'মূল্য',
                    'status'           => 'অবস্থা',
                    'time-slot'        => 'সময় স্লট:',
                    'view-details'     => 'বিস্তারিত দেখুন',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'তৈরির তারিখ',
                        'from'         => 'থেকে',
                        'id'           => 'আইডি',
                        'order-id'     => 'অর্ডার আইডি',
                        'qty'          => 'পরিমাণ',
                        'to'           => 'পর্যন্ত',
                    ],

                    'title'    => 'বুকিং প্রোডাক্ট',
                ],

                'title' => 'বুকিং প্রোডাক্ট',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed' => 'বন্ধ',

                'cart' => [
                    'booking-from' => 'থেকে বুকিং',
                    'booking-till' => 'পর্যন্ত বুকিং',
                    'daily'        => 'দৈনিক',
                    'event-from'   => 'ইভেন্ট থেকে',
                    'event-ticket' => 'ইভেন্ট টিকিট',
                    'event-till'   => 'ইভেন্ট পর্যন্ত',

                    'integrity'    => [
                        'missing_options'        => 'এই পণ্যের জন্য অপশন অনুপস্থিত।',
                        'select_hourly_duration' => 'এক ঘন্টা মেয়াদের স্লট নির্বাচন করুন।',
                    ],

                    'rent-from'    => 'থেকে ভাড়া',
                    'rent-till'    => 'পর্যন্ত ভাড়া',
                    'rent-type'    => 'ভাড়ার ধরণ',
                    'renting_type' => 'ভাড়ার ধরণ',
                    'special-note' => 'বিশেষ অনুরোধ/নোট',
                ],

                'per-ticket-price' => ':price প্রতি টিকিট',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'ইভেন্ট অন',
                        'location'                 => 'লোকেশন',
                        'slot-duration-in-minutes' => ':minutes মিনিট',
                        'slot-duration'            => 'স্লট সময়কাল',
                        'view-on-map'              => 'মানচিত্রে দেখুন',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'বন্ধ',
                        'today-availability' => 'আজকের উপলব্ধতা',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'আপনার টিকিট বুক করুন',
                    ],

                    'rental'      => [
                        'choose-rent-option'       => 'ভাড়ার অপশন নির্বাচন করুন',
                        'daily-basis'              => 'দৈনিক ভিত্তিতে',
                        'from'                     => 'থেকে',
                        'hourly-basis'             => 'প্রতি ঘন্টায়',
                        'rent-an-item'             => 'একটি আইটেম ভাড়া নিন',
                        'select-date'              => 'তারিখ নির্বাচন করুন',
                        'select-rent-time'         => 'ভাড়ার সময় নির্বাচন করুন',
                        'select-slot'              => 'স্লট নির্বাচন করুন',
                        'slot'                     => 'স্লট',
                        'to'                       => 'পর্যন্ত',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'একটি অ্যাপয়েন্টমেন্ট বুক করুন',
                        'date'                => 'তারিখ',
                        'no-slots-available'  => 'কোনও স্লট উপলব্ধ নেই',
                        'title'               => 'স্লট',
                    ],

                    'table'       => [
                        'book-a-table'       => 'একটি টেবিল বুক করুন',
                        'closed'             => 'বন্ধ',
                        'slots-for-all-days' => 'সমস্ত দিনের জন্য দেখান',
                        'special-notes'      => 'বিশেষ অনুরোধ/নোট',
                        'today-availability' => 'আজকের উপলব্ধতা',
                    ],
                ],
            ],
        ],
    ],
];
