<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'types'   => [
                        'booking' => [
                            'available-from'            => 'Доступно з',
                            'available-to'              => 'Доступно до',

                            'available-every-week'      => [
                                'no'    => 'Ні',
                                'title' => 'Доступно щотижня',
                                'yes'   => 'Так',
                            ],

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

                                'modal'            => [
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

                                'one'              => 'Один запис на багато днів',
                                'open'             => 'Відкрито',
                                'slot-add'         => 'Додати слоти',
                                'slot-duration'    => 'Тривалість слоту (хвилини)',
                                'slot-title'       => 'Тривалість слотів',
                                'title'            => 'За замовчуванням',
                                'unavailable'      => 'недоступний',
                            ],

                            'event'       => [
                                'add'                => 'Додати квитки',
                                'delete'             => 'Видалити',
                                'description'        => 'Опис',
                                'description-info'   => 'Немає доступних квитків.',
                                'edit'               => 'Редагувати',

                                'modal'              => [
                                    'edit' => 'Редагувати квитки',
                                    'save' => 'Зберегти',
                                ],

                                'name'               => 'Назва',
                                'price'              => 'Ціна',
                                'qty'                => 'Кількість',
                                'special-price'      => 'Спеціальна ціна',
                                'special-price-from' => 'Спеціальна ціна від',
                                'special-price-to'   => 'Спеціальна ціна до',
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

                            'location'                  => 'Місце розташування',
                            'qty'                       => 'Кількість',

                            'rental'      => [
                                'daily'                  => 'Щоденна основа',
                                'daily-hourly'           => 'Обидва (Щоденно та за годину)',
                                'daily-price'            => 'Ціна за день',
                                'hourly'                 => 'Годинна основа',
                                'hourly-price'           => 'Ціна за годину',

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

                            'type' => [
                                'appointment' => 'Бронювання зустрічі',
                                'default'     => 'Стандартне бронювання',
                                'event'       => 'Бронювання події',
                                'many'        => 'Багато',
                                'one'         => 'Один',
                                'rental'      => 'Бронювання оренди',
                                'table'       => 'Бронювання столу',
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

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Closed',

                'cart'             => [
                    'booking-from' => 'Booking From',
                    'booking-till' => 'Booking Till',
                    'daily'        => 'Щоденна основа',
                    'event-from'   => 'Event From',
                    'event-ticket' => 'Event Ticket',
                    'event-till'   => 'Event Till',
                    'hourly'       => 'Погодинна плата',

                    'integrity' => [
                        'event' => [
                            'expired' => 'Ця подія закінчилася.',
                        ],

                        'missing_options'        => 'Для цього продукту відсутні варіанти.',
                        'inventory_warning'      => 'Запитана кількість недоступна, будь ласка, спробуйте пізніше.',
                        'select_hourly_duration' => 'Виберіть тривалість слота одну годину.',
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
                        'appointment' => [
                            'closed'             => 'Closed',
                            'today-availability' => 'Today Availability',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Book Your Ticket',
                        ],

                        'event-on'                 => 'Event On',
                        'location'                 => 'Location',

                        'rental'      => [
                            'choose-rent-option' => 'Choose Rent Option',
                            'daily-basis'        => 'Daily Basis',
                            'from'               => 'From',
                            'hourly-basis'       => 'Hourly Basis',
                            'rent-an-item'       => 'Rent an Item',
                            'select-date'        => 'Select date',
                            'select-rent-time'   => 'Select Rent Time',
                            'select-slot'        => 'Select Slot',
                            'select-time-slot'   => 'Виберіть часовий інтервал',
                            'slot'               => 'Slot',
                            'to'                 => 'To',
                        ],

                        'slot-duration-in-minutes' => ':minutes Minutes',
                        'slot-duration'            => 'Slot Duration',

                        'slots'       => [
                            'book-an-appointment' => 'Book an Appointment',
                            'date'                => 'Date',
                            'no-slots-available'  => 'No slots available',
                            'select-slot'         => 'Select Slot',
                            'title'               => 'Slot',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Book a Table',
                            'closed'             => 'Closed',
                            'slots-for-all-days' => 'Show for all days',
                            'special-notes'      => 'Special Request/Notes',
                            'today-availability' => 'Today Availability',
                        ],

                        'view-on-map'              => 'View on Map',
                    ],
                ],
            ],
        ],
    ],
];
