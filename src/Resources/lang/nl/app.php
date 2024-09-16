<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Beschikbaar vanaf',
                            'available-to'         => 'Beschikbaar tot',

                            'available-every-week' => [
                                'no'    => 'Nee',
                                'title' => 'Elke week beschikbaar',
                                'yes'   => 'Ja',
                            ],

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
                                'add'              => 'Toevoegen',
                                'break-duration'   => 'Pauzetijd tussen slots (minuten)',
                                'close'            => 'Sluiten',
                                'description'      => 'Boekingsinformatie',
                                'description-info' => 'Volgens slots wordt de tijdsduur gecreëerd en zichtbaar.',
                                'edit'             => 'Bewerken',
                                'many'             => 'Veel boekingen voor één dag',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'Slots Toevoegen',
                                        'close'      => 'Sluiten',
                                        'day'        => 'Dag',
                                        'edit-title' => 'Slots Bewerken',
                                        'friday'     => 'Vrijdag',
                                        'from'       => 'Van',
                                        'from-day'   => 'Van Dag',
                                        'from-time'  => 'Van Tijd',
                                        'monday'     => 'Maandag',
                                        'open'       => 'Openen',
                                        'saturday'   => 'Zaterdag',
                                        'save'       => 'Opslaan',
                                        'select'     => 'Selecteren',
                                        'status'     => 'Status',
                                        'sunday'     => 'Zondag',
                                        'thursday'   => 'Donderdag',
                                        'to'         => 'Tot',
                                        'to-day'     => 'Tot Dag',
                                        'to-time'    => 'Tot Tijd',
                                        'tuesday'    => 'Dinsdag',
                                        'wednesday'  => 'Woensdag',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'Eén boeking voor meerdere dagen',
                                'open'             => 'Open',
                                'slot-add'         => 'Slots toevoegen',
                                'slot-duration'    => 'Slotduur (minuten)',
                                'slot-title'       => 'Tijdsduur van slots',
                                'title'            => 'Standaard',
                                'unavailable'      => 'niet beschikbaar',
                            ],

                            'event'       => [
                                'add'                => 'Tickets toevoegen',
                                'delete'             => 'Verwijderen',
                                'description'        => 'Omschrijving',
                                'description-info'   => 'Er zijn geen tickets beschikbaar.',
                                'edit'               => 'Bewerken',

                                'modal'              => [
                                    'edit' => 'Tickets bewerken',
                                    'save' => 'Opslaan',
                                ],

                                'name'               => 'Naam',
                                'price'              => 'Prijs',
                                'qty'                => 'Hoeveelheid',
                                'special-price'      => 'Speciale prijs',
                                'special-price-from' => 'Speciale prijs vanaf',
                                'special-price-to'   => 'Speciale prijs tot',
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

                            'location'             => 'Locatie',
                            'qty'                  => 'Aantal',

                            'rental'      => [
                                'daily'                  => 'Dagbasis',
                                'daily-hourly'           => 'Beide (dagelijks en per uur)',
                                'daily-price'            => 'Dagprijs',
                                'hourly'                 => 'Uurbasis',
                                'hourly-price'           => 'Uurprijs',

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

                            'type' => [
                                'appointment' => 'Afspraak boeking',
                                'default'     => 'Standaard boeking',
                                'event'       => 'Evenementen boeking',
                                'many'        => 'Meerdere',
                                'one'         => 'Eén',
                                'rental'      => 'Verhuur boeking',
                                'table'       => 'Tafel boeking',
                                'title'       => 'Type',
                            ],

                            'title'                => 'Boekingstype',
                        ],
                    ],
                ],

                'index'   => [
                    'booking' => 'Boeking',
                ],

                'type'   => [
                    'booking' => 'Boeking',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Boekingsdatum',
                    'booking-detailes' => 'Boekingsgegevens',
                    'canceled'         => 'Geannuleerd',
                    'closed'           => 'Gesloten',
                    'done'             => 'Voltooid',
                    'order-id'         => 'Bestelnummer',
                    'pending'          => 'In Afwachting',
                    'price'            => 'Prijs',
                    'status'           => 'Status',
                    'time-slot'        => 'Tijdslot:',
                    'view-details'     => 'Details weergeven',
                ],

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
                    'hourly'       => 'Uurbasis',

                    'integrity' => [
                        'event' => [
                            'expired' => 'Dit evenement is verlopen.',
                        ],

                        'missing_options'        => 'Opties ontbreken voor dit product.',
                        'inventory_warning'      => 'De aangevraagde hoeveelheid is niet beschikbaar, probeer het later opnieuw.',
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
                        'appointment' => [
                            'closed'             => 'Gesloten',
                            'today-availability' => 'Vandaag Beschikbaarheid',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Boek Uw Ticket',
                        ],

                        'event-on'                 => 'Evenement Op',
                        'location'                 => 'Locatie',

                        'rental'      => [
                            'choose-rent-option' => 'Kies Verhuuroptie',
                            'daily-basis'        => 'Dagelijkse Basis',
                            'from'               => 'Van',
                            'hourly-basis'       => 'Uurlijkse Basis',
                            'rent-an-item'       => 'Verhuur een Item',
                            'select-date'        => 'Selecteer datum',
                            'select-rent-time'   => 'Selecteer Verhuurtijd',
                            'select-slot'        => 'Selecteer Slot',
                            'select-time-slot'   => 'Selecteer Tijdslot',
                            'slot'               => 'Slot',
                            'to'                 => 'Tot',
                        ],

                        'slot-duration-in-minutes' => ':minutes Minuten',
                        'slot-duration'            => 'Slotduur',

                        'slots'       => [
                            'book-an-appointment' => 'Boek een Afspraak',
                            'date'                => 'Datum',
                            'no-slots-available'  => 'Geen slots beschikbaar',
                            'select-slot'         => 'Selecteer Slot',
                            'title'               => 'Slot',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Boek een Tafel',
                            'closed'             => 'Gesloten',
                            'slots-for-all-days' => 'Toon voor alle dagen',
                            'special-notes'      => 'Speciale Verzoeken/Notities',
                            'today-availability' => 'Vandaag Beschikbaarheid',
                        ],

                        'view-on-map'              => 'Bekijken op Kaart',
                    ],
                ],
            ],
        ],
    ],
];
