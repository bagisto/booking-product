<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Dostępne od',
                            'available-to'         => 'Dostępne do',

                            'available-every-week' => [
                                'no'    => 'Nie',
                                'title' => 'Dostępne każdego tygodnia',
                                'yes'   => 'Tak',
                            ],

                            'appointment' => [
                                'break-duration'         => 'Czas przerwy między slotami (minuty)',
                                'slot-duration'          => 'Czas trwania slotu (minuty)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'Nie',
                                    'title' => 'Ten sam slot dla wszystkich dni',
                                    'yes'   => 'Tak',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'Dodaj',
                                'break-duration'   => 'Czas przerwy między slotami (minuty)',
                                'close'            => 'Zamknij',
                                'description'      => 'Informacje o rezerwacji',
                                'description-info' => 'Zgodnie ze slotami zostanie utworzony i widoczny czas trwania.',
                                'edit'             => 'Edytuj',
                                'many'             => 'Wiele rezerwacji na jeden dzień',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'Dodaj Sloty',
                                        'close'      => 'Zamknij',
                                        'day'        => 'Dzień',
                                        'edit-title' => 'Edytuj Sloty',
                                        'friday'     => 'Piątek',
                                        'from'       => 'Od',
                                        'from-day'   => 'Od Dnia',
                                        'from-time'  => 'Od Godziny',
                                        'monday'     => 'Poniedziałek',
                                        'open'       => 'Otwórz',
                                        'saturday'   => 'Sobota',
                                        'save'       => 'Zapisz',
                                        'select'     => 'Wybierz',
                                        'status'     => 'Status',
                                        'sunday'     => 'Niedziela',
                                        'thursday'   => 'Czwartek',
                                        'to'         => 'Do',
                                        'to-day'     => 'Do Dnia',
                                        'to-time'    => 'Do Godziny',
                                        'tuesday'    => 'Wtorek',
                                        'wednesday'  => 'Środa',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'Jedna rezerwacja na wiele dni',
                                'open'             => 'Otwórz',
                                'slot-add'         => 'Dodaj sloty',
                                'slot-duration'    => 'Czas trwania slotu (minuty)',
                                'slot-title'       => 'Czas trwania slotów',
                                'title'            => 'Domyślne',
                                'unavailable'      => 'niedostępne',
                            ],

                            'event'       => [
                                'add'                => 'Dodaj bilety',
                                'delete'             => 'Usuń',
                                'description'        => 'Opis',
                                'description-info'   => 'Brak dostępnych biletów.',
                                'edit'               => 'Edytuj',

                                'modal'              => [
                                    'edit' => 'Edytuj bilety',
                                    'save' => 'Zapisz',
                                ],

                                'name'               => 'Nazwa',
                                'price'              => 'Cena',
                                'qty'                => 'Ilość',
                                'special-price'      => 'Specjalna cena',
                                'special-price-from' => 'Specjalna cena od',
                                'special-price-to'   => 'Specjalna cena do',
                                'title'              => 'Bilety',
                                'valid-from'         => 'Ważne od',
                                'valid-until'        => 'Ważne do',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'Dodaj bilety',
                                ],

                                'slots'   => [
                                    'add'         => 'Dodaj sloty',
                                    'description' => 'Dostępne sloty z okresem czasowym.',
                                ],
                            ],

                            'location'             => 'Lokalizacja',
                            'qty'                  => 'Ilość',

                            'rental'      => [
                                'daily'                  => 'Na podstawie dnia',
                                'daily-hourly'           => 'Obydwa (dziennie i godzinowo)',
                                'daily-price'            => 'Cena dzienna',
                                'hourly'                 => 'Na podstawie godziny',
                                'hourly-price'           => 'Cena za godzinę',

                                'same-slot-for-all-days' => [
                                    'no'    => 'Nie',
                                    'title' => 'Ten sam slot dla wszystkich dni',
                                    'yes'   => 'Tak',
                                ],

                                'title'                  => 'Rodzaj wynajmu',
                            ],

                            'slots'       => [
                                'add'              => 'Dodaj sloty',

                                'action'           => [
                                    'add' => 'Dodaj',
                                ],

                                'description-info' => 'Zgodnie ze slotami zostanie utworzony i widoczny czas trwania.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'Piątek',
                                        'from'       => 'Od',
                                        'monday'     => 'Poniedziałek',
                                        'saturday'   => 'Sobota',
                                        'sunday'     => 'Niedziela',
                                        'thursday'   => 'Czwartek',
                                        'to'         => 'Do',
                                        'tuesday'    => 'Wtorek',
                                        'wednesday'  => 'Środa',
                                    ],
                                ],

                                'save'             => 'Zapisz',
                                'title'            => 'Czas trwania slotów',
                                'unavailable'      => 'Niedostępne',
                            ],

                            'table'       => [
                                'break-duration'            => 'Czas przerwy między slotami (minuty)',

                                'charged-per'               => [
                                    'guest'  => 'Gość',
                                    'table'  => 'Stół',
                                    'title'  => 'Obciążone za',
                                ],

                                'guest-capacity'            => 'Pojemność gości',
                                'guest-limit'               => 'Limit gości na stolik',
                                'prevent-scheduling-before' => 'Zapobiegaj planowaniu przed',
                                'slot-duration'             => 'Czas trwania slotu (minuty)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'Nie',
                                    'title' => 'Ten sam slot dla wszystkich dni',
                                    'yes'   => 'Tak',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'Rezerwacja spotkania',
                                'default'     => 'Domyślna rezerwacja',
                                'event'       => 'Rezerwacja wydarzenia',
                                'many'        => 'Wiele',
                                'one'         => 'Jeden',
                                'rental'      => 'Rezerwacja wynajmu',
                                'table'       => 'Rezerwacja stołu',
                                'title'       => 'Typ',
                            ],

                            'title'                => 'Typ rezerwacji',
                        ],
                    ],
                ],

                'index'   => [
                    'booking' => 'Rezerwacja',
                ],

                'type'   => [
                    'booking' => 'Rezerwacja',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Data rezerwacji',
                    'booking-detailes' => 'Szczegóły rezerwacji',
                    'canceled'         => 'Anulowane',
                    'closed'           => 'Zamknięte',
                    'done'             => 'Zrobione',
                    'order-id'         => 'Identyfikator zamówienia',
                    'pending'          => 'Oczekujące',
                    'price'            => 'Cena',
                    'status'           => 'Status',
                    'time-slot'        => 'Okienko czasowe:',
                    'view-details'     => 'Pokaż szczegóły',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Data utworzenia',
                        'from'         => 'Od',
                        'id'           => 'ID',
                        'order-id'     => 'ID zamówienia',
                        'qty'          => 'Ilość',
                        'to'           => 'Do',
                    ],

                    'title'    => 'Produkt rezerwacji',
                ],

                'title' => 'Produkt rezerwacji',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Zamknięte',

                'cart'             => [
                    'booking-from' => 'Rezerwacja Od',
                    'booking-till' => 'Rezerwacja Do',
                    'daily'        => 'Podstawa dzienna',
                    'event-from'   => 'Wydarzenie Od',
                    'event-ticket' => 'Bilet na Wydarzenie',
                    'event-till'   => 'Wydarzenie Do',
                    'hourly'       => 'Co godzinę',

                    'integrity' => [
                        'event' => [
                            'expired' => 'To wydarzenie wygasło.',
                        ],

                        'missing_options'        => 'Brak opcji dla tego produktu.',
                        'inventory_warning'      => 'Żądana ilość nie jest dostępna, spróbuj ponownie później.',
                        'select_hourly_duration' => 'Wybierz slot o długości jednej godziny.',
                    ],

                    'rent-from'    => 'Wynajem Od',
                    'rent-till'    => 'Wynajem Do',
                    'rent-type'    => 'Typ Wynajmu',
                    'renting_type' => 'Typ Wynajmu',
                    'special-note' => 'Specjalne Życzenia/Uwagi',
                ],

                'per-ticket-price' => ':price Za Bilet',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'Zamknięte',
                            'today-availability' => 'Dostępność Dzisiaj',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Zarezerwuj Swój Bilet',
                        ],

                        'event-on'                 => 'Wydarzenie Na',
                        'location'                 => 'Lokalizacja',

                        'rental'      => [
                            'choose-rent-option' => 'Wybierz Opcję Wynajmu',
                            'daily-basis'        => 'Podstawowa Dzienna',
                            'from'               => 'Od',
                            'hourly-basis'       => 'Podstawowa Godzinowa',
                            'rent-an-item'       => 'Wynajmij przedmiot',
                            'select-date'        => 'Wybierz datę',
                            'select-rent-time'   => 'Wybierz Czas Wynajmu',
                            'select-slot'        => 'Wybierz Slot',
                            'select-time-slot'   => 'Wybierz Przedział czasowy',
                            'slot'               => 'Slot',
                            'to'                 => 'Do',
                        ],

                        'slot-duration-in-minutes' => ':minutes Minut',
                        'slot-duration'            => 'Czas Trwania Slotu',

                        'slots'       => [
                            'book-an-appointment' => 'Zarezerwuj Spotkanie',
                            'date'                => 'Data',
                            'no-slots-available'  => 'Brak dostępnych slotów',
                            'select-slot'         => 'Wybierz Slot',
                            'title'               => 'Sloty',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Zarezerwuj Stolik',
                            'closed'             => 'Zamknięte',
                            'slots-for-all-days' => 'Pokaż dla wszystkich dni',
                            'special-notes'      => 'Specjalne Życzenia/Uwagi',
                            'today-availability' => 'Dostępność Dzisiaj',
                        ],

                        'view-on-map'              => 'Zobacz na Mapie',
                    ],
                ],
            ],
        ],
    ],
];
