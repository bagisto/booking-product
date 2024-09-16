<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => 'متاح من',
                            'available-to'         => 'متاح إلى',

                            'available-every-week' => [
                                'no'    => 'لا',
                                'title' => 'متاح كل أسبوع',
                                'yes'   => 'نعم',
                            ],

                            'appointment' => [
                                'break-duration'         => 'وقت الراحة بين الفترات (دقائق)',
                                'slot-duration'          => 'مدة الفترة (دقائق)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'لا',
                                    'title' => 'نفس الفترة لجميع الأيام',
                                    'yes'   => 'نعم',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'إضافة',
                                'break-duration'   => 'وقت الراحة بين الفترات (دقائق)',
                                'close'            => 'إغلاق',
                                'description'      => 'معلومات الحجز',
                                'description-info' => 'وفقًا للفترات، سيتم إنشاء مدة الزمن ويمكن رؤيتها.',
                                'edit'             => 'تعديل',
                                'many'             => 'العديد من الحجوزات ليوم واحد',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'إضافة فتحة',
                                        'close'      => 'إغلاق',
                                        'day'        => 'اليوم',
                                        'edit-title' => 'تعديل الفتحات',
                                        'friday'     => 'الجمعة',
                                        'from'       => 'من',
                                        'from-day'   => 'من اليوم',
                                        'from-time'  => 'من الوقت',
                                        'monday'     => 'الإثنين',
                                        'open'       => 'فتح',
                                        'saturday'   => 'السبت',
                                        'save'       => 'حفظ',
                                        'select'     => 'اختيار',
                                        'status'     => 'الحالة',
                                        'sunday'     => 'الأحد',
                                        'thursday'   => 'الخميس',
                                        'to'         => 'إلى',
                                        'to-day'     => 'إلى اليوم',
                                        'to-time'    => 'إلى الوقت',
                                        'tuesday'    => 'الثلاثاء',
                                        'wednesday'  => 'الأربعاء',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'حجز واحد لعدة أيام',
                                'open'             => 'فتح',
                                'slot-add'         => 'إضافة فترات',
                                'slot-duration'    => 'مدة الفترة (دقائق)',
                                'slot-title'       => 'مدة زمنية للفترات',
                                'title'            => 'افتراضي',
                                'unavailable'      => 'غير متوفره',
                            ],

                            'event'       => [
                                'add'                => 'إضافة تذاكر',
                                'delete'             => 'حذف',
                                'description'        => 'الوصف',
                                'description-info'   => 'لا تتوفر تذاكر.',
                                'edit'               => 'تعديل',

                                'modal'              => [
                                    'edit' => 'تحرير التذاكر',
                                    'save' => 'حفظ',
                                ],

                                'name'               => 'الاسم',
                                'price'              => 'السعر',
                                'qty'                => 'الكمية',
                                'special-price'      => 'السعر الخاص',
                                'special-price-from' => 'السعر الخاص من',
                                'special-price-to'   => 'السعر الخاص إلى',
                                'title'              => 'التذاكر',
                                'valid-from'         => 'صالح من',
                                'valid-until'        => 'صالح حتى',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'إضافة تذاكر',
                                ],

                                'slots'   => [
                                    'add'         => 'إضافة فترات',
                                    'description' => 'الفترات المتاحة مع مدة زمنية.',
                                ],
                            ],

                            'location'             => 'الموقع',
                            'qty'                  => 'الكمية',

                            'rental'      => [
                                'daily'                  => 'يومي',
                                'daily-hourly'           => 'كليهما (يومي وساعي)',
                                'daily-price'            => 'السعر اليومي',
                                'hourly'                 => 'ساعي',
                                'hourly-price'           => 'السعر الساعي',

                                'same-slot-for-all-days' => [
                                    'no'    => 'لا',
                                    'title' => 'نفس الفترة لجميع الأيام',
                                    'yes'   => 'نعم',
                                ],

                                'title'                  => 'نوع الإيجار',
                            ],

                            'slots'       => [
                                'add'              => 'إضافة فترات',

                                'action'           => [
                                    'add' => 'إضافة',
                                ],

                                'description-info' => 'وفقًا للفترات، سيتم إنشاء مدة الزمن ويمكن رؤيتها.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'الجمعة',
                                        'from'       => 'من',
                                        'monday'     => 'الاثنين',
                                        'saturday'   => 'السبت',
                                        'sunday'     => 'الأحد',
                                        'thursday'   => 'الخميس',
                                        'to'         => 'إلى',
                                        'tuesday'    => 'الثلاثاء',
                                        'wednesday'  => 'الأربعاء',
                                    ],
                                ],

                                'save'             => 'حفظ',
                                'title'            => 'مدة زمنية للفترات',
                                'unavailable'      => 'غير متاح',
                            ],

                            'table'       => [
                                'break-duration'            => 'وقت الراحة بين الفترات (دقائق)',

                                'charged-per'               => [
                                    'guest'  => 'الزائر',
                                    'table'  => 'المقاعد',
                                    'title'  => 'يتم التحقيق من',
                                ],

                                'guest-capacity'            => 'سعة الزائر',
                                'guest-limit'               => 'الحد المسموح بالزائر لكل مقاعد',
                                'prevent-scheduling-before' => 'منع الجدولة قبل',
                                'slot-duration'             => 'مدة الفترة (دقائق)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'لا',
                                    'title' => 'نفس الفترة لجميع الأيام',
                                    'yes'   => 'نعم',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'حجز موعد',
                                'default'     => 'حجز افتراضي',
                                'event'       => 'حجز حدث',
                                'many'        => 'عدة',
                                'one'         => 'واحد',
                                'rental'      => 'حجز تأجير',
                                'table'       => 'حجز طاولة',
                                'title'       => 'النوع',
                            ],

                            'title'                => 'نوع الحجز',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'الحجز',
                ],

                'type' => [
                    'booking' => 'الحجز',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'تاريخ الحجز',
                    'booking-detailes' => 'تفاصيل الحجز',
                    'canceled'         => 'ملغاة',
                    'closed'           => 'مغلقة',
                    'done'             => 'منتهي',
                    'order-id'         => 'رقم الطلب',
                    'pending'          => 'قيد الانتظار',
                    'price'            => 'السعر',
                    'status'           => 'الحالة',
                    'time-slot'        => 'فترة زمنية:',
                    'view-details'     => 'عرض التفاصيل',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'تاريخ الإنشاء',
                        'from'         => 'من',
                        'id'           => 'الرقم',
                        'order-id'     => 'رقم الطلب',
                        'qty'          => 'الكمية',
                        'to'           => 'إلى',
                    ],

                    'title'    => 'منتجات الحجوزات',
                ],

                'title' => 'منتجات الحجوزات',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed' => 'مغلق',

                'cart'   => [
                    'booking-from' => 'الحجز من تاريخ',
                    'booking-till' => 'الحجز حتى تاريخ',
                    'daily'        => 'أساس يومي',
                    'event-from'   => 'بداية الحدث',
                    'event-ticket' => 'تذكرة الحدث',
                    'event-till'   => 'نهاية الحدث',
                    'hourly'       => 'بالساعة',

                    'integrity' => [
                        'event'                  => [
                            'expired' => 'انتهت هذه الفعالية.',
                        ],

                        'missing_options'        => 'الخيارات مفقودة لهذا المنتج.',
                        'inventory_warning'      => 'الكمية المطلوبة غير متوفرة، يرجى المحاولة مرة أخرى في وقت لاحق.',
                        'select_hourly_duration' => 'اختر مدة فترة زمنية ساعة واحدة.',
                    ],

                    'rent-from'    => 'الإيجار من تاريخ',
                    'rent-till'    => 'الإيجار حتى تاريخ',
                    'rent-type'    => 'نوع الإيجار',
                    'renting_type' => 'نوع الإيجار',
                    'special-note' => 'طلب/ملاحظات خاصة',
                ],

                'per-ticket-price' => ':price لكل تذكرة',
            ],

            'view'    => [
                'types' => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'مغلق',
                            'today-availability' => 'التوافر اليوم',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'احجز تذكرتك',
                        ],

                        'event-on'                 => 'الحدث في',
                        'location'                 => 'الموقع',

                        'rental'      => [
                            'choose-rent-option' => 'اختر خيار الإيجار',
                            'daily-basis'        => 'على أساس يومي',
                            'from'               => 'من',
                            'hourly-basis'       => 'على أساس ساعي',
                            'rent-an-item'       => 'استأجر عنصرًا',
                            'select-date'        => 'اختر التاريخ',
                            'select-rent-time'   => 'حدد وقت الإيجار',
                            'select-slot'        => 'اختر الفترة',
                            'select-time-slot'   => 'حدد فتحة زمنية',
                            'slot'               => 'فترة',
                            'to'                 => 'إلى',
                        ],

                        'slot-duration-in-minutes' => ':minutes دقائق',
                        'slot-duration'            => 'مدة الفترة',

                        'slots'       => [
                            'book-an-appointment' => 'احجز موعدًا',
                            'date'                => 'التاريخ',
                            'no-slots-available'  => 'لا توجد فترات متاحة',
                            'select-slot'         => 'اختر الفترة',
                            'title'               => 'الفترة',
                        ],

                        'table'       => [
                            'book-a-table'       => 'احجز طاولة',
                            'closed'             => 'مغلق',
                            'slots-for-all-days' => 'عرض لكل الأيام',
                            'special-notes'      => 'طلبات/ملاحظات خاصة',
                            'today-availability' => 'التوافر اليوم',
                        ],

                        'view-on-map'              => 'عرض على الخريطة',
                    ],
                ],
            ],
        ],
    ],
];
