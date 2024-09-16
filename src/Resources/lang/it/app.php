<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'types' => [
                        'booking' => [
                            'available-from' => 'Disponibile da',
                            'available-to'   => 'Disponibile fino a',

                            'available-every-week' => [
                                'no'    => 'No',
                                'title' => 'Disponibile ogni settimana',
                                'yes'   => 'Sì',
                            ],

                            'appointment' => [
                                'break-duration'         => 'Tempo di pausa tra gli slot (minuti)',
                                'slot-duration'          => 'Durata dello slot (minuti)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'No',
                                    'title' => 'Stesso slot per tutti i giorni',
                                    'yes'   => 'Sì',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'Aggiungi',
                                'break-duration'   => 'Tempo di pausa tra gli slot (minuti)',
                                'close'            => 'Chiudi',
                                'description'      => 'Informazioni sulla prenotazione',
                                'description-info' => 'In base agli slot, verrà creata e resa visibile la durata temporale.',
                                'edit'             => 'Modifica',
                                'many'             => 'Molte prenotazioni per un giorno',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'Aggiungi Slot',
                                        'close'      => 'Chiudi',
                                        'day'        => 'Giorno',
                                        'edit-title' => 'Modifica Slot',
                                        'friday'     => 'Venerdì',
                                        'from'       => 'Da',
                                        'from-day'   => 'Dal Giorno',
                                        'from-time'  => 'Dall\'Ora',
                                        'monday'     => 'Lunedì',
                                        'open'       => 'Apri',
                                        'saturday'   => 'Sabato',
                                        'save'       => 'Salvare',
                                        'select'     => 'Seleziona',
                                        'status'     => 'Stato',
                                        'sunday'     => 'Domenica',
                                        'thursday'   => 'Giovedì',
                                        'to'         => 'A',
                                        'to-day'     => 'Al Giorno',
                                        'to-time'    => 'All\'Ora',
                                        'tuesday'    => 'Martedì',
                                        'wednesday'  => 'Mercoledì',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'Una prenotazione per molti giorni',
                                'open'             => 'Aperto',
                                'slot-add'         => 'Aggiungi slot',
                                'slot-duration'    => 'Durata dello slot (minuti)',
                                'slot-title'       => 'Durata temporale degli slot',
                                'title'            => 'Predefinito',
                                'unavailable'      => 'non disponibile',
                            ],

                            'event'       => [
                                'add'                => 'Aggiungi biglietto',
                                'delete'             => 'Elimina',
                                'description'        => 'Descrizione',
                                'description-info'   => 'Non ci sono biglietti disponibili.',
                                'edit'               => 'Modifica',

                                'modal'              => [
                                    'edit' => 'Modifica biglietti',
                                    'save' => 'Salvare',
                                ],

                                'name'               => 'Nome',
                                'price'              => 'Prezzo',
                                'qty'                => 'Quantità',
                                'special-price'      => 'Prezzo speciale',
                                'special-price-from' => 'Prezzo speciale da',
                                'special-price-to'   => 'Prezzo speciale a',
                                'title'              => 'Biglietti',
                                'valid-from'         => 'Valido dal',
                                'valid-until'        => 'Valido fino al',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'Aggiungi biglietto',
                                ],

                                'slots'   => [
                                    'add'         => 'Aggiungi slot',
                                    'description' => 'Slot disponibili con durata temporale.',
                                ],
                            ],

                            'location' => 'Posizione',
                            'qty'      => 'Quantità',

                            'rental'      => [
                                'daily'                  => 'Su base giornaliera',
                                'daily-hourly'           => 'Sia giornaliero che per ore',
                                'daily-price'            => 'Prezzo giornaliero',
                                'hourly'                 => 'Su base oraria',
                                'hourly-price'           => 'Prezzo orario',

                                'same-slot-for-all-days' => [
                                    'no'    => 'No',
                                    'title' => 'Stesso slot per tutti i giorni',
                                    'yes'   => 'Sì',
                                ],

                                'title'                  => 'Tipo di noleggio',
                            ],

                            'slots'       => [
                                'add'              => 'Aggiungi slot',

                                'action'           => [
                                    'add' => 'Aggiungi',
                                ],

                                'description-info' => 'In base agli slot, verrà creata e resa visibile la durata temporale.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'Venerdì',
                                        'from'       => 'Da',
                                        'monday'     => 'Lunedì',
                                        'saturday'   => 'Sabato',
                                        'sunday'     => 'Domenica',
                                        'thursday'   => 'Giovedì',
                                        'to'         => 'A',
                                        'tuesday'    => 'Martedì',
                                        'wednesday'  => 'Mercoledì',
                                    ],
                                ],

                                'save'             => 'Salva',
                                'title'            => 'Durata temporale degli slot',
                                'unavailable'      => 'Non disponibile',
                            ],

                            'table'       => [
                                'break-duration'            => 'Tempo di pausa tra gli slot (minuti)',

                                'charged-per'               => [
                                    'guest'  => 'Ospite',
                                    'table'  => 'Tavolo',
                                    'title'  => 'Addebitato per',
                                ],

                                'guest-capacity'            => 'Capacità ospiti',
                                'guest-limit'               => 'Limite ospiti per tavolo',
                                'prevent-scheduling-before' => 'Impedisci la pianificazione prima di',
                                'slot-duration'             => 'Durata dello slot (minuti)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'No',
                                    'title' => 'Stesso slot per tutti i giorni',
                                    'yes'   => 'Sì',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'Prenotazione appuntamento',
                                'default'     => 'Prenotazione predefinita',
                                'event'       => 'Prenotazione evento',
                                'many'        => 'Molti',
                                'one'         => 'Uno',
                                'rental'      => 'Prenotazione noleggio',
                                'table'       => 'Prenotazione tavolo',
                                'title'       => 'Tipo',
                            ],

                            'title' => 'Tipo di prenotazione',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'Prenotazione',
                ],

                'type' => [
                    'booking' => 'Prenotazione',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Data Prenotazione',
                    'booking-detailes' => 'Dettagli Prenotazione',
                    'canceled'         => 'Annullato',
                    'closed'           => 'Chiuso',
                    'done'             => 'Completato',
                    'order-id'         => 'ID Ordine',
                    'pending'          => 'In Attesa',
                    'price'            => 'Prezzo',
                    'status'           => 'Stato',
                    'time-slot'        => 'Fascia Oraria:',
                    'view-details'     => 'Visualizza Dettagli',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Data di Creazione',
                        'from'         => 'Da',
                        'id'           => 'ID',
                        'order-id'     => 'ID Ordine',
                        'qty'          => 'Quantità',
                        'to'           => 'A',
                    ],

                    'title' => 'Prodotto Prenotazioni',
                ],

                'title' => 'Prodotto Prenotazioni',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Chiuso',

                'cart'             => [
                    'booking-from' => 'Prenotazione Da',
                    'booking-till' => 'Prenotazione Fino A',
                    'daily'        => 'Quotidianamente',
                    'event-from'   => 'Evento Da',
                    'event-ticket' => 'Biglietto Evento',
                    'event-till'   => 'Evento Fino A',
                    'hourly'       => 'Base oraria',

                    'integrity' => [
                        'event' => [
                            'expired' => 'Questo evento è scaduto.',
                        ],

                        'missing_options'        => 'Mancano le opzioni per questo prodotto.',
                        'inventory_warning'      => 'La quantità richiesta non è disponibile, si prega di riprovare più tardi.',
                        'select_hourly_duration' => 'Seleziona una durata oraria di un\'ora.',
                    ],

                    'rent-from'    => 'Affitto Da',
                    'rent-till'    => 'Affitto Fino A',
                    'rent-type'    => 'Tipo di Affitto',
                    'renting_type' => 'Tipo di Affitto',
                    'special-note' => 'Richieste Speciali/Note',
                ],

                'per-ticket-price' => ':price Per Biglietto',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'Chiuso',
                            'today-availability' => 'Disponibilità Oggi',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Prenota Il Tuo Biglietto',
                        ],

                        'event-on'                 => 'Evento Il',
                        'location'                 => 'Posizione',

                        'rental'      => [
                            'choose-rent-option' => 'Scegli Opzione di Affitto',
                            'daily-basis'        => 'Base Giornaliera',
                            'from'               => 'Da',
                            'hourly-basis'       => 'Base Oraria',
                            'rent-an-item'       => 'Affitta un Oggetto',
                            'select-date'        => 'Seleziona data',
                            'select-rent-time'   => 'Seleziona Orario Affitto',
                            'select-slot'        => 'Seleziona Slot',
                            'select-time-slot'   => 'Seleziona fascia oraria',
                            'slot'               => 'Slot',
                            'to'                 => 'A',
                        ],

                        'slot-duration-in-minutes' => ':minutes Minuti',
                        'slot-duration'            => 'Durata dello Slot',

                        'slots'       => [
                            'book-an-appointment' => 'Prenota un Appuntamento',
                            'date'                => 'Data',
                            'no-slots-available'  => 'Nessuno slot disponibile',
                            'select-slot'         => 'Seleziona Slot',
                            'title'               => 'Slot',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Prenota un Tavolo',
                            'closed'             => 'Chiuso',
                            'slots-for-all-days' => 'Mostra per tutti i giorni',
                            'special-notes'      => 'Richieste Speciali/Note',
                            'today-availability' => 'Disponibilità Oggi',
                        ],

                        'view-on-map'              => 'Visualizza sulla Mappa',
                    ],
                ],
            ],
        ],
    ],
];
