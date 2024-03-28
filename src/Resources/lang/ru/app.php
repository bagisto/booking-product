<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Время перерыва между слотами (минуты)',
                            'slot-duration'          => 'Продолжительность слота (минуты)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Нет',
                                'title' => 'Тот же слот для всех дней',
                                'yes'   => 'Да',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'Добавить',
                            'break-duration'   => 'Время перерыва между слотами (минуты)',
                            'close'            => 'Закрыть',
                            'description'      => 'Информация о бронировании',
                            'description-info' => 'В соответствии со слотами будет создана и видна продолжительность времени.',
                            'edit'             => 'Изменить',
                            'many'             => 'Много бронирований на один день',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Добавить слоты',
                                    'close'      => 'Закрыть',
                                    'day'        => 'День',
                                    'edit-title' => 'Изменить слоты',
                                    'friday'     => 'Пятница',
                                    'from'       => 'От',
                                    'from-day'   => 'От дня',
                                    'from-time'  => 'От времени',
                                    'monday'     => 'Понедельник',
                                    'open'       => 'Открыть',
                                    'saturday'   => 'Суббота',
                                    'save'       => 'Сохранить',
                                    'select'     => 'Выбрать',
                                    'status'     => 'Статус',
                                    'sunday'     => 'Воскресенье',
                                    'thursday'   => 'Четверг',
                                    'to'         => 'До',
                                    'to-day'     => 'До дня',
                                    'to-time'    => 'До времени',
                                    'tuesday'    => 'Вторник',
                                    'wednesday'  => 'Среда',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'Одно бронирование на много дней',
                            'open'             => 'Открыть',
                            'slot-add'         => 'Добавить слоты',
                            'slot-title'       => 'Продолжительность времени слотов',
                            'slot-duration'    => 'Продолжительность слота (минуты)',
                            'title'            => 'По умолчанию',
                            'unavailable'      => 'недоступен',
                        ],

                        'event'       => [
                            'add'                => 'Добавить билеты',
                            'delete'             => 'Удалить',
                            'description-info'   => 'Нет доступных билетов.',
                            'description'        => 'Описание',
                            'edit'               => 'Изменить',

                            'modal'              => [
                                'edit' => 'Редактировать билеты',
                                'save' => 'Сохранить',
                            ],

                            'name'               => 'Название',
                            'price'              => 'Цена',
                            'qty'                => 'Количество',
                            'special-price-from' => 'Специальная цена с',
                            'special-price-to'   => 'Специальная цена по',
                            'special-price'      => 'Специальная цена',
                            'title'              => 'Билеты',
                            'valid-from'         => 'Действительно с',
                            'valid-until'        => 'Действительно по',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Добавить билеты',
                            ],

                            'slots'   => [
                                'add'         => 'Добавить слоты',
                                'description' => 'Доступные слоты с продолжительностью времени.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'И то, и другое (ежедневно и почасово)',
                            'daily-price'            => 'Ежедневная цена',
                            'daily'                  => 'Ежедневно',
                            'hourly-price'           => 'Почасовая цена',
                            'hourly'                 => 'Почасово',

                            'same-slot-for-all-days' => [
                                'no'    => 'Нет',
                                'title' => 'Тот же слот для всех дней',
                                'yes'   => 'Да',
                            ],

                            'title'                  => 'Тип аренды',
                        ],

                        'slots'       => [
                            'add'              => 'Добавить слоты',

                            'action'           => [
                                'add' => 'Добавить',
                            ],

                            'description-info' => 'В соответствии со слотами будет создана и видна продолжительность времени.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Пятница',
                                    'from'       => 'От',
                                    'monday'     => 'Понедельник',
                                    'saturday'   => 'Суббота',
                                    'sunday'     => 'Воскресенье',
                                    'thursday'   => 'Четверг',
                                    'to'         => 'До',
                                    'tuesday'    => 'Вторник',
                                    'wednesday'  => 'Среда',
                                ],
                            ],

                            'save'             => 'Сохранить',
                            'title'            => 'Продолжительность времени слотов',
                            'unavailable'      => 'Недоступно',
                        ],

                        'table'       => [
                            'break-duration'            => 'Время перерыва между слотами (минуты)',

                            'charged-per'               => [
                                'guest'  => 'Гость',
                                'table'  => 'Стол',
                                'title'  => 'Тарифицируется за',
                            ],

                            'guest-capacity'            => 'Вместимость гостей',
                            'guest-limit'               => 'Лимит гостей на столе',
                            'prevent-scheduling-before' => 'Запретить планирование до',
                            'slot-duration'             => 'Продолжительность слота (минуты)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'Нет',
                                'title' => 'Тот же слот для всех дней',
                                'yes'   => 'Да',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Доступно от',
                            'available-to'         => 'Доступно до',

                            'available-every-week' => [
                                'no'    => 'Нет',
                                'title' => 'Доступно каждую неделю',
                                'yes'   => 'Да',
                            ],

                            'location'             => 'Местоположение',
                            'qty'                  => 'Количество',

                            'type' => [
                                'appointment' => 'Бронирование встречи',
                                'default'     => 'Стандартное бронирование',
                                'event'       => 'Бронирование мероприятия',
                                'many'        => 'Много',
                                'one'         => 'Один',
                                'rental'      => 'Бронирование аренды',
                                'table'       => 'Бронирование стола',
                                'title'       => 'Тип',
                            ],

                            'title'                => 'Тип бронирования',
                        ],
                    ],
                ],

                'index'   => [
                    'booking' => 'Бронирование',
                ],

                'type'   => [
                    'booking' => 'Бронирование',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Дата бронирования',
                    'booking-detailes' => 'Детали бронирования',
                    'canceled'         => 'Отменено',
                    'closed'           => 'Закрыто',
                    'done'             => 'Выполнено',
                    'order-id'         => 'Идентификатор заказа',
                    'pending'          => 'В ожидании',
                    'price'            => 'Цена',
                    'status'           => 'Статус',
                    'time-slot'        => 'Временной слот:',
                    'view-details'     => 'Просмотреть детали',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Дата создания',
                        'from'         => 'От',
                        'id'           => 'ИД',
                        'order-id'     => 'Номер заказа',
                        'qty'          => 'Кол-во',
                        'to'           => 'До',
                    ],

                    'title' => 'Товары для бронирования',
                ],

                'title' => 'Товары для бронирования',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Закрыто',

                'cart'             => [
                    'booking-from' => 'Бронирование от',
                    'booking-till' => 'Бронирование до',
                    'daily'        => 'Ежедневно',
                    'event-from'   => 'Событие с',
                    'event-ticket' => 'Билет на событие',
                    'event-till'   => 'Событие до',
                    'hourly'       => 'Почасовая основа',

                    'integrity'    => [
                        'missing_options'        => 'Отсутствуют опции для этого продукта.',
                        'select_hourly_duration' => 'Выберите продолжительность слота в один час.',
                    ],

                    'rent-from'    => 'Аренда от',
                    'rent-till'    => 'Аренда до',
                    'rent-type'    => 'Тип аренды',
                    'renting_type' => 'Тип аренды',
                    'special-note' => 'Особые пожелания/заметки',
                ],

                'per-ticket-price' => ':price За билет',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'Событие на',
                        'location'                 => 'Местоположение',
                        'slot-duration-in-minutes' => ':minutes Минут',
                        'slot-duration'            => 'Продолжительность слота',
                        'view-on-map'              => 'Посмотреть на карте',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'Закрыто',
                        'today-availability' => 'Доступность сегодня',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'Забронируйте свой билет',
                    ],

                    'rental'      => [
                        'choose-rent-option' => 'Выберите вариант аренды',
                        'daily-basis'        => 'Ежедневно',
                        'from'               => 'От',
                        'hourly-basis'       => 'Почасовая оплата',
                        'rent-an-item'       => 'Арендовать предмет',
                        'select-date'        => 'Выбрать дату',
                        'select-rent-time'   => 'Выбрать время аренды',
                        'select-slot'        => 'Выбрать слот',
                        'select-time-slot'   => 'Выберите временной интервал',
                        'slot'               => 'Слот',
                        'to'                 => 'К',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'Записаться на прием',
                        'date'                => 'Дата',
                        'no-slots-available'  => 'Нет доступных слотов',
                        'select-slot'         => 'Выбрать слот',
                        'title'               => 'Слот',
                    ],

                    'table'       => [
                        'book-a-table'       => 'Забронировать стол',
                        'closed'             => 'Закрыто',
                        'slots-for-all-days' => 'Показать для всех дней',
                        'special-notes'      => 'Особые пожелания/заметки',
                        'today-availability' => 'Доступность сегодня',
                    ],
                ],
            ],
        ],
    ],
];
