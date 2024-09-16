<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => 'זמין מתאריך',
                            'available-to'         => 'זמין עד',

                            'available-every-week' => [
                                'no'    => 'לא',
                                'title' => 'זמין כל שבוע',
                                'yes'   => 'כן',
                            ],

                            'appointment' => [
                                'break-duration'         => 'זמן הפסק בין המקומות (דקות)',
                                'slot-duration'          => 'משך זמן המקום (דקות)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'לא',
                                    'title' => 'אותו מקום לכל הימים',
                                    'yes'   => 'כן',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'הוסף',
                                'break-duration'   => 'זמן הפסק בין המקומות (דקות)',
                                'close'            => 'סגור',
                                'description'      => 'מידע על ההזמנה',
                                'description-info' => 'על פי המקומות, ייצר זמן המקום שיהיה גלוי.',
                                'edit'             => 'ערוך',
                                'many'             => 'המון הזמנות ליום אחד',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'הוסף יחידות זמן',
                                        'close'      => 'סגור',
                                        'day'        => 'יום',
                                        'edit-title' => 'ערוך יחידות זמן',
                                        'friday'     => 'יום שישי',
                                        'from'       => 'מתאריך',
                                        'from-day'   => 'מיום',
                                        'from-time'  => 'משעה',
                                        'monday'     => 'יום שני',
                                        'open'       => 'פתח',
                                        'saturday'   => 'יום שבת',
                                        'save'       => 'שמור',
                                        'select'     => 'בחר',
                                        'status'     => 'סטטוס',
                                        'sunday'     => 'יום ראשון',
                                        'thursday'   => 'יום חמישי',
                                        'to'         => 'עד',
                                        'to-day'     => 'עד יום',
                                        'to-time'    => 'עד שעה',
                                        'tuesday'    => 'יום שלישי',
                                        'wednesday'  => 'יום רביעי',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'הזמנה אחת למספר ימים',
                                'open'             => 'פתח',
                                'slot-add'         => 'הוסף מקומות',
                                'slot-duration'    => 'משך זמן המקום (דקות)',
                                'slot-title'       => 'משך זמן המקומות',
                                'title'            => 'ברירת מחדל',
                                'unavailable'      => 'אינו זמין',
                            ],

                            'event'       => [
                                'add'                => 'הוסף כרטיסים',
                                'delete'             => 'מחק',
                                'description'        => 'תיאור',
                                'description-info'   => 'אין כרטיסים זמינים.',
                                'edit'               => 'ערוך',

                                'modal'              => [
                                    'edit' => 'ערוך כרטיסים',
                                    'save' => 'שמור',
                                ],

                                'name'               => 'שם',
                                'price'              => 'מחיר',
                                'qty'                => 'כמות',
                                'special-price'      => 'מחיר מיוחד',
                                'special-price-from' => 'מחיר מיוחד מ',
                                'special-price-to'   => 'מחיר מיוחד עד',
                                'title'              => 'כרטיסים',
                                'valid-from'         => 'בתוקף מ',
                                'valid-until'        => 'בתוקף עד',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'הוסף כרטיסים',
                                ],

                                'slots'   => [
                                    'add'         => 'הוסף מקומות',
                                    'description' => 'מקומות זמינים עם משך זמן.',
                                ],
                            ],

                            'location'             => 'מיקום',
                            'qty'                  => 'כמות',

                            'rental'      => [
                                'daily'                  => 'לפי יום',
                                'daily-hourly'           => 'שניים (יומי ושעתי)',
                                'daily-price'            => 'מחיר יומי',
                                'hourly'                 => 'לפי שעה',
                                'hourly-price'           => 'מחיר שעתי',

                                'same-slot-for-all-days' => [
                                    'no'    => 'לא',
                                    'title' => 'אותו מקום לכל הימים',
                                    'yes'   => 'כן',
                                ],

                                'title'                  => 'סוג השכרה',
                            ],

                            'slots'       => [
                                'add'              => 'הוסף מקומות',

                                'action'           => [
                                    'add' => 'הוסף',
                                ],

                                'description-info' => 'על פי המקומות, ייצר זמן המקום שיהיה גלוי.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'יום שישי',
                                        'from'       => 'מ',
                                        'monday'     => 'יום שני',
                                        'saturday'   => 'יום שבת',
                                        'sunday'     => 'יום ראשון',
                                        'thursday'   => 'יום חמישי',
                                        'to'         => 'עד',
                                        'tuesday'    => 'יום שלישי',
                                        'wednesday'  => 'יום רביעי',
                                    ],
                                ],

                                'save'             => 'שמור',
                                'title'            => 'משך זמן המקומות',
                                'unavailable'      => 'לא זמין',
                            ],

                            'table'       => [
                                'break-duration'            => 'זמן הפסק בין המקומות (דקות)',

                                'charged-per'               => [
                                    'guest'  => 'אורח',
                                    'table'  => 'שולחן',
                                    'title'  => 'חייב בכל',
                                ],

                                'guest-capacity'            => 'קיבולת אורחים',
                                'guest-limit'               => 'מגבלת אורחים לכל שולחן',
                                'prevent-scheduling-before' => 'מנע קביעת תור לפני',
                                'slot-duration'             => 'משך זמן המקום (דקות)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'לא',
                                    'title' => 'אותו מקום לכל הימים',
                                    'yes'   => 'כן',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'קביעת תור',
                                'default'     => 'הזמנת ברירת מחדל',
                                'event'       => 'הזמנת אירוע',
                                'many'        => 'מרובים',
                                'one'         => 'אחד',
                                'rental'      => 'הזמנת השכרה',
                                'table'       => 'הזמנת שולחן',
                                'title'       => 'סוג',
                            ],

                            'title'                => 'סוג ההזמנה',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'הזמנה',
                ],

                'type' => [
                    'booking' => 'הזמנה',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'תאריך ההזמנה',
                    'booking-detailes' => 'פרטי ההזמנה',
                    'canceled'         => 'בוטל',
                    'closed'           => 'סגור',
                    'done'             => 'בוצע',
                    'order-id'         => 'מספר הזמנה',
                    'pending'          => 'ממתין',
                    'price'            => 'מחיר',
                    'status'           => 'מצב',
                    'time-slot'        => 'תקופת זמן:',
                    'view-details'     => 'הצג פרטים',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'תאריך יצירה',
                        'from'         => 'מ',
                        'id'           => 'מספר זיהוי',
                        'order-id'     => 'מספר הזמנה',
                        'qty'          => 'כמות',
                        'to'           => 'ל',
                    ],

                    'title'    => 'מוצרי הזמנה',
                ],

                'title' => 'מוצרי הזמנה',
            ],
        ],
    ],

    'shop' => [
        'products' => [
            'booking' => [
                'closed'           => 'סגור',

                'cart'             => [
                    'booking-from' => 'הזמנה מתאריך',
                    'booking-till' => 'הזמנה עד',
                    'daily'        => 'בסיס יומי',
                    'event-from'   => 'אירוע מתאריך',
                    'event-ticket' => 'כרטיס לאירוע',
                    'event-till'   => 'אירוע עד',
                    'hourly'       => 'בסיס שעתי',

                    'integrity' => [
                        'event' => [
                            'expired' => 'האירוע הזה פג תוקפו.',
                        ],

                        'missing_options'        => 'אפשרויות חסרות למוצר זה.',
                        'inventory_warning'      => 'הכמות שנדרשת אינה זמינה, נסה שוב מאוחר יותר.',
                        'select_hourly_duration' => 'בחר משך שעתי של שעה אחת.',
                    ],

                    'rent-from'    => 'השכר מתאריך',
                    'rent-till'    => 'השכר עד',
                    'rent-type'    => 'סוג השכרה',
                    'renting_type' => 'סוג השכרה',
                    'special-note' => 'בקשות מיוחדות/הערות',
                ],

                'per-ticket-price' => ':price לכרטיס',
            ],

            'view'    => [
                'types' => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'סגור',
                            'today-availability' => 'זמינות היום',
                        ],

                        'event' => [
                            'book-your-ticket' => 'הזמן כרטיס',
                        ],

                        'event-on'                 => 'אירוע בתאריך',
                        'location'                 => 'מיקום',

                        'rental' => [
                            'choose-rent-option' => 'בחר אפשרות השכרה',
                            'daily-basis'        => 'על בסיס יומי',
                            'from'               => 'מתאריך',
                            'hourly-basis'       => 'על בסיס שעתי',
                            'rent-an-item'       => 'השכר פריט',
                            'select-date'        => 'בחר תאריך',
                            'select-rent-time'   => 'בחר זמן השכרה',
                            'select-slot'        => 'בחר מקטע',
                            'select-time-slot'   => 'בחר משבצת זמן',
                            'slot'               => 'מקטע',
                            'to'                 => 'עד',
                        ],

                        'slot-duration-in-minutes' => ':minutes דקות',
                        'slot-duration'            => 'משך המקטע',

                        'slots' => [
                            'book-an-appointment' => 'קבע פגישה',
                            'date'                => 'תאריך',
                            'no-slots-available'  => 'אין מקטעים זמינים',
                            'select-slot'         => 'בחר מקטע',
                            'title'               => 'מקטע',
                        ],

                        'table' => [
                            'book-a-table'       => 'הזמן שולחן',
                            'closed'             => 'סגור',
                            'slots-for-all-days' => 'הצג לכל הימים',
                            'special-notes'      => 'בקשות מיוחדות/הערות',
                            'today-availability' => 'זמינות היום',
                        ],

                        'view-on-map'              => 'צפה במפה',
                    ],
                ],
            ],
        ],
    ],
];
