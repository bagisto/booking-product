<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Pauzetijd tussen slots (minuten)',
                            'slot-duration'          => 'Slotduur (minuten)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nee',
                                'title' => 'Zelfde slot voor alle dagen',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'default'     => [
                            'add'            => 'Toevoegen',
                            'break-duration' => 'Pauzetijd tussen slots (minuten)',
                            'close'          => 'Sluiten',
                            'description'    => 'Boekingsinformatie',
                            'edit'           => 'Bewerken',
                            'many'           => 'Veel boekingen voor één dag',

                            'modal'          => [
                                'slot' => [
                                    'add-title'  => 'Slots toevoegen',
                                    'close'      => 'Sluiten',
                                    'day'        => 'Dag',
                                    'edit-title' => 'Slots bewerken',
                                    'friday'     => 'Vrijdag',
                                    'from-day'   => 'Vanaf dag',
                                    'from'       => 'Van',
                                    'monday'     => 'Maandag',
                                    'open'       => 'Open',
                                    'saturday'   => 'Zaterdag',
                                    'save'       => 'Slot opslaan',
                                    'select'     => 'Selecteer',
                                    'status'     => 'Status',
                                    'sunday'     => 'Zondag',
                                    'thursday'   => 'Donderdag',
                                    'to'         => 'Tot',
                                    'tuesday'    => 'Dinsdag',
                                    'wednesday'  => 'Woensdag',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'            => 'Eén boeking voor meerdere dagen',
                            'open'           => 'Open',
                            'slot-add'       => 'Slots toevoegen',
                            'slot-title'     => 'Slots',
                            'slot-duration'  => 'Slotduur (minuten)',
                            'title'          => 'Standaard',
                        ],

                        'event'       => [
                            'add'                => 'Tickets toevoegen',
                            'delete'             => 'Verwijderen',
                            'description-info'   => 'Er zijn geen tickets beschikbaar.',
                            'description'        => 'Omschrijving',
                            'edit'               => 'Bewerken',

                            'modal'              => [
                                'save' => 'Tickets opslaan',
                            ],

                            'name'               => 'Naam',
                            'price'              => 'Prijs',
                            'qty'                => 'Hoeveelheid',
                            'special-price-from' => 'Speciale prijs vanaf',
                            'special-price-to'   => 'Speciale prijs tot',
                            'special-price'      => 'Speciale prijs',
                            'title'              => 'Tickets',
                            'valid-from'         => 'Geldig vanaf',
                            'valid-until'        => 'Geldig tot',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Tickets toevoegen',
                            ],

                            'slots'   => [
                                'add'         => 'Slots toevoegen',
                                'description' => 'Beschikbare slots met tijdsduur.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'Beide (dagelijks en per uur)',
                            'daily-price'            => 'Dagprijs',
                            'daily'                  => 'Dagbasis',
                            'hourly-price'           => 'Uurprijs',
                            'hourly'                 => 'Uurbasis',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nee',
                                'title' => 'Zelfde slot voor alle dagen',
                                'yes'   => 'Ja',
                            ],

                            'title'                  => 'Verhuurtype',
                        ],

                        'slots'       => [
                            'add'              => 'Slots toevoegen',

                            'action'           => [
                                'add' => 'Toevoegen',
                            ],

                            'description-info' => 'Volgens slots wordt de tijdsduur gecreëerd en zichtbaar.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Vrijdag',
                                    'from'       => 'Van',
                                    'monday'     => 'Maandag',
                                    'saturday'   => 'Zaterdag',
                                    'sunday'     => 'Zondag',
                                    'thursday'   => 'Donderdag',
                                    'to'         => 'Tot',
                                    'tuesday'    => 'Dinsdag',
                                    'wednesday'  => 'Woensdag',
                                ],
                            ],

                            'save'             => 'Opslaan',
                            'title'            => 'Tijdsduur van slots',
                            'unavailable'      => 'Niet beschikbaar',
                        ],

                        'table'       => [
                            'break-duration'            => 'Pauzetijd tussen slots (minuten)',

                            'charged-per'               => [
                                'guest'  => 'Gast',
                                'table'  => 'Tafel',
                                'title'  => 'In rekening brengen per',
                            ],

                            'guest-capacity'            => 'Gastencapaciteit',
                            'guest-limit'               => 'Gastenlimiet per tafel',
                            'prevent-scheduling-before' => 'Voorkom plannen voor',
                            'slot-duration'             => 'Slotduur (minuten)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'Nee',
                                'title' => 'Zelfde slot voor alle dagen',
                                'yes'   => 'Ja',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Beschikbaar vanaf',
                            'available-to'         => 'Beschikbaar tot',

                            'available-every-week' => [
                                'no'    => 'Nee',
                                'title' => 'Elke week beschikbaar',
                                'yes'   => 'Ja',
                            ],

                            'location'             => 'Locatie',
                            'qty'                  => 'Aantal',

                            'type'                 => [
                                'appointment' => 'Afspraak',
                                'default'     => 'Standaard',
                                'event'       => 'Evenement',
                                'many'        => 'Vele',
                                'one'         => 'Een',
                                'rental'      => 'Verhuur',
                                'table'       => 'Tafel',
                                'title'       => 'Type',
                            ],

                            'title'                => 'Boekingstype',
                        ],
                    ],

                    'index'   => [
                        'booking' => 'Boeking',
                    ],
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'index' => [
                    'datagrid' => [
                        'created-date' => 'Aanmaakdatum',
                        'from'         => 'Van',
                        'id'           => 'ID',
                        'order-id'     => 'Bestel-ID',
                        'qty'          => 'Aantal',
                        'to'           => 'Tot',
                    ],

                    'title'    => 'Boekingsproducten',
                ],

                'title' => 'Boekingsproducten',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Gesloten',

                'cart'             => [
                    'booking-from' => 'Boeking Van',
                    'booking-till' => 'Boeking Tot',
                    'daily'        => 'Dagelijks',
                    'event-from'   => 'Evenement Van',
                    'event-ticket' => 'Evenement Ticket',
                    'event-till'   => 'Evenement Tot',

                    'integrity'    => [
                        'missing_options'        => 'Opties ontbreken voor dit product.',
                        'select_hourly_duration' => 'Selecteer een duur van één uur.',
                    ],

                    'rent-from'    => 'Huur Van',
                    'rent-till'    => 'Huur Tot',
                    'rent-type'    => 'Huurtype',
                    'renting_type' => 'Huurtype',
                    'special-note' => 'Speciale Verzoeken/Notities',
                ],

                'per-ticket-price' => ':price Per Ticket',
            ],

            'view'   => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'Evenement Op',
                        'location'                 => 'Locatie',
                        'slot-duration-in-minutes' => ':minutes Minuten',
                        'slot-duration'            => 'Slotduur',
                        'view-on-map'              => 'Bekijken op Kaart',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'Gesloten',
                        'today-availability' => 'Vandaag Beschikbaarheid',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'Boek Uw Ticket',
                    ],

                    'rental'      => [
                        'choose-rent-option' => 'Kies Verhuuroptie',
                        'daily-basis'        => 'Dagelijkse Basis',
                        'from'               => 'Van',
                        'hourly-basis'       => 'Uurlijkse Basis',
                        'rent-an-item'       => 'Verhuur een Item',
                        'select-date'        => 'Selecteer datum',
                        'select-rent-time'   => 'Selecteer Verhuurtijd',
                        'select-slot'        => 'Selecteer Slot',
                        'slot'               => 'Slot',
                        'to'                 => 'Tot',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'Boek een Afspraak',
                        'date'                => 'Datum',
                        'no-slots-available'  => 'Geen slots beschikbaar',
                        'title'               => 'Slot',
                    ],

                    'table'       => [
                        'book-a-table'       => 'Boek een Tafel',
                        'closed'             => 'Gesloten',
                        'slots-for-all-days' => 'Toon voor alle dagen',
                        'special-notes'      => 'Speciale Verzoeken/Notities',
                        'today-availability' => 'Vandaag Beschikbaarheid',
                    ],
                ],
            ],
        ],
    ],
];
