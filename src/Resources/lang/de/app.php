<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => 'Verfügbar ab',
                            'available-to'         => 'Verfügbar bis',

                            'available-every-week' => [
                                'no'    => 'Nein',
                                'title' => 'Jede Woche verfügbar',
                                'yes'   => 'Ja',
                            ],

                            'appointment' => [
                                'break-duration'         => 'Pause zwischen den Slots (Minuten)',
                                'slot-duration'          => 'Slot-Dauer (Minuten)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'Nein',
                                    'title' => 'Gleicher Slot für alle Tage',
                                    'yes'   => 'Ja',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'Hinzufügen',
                                'break-duration'   => 'Pause zwischen den Slots (Minuten)',
                                'close'            => 'Schließen',
                                'description'      => 'Buchungsinformationen',
                                'description-info' => 'Gemäß den Slots wird die Zeitdauer erstellt und sichtbar.',
                                'edit'             => 'Bearbeiten',
                                'many'             => 'Viele Buchungen an einem Tag',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'Slots hinzufügen',
                                        'close'      => 'Schließen',
                                        'day'        => 'Tag',
                                        'edit-title' => 'Slots bearbeiten',
                                        'friday'     => 'Freitag',
                                        'from'       => 'Von',
                                        'from-day'   => 'Vom Tag',
                                        'from-time'  => 'Von der Zeit',
                                        'monday'     => 'Montag',
                                        'open'       => 'Öffnen',
                                        'saturday'   => 'Samstag',
                                        'save'       => 'Speichern',
                                        'select'     => 'Auswählen',
                                        'status'     => 'Status',
                                        'sunday'     => 'Sonntag',
                                        'thursday'   => 'Donnerstag',
                                        'to'         => 'Bis',
                                        'to-day'     => 'Zum Tag',
                                        'to-time'    => 'Zur Zeit',
                                        'tuesday'    => 'Dienstag',
                                        'wednesday'  => 'Mittwoch',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'Eine Buchung für viele Tage',
                                'open'             => 'Öffnen',
                                'slot-add'         => 'Slots hinzufügen',
                                'slot-duration'    => 'Slot-Dauer (Minuten)',
                                'slot-title'       => 'Slot-Zeitdauer',
                                'title'            => 'Standard',
                                'unavailable'      => 'nicht verfügbar',
                            ],

                            'event'       => [
                                'add'                => 'Tickets hinzufügen',
                                'delete'             => 'Löschen',
                                'description'        => 'Beschreibung',
                                'description-info'   => 'Es gibt keine verfügbaren Tickets.',
                                'edit'               => 'Bearbeiten',

                                'modal'              => [
                                    'edit' => 'Tickets bearbeiten',
                                    'save' => 'Speichern',
                                ],

                                'name'               => 'Name',
                                'price'              => 'Preis',
                                'qty'                => 'Menge',
                                'special-price'      => 'Sonderpreis',
                                'special-price-from' => 'Sonderpreis von',
                                'special-price-to'   => 'Sonderpreis bis',
                                'title'              => 'Tickets',
                                'valid-from'         => 'Gültig ab',
                                'valid-until'        => 'Gültig bis',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'Tickets hinzufügen',
                                ],

                                'slots'   => [
                                    'add'         => 'Slots hinzufügen',
                                    'description' => 'Verfügbare Slots mit Zeitdauer.',
                                ],
                            ],

                            'location'             => 'Ort',
                            'qty'                  => 'Menge',

                            'rental'      => [
                                'daily'                  => 'Täglich',
                                'daily-hourly'           => 'Beides (täglich und stündlich)',
                                'daily-price'            => 'Tagespreis',
                                'hourly'                 => 'Stündlich',
                                'hourly-price'           => 'Stundenpreis',

                                'same-slot-for-all-days' => [
                                    'no'    => 'Nein',
                                    'title' => 'Gleicher Slot für alle Tage',
                                    'yes'   => 'Ja',
                                ],

                                'title'                  => 'Vermietungstyp',
                            ],

                            'slots'       => [
                                'add'              => 'Slots hinzufügen',

                                'action'           => [
                                    'add' => 'Hinzufügen',
                                ],

                                'description-info' => 'Gemäß den Slots wird die Zeitdauer erstellt und sichtbar.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'Freitag',
                                        'from'       => 'Von',
                                        'monday'     => 'Montag',
                                        'saturday'   => 'Samstag',
                                        'sunday'     => 'Sonntag',
                                        'thursday'   => 'Donnerstag',
                                        'to'         => 'Bis',
                                        'tuesday'    => 'Dienstag',
                                        'wednesday'  => 'Mittwoch',
                                    ],
                                ],

                                'save'             => 'Speichern',
                                'title'            => 'Slot-Zeitdauer',
                                'unavailable'      => 'Nicht verfügbar',
                            ],

                            'table'       => [
                                'break-duration'            => 'Pause zwischen den Slots (Minuten)',

                                'charged-per'               => [
                                    'guest'  => 'Gast',
                                    'table'  => 'Tisch',
                                    'title'  => 'Pro berechnet',
                                ],

                                'guest-capacity'            => 'Gastkapazität',
                                'guest-limit'               => 'Gastlimit pro Tisch',
                                'prevent-scheduling-before' => 'Planung vorher verhindern',
                                'slot-duration'             => 'Slot-Dauer (Minuten)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'Nein',
                                    'title' => 'Gleicher Slot für alle Tage',
                                    'yes'   => 'Ja',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'Terminbuchung',
                                'default'     => 'Standardbuchung',
                                'event'       => 'Veranstaltungsbuchung',
                                'many'        => 'Viele',
                                'one'         => 'Ein',
                                'rental'      => 'Mietbuchung',
                                'table'       => 'Tischbuchung',
                                'title'       => 'Typ',
                            ],

                            'title'                => 'Buchungstyp',
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
                    'booking-date'     => 'Buchungsdatum',
                    'booking-detailes' => 'Buchungsdetails',
                    'canceled'         => 'Abgesagt',
                    'closed'           => 'Geschlossen',
                    'done'             => 'Erledigt',
                    'order-id'         => 'Bestellnummer',
                    'pending'          => 'Ausstehend',
                    'price'            => 'Preis',
                    'status'           => 'Status',
                    'time-slot'        => 'Zeitfenster:',
                    'view-details'     => 'Details anzeigen',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Erstellungsdatum',
                        'from'         => 'Von',
                        'id'           => 'ID',
                        'order-id'     => 'Bestell-ID',
                        'qty'          => 'Menge',
                        'to'           => 'Bis',
                    ],

                    'title'    => 'Buchungsprodukt',
                ],

                'title' => 'Buchungsprodukt',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Geschlossen',

                'cart'             => [
                    'booking-from' => 'Buchung von',
                    'booking-till' => 'Buchung bis',
                    'daily'        => 'Täglich',
                    'event-from'   => 'Event von',
                    'event-ticket' => 'Event-Ticket',
                    'event-till'   => 'Event bis',
                    'hourly'       => 'Stündliche Basis',

                    'integrity' => [
                        'event' => [
                            'expired' => 'Dieses Ereignis ist abgelaufen.',
                        ],

                        'missing_options'        => 'Optionen fehlen für dieses Produkt.',
                        'inventory_warning'      => 'Die angeforderte Menge ist nicht verfügbar, bitte versuchen Sie es später erneut.',
                        'select_hourly_duration' => 'Wählen Sie eine Zeitdauer von einer Stunde aus.',
                    ],

                    'rent-from'    => 'Vermietung von',
                    'rent-till'    => 'Vermietung bis',
                    'rent-type'    => 'Mietart',
                    'renting_type' => 'Mietart',
                    'special-note' => 'Besondere Anfragen/Notizen',
                ],

                'per-ticket-price' => ':price pro Ticket',
            ],

            'view' => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'Geschlossen',
                            'today-availability' => 'Heutige Verfügbarkeit',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Buchen Sie Ihr Ticket',
                        ],

                        'event-on'                 => 'Event am',
                        'location'                 => 'Ort',

                        'rental'      => [
                            'choose-rent-option' => 'Wählen Sie die Mietoption',
                            'daily-basis'        => 'Tägliche Basis',
                            'from'               => 'Von',
                            'hourly-basis'       => 'Stündliche Basis',
                            'rent-an-item'       => 'Artikel mieten',
                            'select-date'        => 'Datum wählen',
                            'select-rent-time'   => 'Mietzeit auswählen',
                            'select-slot'        => 'Slot auswählen',
                            'select-time-slot'   => 'Wählen Sie Zeitfenster',
                            'slot'               => 'Slot',
                            'to'                 => 'Bis',
                        ],

                        'slot-duration-in-minutes' => ':minutes Minuten',
                        'slot-duration'            => 'Zeitspanne',

                        'slots'       => [
                            'book-an-appointment' => 'Termin buchen',
                            'date'                => 'Datum',
                            'no-slots-available'  => 'Keine Slots verfügbar',
                            'select-slot'         => 'Slot auswählen',
                            'title'               => 'Slot',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Tisch buchen',
                            'closed'             => 'Geschlossen',
                            'slots-for-all-days' => 'Für alle Tage anzeigen',
                            'special-notes'      => 'Besondere Anfragen/Notizen',
                            'today-availability' => 'Heutige Verfügbarkeit',
                        ],

                        'view-on-map'              => 'Auf Karte anzeigen',
                    ],
                ],
            ],
        ],
    ],
];
