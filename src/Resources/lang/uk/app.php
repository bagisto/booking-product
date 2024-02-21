<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Час перерви між слотами (хвилини)',
                            'slot-duration'          => 'Тривалість слоту (хвилини)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Ні',
                                'title' => 'Той самий слот на всі дні',
                                'yes'   => 'Так',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'Додати',
                            'break-duration'   => 'Час перерви між слотами (хвилини)',
                            'close'            => 'Закрити',
                            'description'      => 'Інформація про бронювання',
                            'description-info' => 'Згідно зі слотами буде створено і видно тривалість часу.',
                            'edit'             => 'Редагувати',
                            'many'             => 'Багато бронювань на один день',

                            'modal'          => [
                                'slot' => [
                                    'add-title'  => 'Додати Слоти',
                                    'close'      => 'Закрити',
                                    'day'        => 'День',
                                    'edit-title' => 'Редагувати Слоти',
                                    'friday'     => 'П\'ятниця',
                                    'from'       => 'З',
                                    'from-day'   => 'З Дня',
                                    'from-time'  => 'З Часу',
                                    'monday'     => 'Понеділок',
                                    'open'       => 'Відкрити',
                                    'saturday'   => 'Субота',
                                    'save'       => 'Зберегти',
                                    'select'     => 'Вибрати',
                                    'status'     => 'Статус',
                                    'sunday'     => 'Неділя',
                                    'thursday'   => 'Четвер',
                                    'to'         => 'До',
                                    'to-day'     => 'До Дня',
                                    'to-time'    => 'До Часу',
                                    'tuesday'    => 'Вівторок',
                                    'wednesday'  => 'Середа',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'            => 'Один запис на багато днів',
                            'open'           => 'Відкрито',
                            'slot-add'       => 'Додати слоти',
                            'slot-title'     => 'Тривалість слотів',
                            'slot-duration'  => 'Тривалість слоту (хвилини)',
                            'title'          => 'За замовчуванням',
                        ],

                        'event'       => [
                            'add'                => 'Додати квитки',
                            'delete'             => 'Видалити',
                            'description-info'   => 'Немає доступних квитків.',
                            'description'        => 'Опис',
                            'edit'               => 'Редагувати',

                            'modal'              => [
                                'save' => 'Зберегти',
                            ],

                            'name'               => 'Назва',
                            'price'              => 'Ціна',
                            'qty'                => 'Кількість',
                            'special-price-from' => 'Спеціальна ціна від',
                            'special-price-to'   => 'Спеціальна ціна до',
                            'special-price'      => 'Спеціальна ціна',
                            'title'              => 'Квитки',
                            'valid-from'         => 'Дійсно від',
                            'valid-until'        => 'Дійсно до',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Додати квитки',
                            ],

                            'slots'   => [
                                'add'         => 'Додати слоти',
                                'description' => 'Доступні слоти з часовою тривалістю.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'Обидва (Щоденно та за годину)',
                            'daily-price'            => 'Ціна за день',
                            'daily'                  => 'Щоденна основа',
                            'hourly-price'           => 'Ціна за годину',
                            'hourly'                 => 'Годинна основа',

                            'same-slot-for-all-days' => [
                                'no'    => 'Ні',
                                'title' => 'Той самий слот на всі дні',
                                'yes'   => 'Так',
                            ],

                            'title'                  => 'Тип оренди',
                        ],

                        'slots'       => [
                            'add'              => 'Додати слоти',

                            'action'           => [
                                'add' => 'Додати',
                            ],

                            'description-info' => 'Згідно зі слотами буде створено і видно тривалість часу.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'П\'ятниця',
                                    'from'       => 'З',
                                    'monday'     => 'Понеділок',
                                    'saturday'   => 'Субота',
                                    'sunday'     => 'Неділя',
                                    'thursday'   => 'Четвер',
                                    'to'         => 'До',
                                    'tuesday'    => 'Вівторок',
                                    'wednesday'  => 'Середа',
                                ],
                            ],

                            'save'             => 'Зберегти',
                            'title'            => 'Тривалість слотів',
                            'unavailable'      => 'Недоступно',
                        ],

                        'table'       => [
                            'break-duration'            => 'Час перерви між слотами (хвилини)',

                            'charged-per'               => [
                                'guest'  => 'Гість',
                                'table'  => 'Стіл',
                                'title'  => 'Заплачено за',
                            ],

                            'guest-capacity'            => 'Місткість гостей',
                            'guest-limit'               => 'Ліміт гостей на столі',
                            'prevent-scheduling-before' => 'Заборонити планування до',
                            'slot-duration'             => 'Тривалість слоту (хвилини)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'Ні',
                                'title' => 'Той самий слот на всі дні',
                                'yes'   => 'Так',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'            => 'Доступно з',
                            'available-to'              => 'Доступно до',

                            'available-every-week'      => [
                                'no'    => 'Ні',
                                'title' => 'Доступно щотижня',
                                'yes'   => 'Так',
                            ],

                            'location'                  => 'Місце розташування',
                            'qty'                       => 'Кількість',

                            'type'                      => [
                                'appointment' => 'Запис на прийом',
                                'default'     => 'За замовчуванням',
                                'event'       => 'Подія',
                                'many'        => 'Багато',
                                'one'         => 'Один',
                                'rental'      => 'Оренда',
                                'table'       => 'Стіл',
                                'title'       => 'Тип',
                            ],

                            'title'                     => 'Тип бронювання',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'Бронювання',
                ],

                'type' => [
                    'booking' => 'Бронювання',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Дата бронювання',
                    'booking-detailes' => 'Деталі бронювання',
                    'canceled'         => 'Скасовано',
                    'closed'           => 'Закрито',
                    'done'             => 'Виконано',
                    'order-id'         => 'Ідентифікатор замовлення',
                    'pending'          => 'Очікується',
                    'price'            => 'Ціна',
                    'status'           => 'Статус',
                    'time-slot'        => 'Часовий проміжок:',
                    'view-details'     => 'Переглянути деталі',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Дата створення',
                        'from'         => 'Від',
                        'id'           => 'ID',
                        'order-id'     => 'ID замовлення',
                        'qty'          => 'Кількість',
                        'to'           => 'До',
                    ],

                    'title'    => 'Продукт бронювань',
                ],

                'title' => 'Продукт бронювань',
            ],
        ],
    ],

    'component' => [
        'modal' => [
            'close' => 'Закрити',
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Closed',

                'cart'             => [
                    'booking-from' => 'Booking From',
                    'booking-till' => 'Booking Till',
                    'daily'        => 'Daily',
                    'event-from'   => 'Event From',
                    'event-ticket' => 'Event Ticket',
                    'event-till'   => 'Event Till',

                    'integrity'    => [
                        'missing_options'        => 'Options are missing for this product.',
                        'select_hourly_duration' => 'Select a slot duration of one hour.',
                    ],

                    'rent-from'    => 'Rent From',
                    'rent-till'    => 'Rent Till',
                    'rent-type'    => 'Rent Type',
                    'renting_type' => 'Rent Type',
                    'special-note' => 'Special Request/Notes',
                ],

                'per-ticket-price' => ':price Per Ticket',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'Event On',
                        'location'                 => 'Location',
                        'slot-duration-in-minutes' => ':minutes Minutes',
                        'slot-duration'            => 'Slot Duration',
                        'view-on-map'              => 'View on Map',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'Closed',
                        'today-availability' => 'Today Availability',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'Book Your Ticket',
                    ],

                    'rental'      => [
                        'choose-rent-option'       => 'Choose Rent Option',
                        'daily-basis'              => 'Daily Basis',
                        'from'                     => 'From',
                        'hourly-basis'             => 'Hourly Basis',
                        'rent-an-item'             => 'Rent an Item',
                        'select-date'              => 'Select date',
                        'select-rent-time'         => 'Select Rent Time',
                        'select-slot'              => 'Select Slot',
                        'slot'                     => 'Slot',
                        'to'                       => 'To',
                    ],

                    'slots'       => [
                        'book-an-appointment'       => 'Book an Appointment',
                        'date'                      => 'Date',
                        'no-slots-available'        => 'No slots available',
                        'title'                     => 'Slot',
                    ],

                    'table'       => [
                        'book-a-table'             => 'Book a Table',
                        'closed'                   => 'Closed',
                        'slots-for-all-days'       => 'Show for all days',
                        'special-notes'            => 'Special Request/Notes',
                        'today-availability'       => 'Today Availability',
                    ],
                ],
            ],
        ],
    ],
];
