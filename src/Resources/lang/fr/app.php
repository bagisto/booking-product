<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'types'   => [
                        'booking' => [
                            'available-from' => 'Disponible à partir de',
                            'available-to'   => 'Disponible jusqu’à',

                            'available-every-week'      => [
                                'no'    => 'Non',
                                'title' => 'Disponible chaque semaine',
                                'yes'   => 'Oui',
                            ],

                            'appointment' => [
                                'break-duration'         => 'Temps de pause entre les créneaux (minutes)',
                                'slot-duration'          => 'Durée du créneau (minutes)',

                                'same-slot-for-all-days' => [
                                    'no'    => 'Non',
                                    'title' => 'Même créneau pour tous les jours',
                                    'yes'   => 'Oui',
                                ],
                            ],

                            'default'     => [
                                'add'              => 'Ajouter',
                                'break-duration'   => 'Temps de pause entre les créneaux (minutes)',
                                'close'            => 'Fermer',
                                'description'      => 'Informations sur la réservation',
                                'description-info' => 'Selon les créneaux, la durée sera créée et visible.',
                                'edit'             => 'Modifier',
                                'many'             => 'Nombreuses réservations pour un jour',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => 'Ajouter des créneaux',
                                        'close'      => 'Fermer',
                                        'day'        => 'Jour',
                                        'edit-title' => 'Modifier les créneaux',
                                        'friday'     => 'Vendredi',
                                        'from'       => 'De',
                                        'from-day'   => 'Du jour',
                                        'from-time'  => 'De l\'heure',
                                        'monday'     => 'Lundi',
                                        'open'       => 'Ouvrir',
                                        'saturday'   => 'Samedi',
                                        'save'       => 'Enregistrer',
                                        'select'     => 'Sélectionner',
                                        'status'     => 'Statut',
                                        'sunday'     => 'Dimanche',
                                        'thursday'   => 'Jeudi',
                                        'to'         => 'À',
                                        'to-day'     => 'Au jour',
                                        'to-time'    => 'À l\'heure',
                                        'tuesday'    => 'Mardi',
                                        'wednesday'  => 'Mercredi',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => 'Une réservation pour plusieurs jours',
                                'open'             => 'Ouvrir',
                                'slot-add'         => 'Ajouter des créneaux',
                                'slot-duration'    => 'Durée du créneau (minutes)',
                                'slot-title'       => 'Durée des créneaux',
                                'title'            => 'Par défaut',
                                'unavailable'      => 'indisponible',
                            ],

                            'event'       => [
                                'add'                => 'Ajouter des billets',
                                'delete'             => 'Supprimer',
                                'description'        => 'Description',
                                'description-info'   => 'Aucun billet disponible.',
                                'edit'               => 'Modifier',

                                'modal'              => [
                                    'edit' => 'Modifier les billets',
                                    'save' => 'Enregistrer',
                                ],

                                'name'               => 'Nom',
                                'price'              => 'Prix',
                                'qty'                => 'Quantité',
                                'special-price'      => 'Prix spécial',
                                'special-price-from' => 'Prix spécial à partir de',
                                'special-price-to'   => 'Prix spécial jusqu\'à',
                                'title'              => 'Billets',
                                'valid-from'         => 'Valable à partir du',
                                'valid-until'        => 'Valable jusqu\'au',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => 'Ajouter des billets',
                                ],

                                'slots'   => [
                                    'add'         => 'Ajouter des créneaux',
                                    'description' => 'Créneaux disponibles avec une durée.',
                                ],
                            ],

                            'location' => 'Emplacement',
                            'qty'      => 'Quantité',

                            'rental'      => [
                                'daily'                  => 'Quotidien',
                                'daily-hourly'           => 'Les deux (quotidien et horaire)',
                                'daily-price'            => 'Prix quotidien',
                                'hourly'                 => 'Horaire',
                                'hourly-price'           => 'Prix horaire',

                                'same-slot-for-all-days' => [
                                    'no'    => 'Non',
                                    'title' => 'Même créneau pour tous les jours',
                                    'yes'   => 'Oui',
                                ],

                                'title'                  => 'Type de location',
                            ],

                            'slots'       => [
                                'add'              => 'Ajouter des créneaux',

                                'action'           => [
                                    'add' => 'Ajouter',
                                ],

                                'description-info' => 'Selon les créneaux, la durée sera créée et visible.',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => 'Vendredi',
                                        'from'       => 'De',
                                        'monday'     => 'Lundi',
                                        'saturday'   => 'Samedi',
                                        'sunday'     => 'Dimanche',
                                        'thursday'   => 'Jeudi',
                                        'to'         => 'À',
                                        'tuesday'    => 'Mardi',
                                        'wednesday'  => 'Mercredi',
                                    ],
                                ],

                                'save'             => 'Enregistrer',
                                'title'            => 'Durée des créneaux',
                                'unavailable'      => 'Indisponible',
                            ],

                            'table'       => [
                                'break-duration'            => 'Temps de pause entre les créneaux (minutes)',

                                'charged-per'               => [
                                    'guest'  => 'Invité',
                                    'table'  => 'Table',
                                    'title'  => 'Facturé par',
                                ],

                                'guest-capacity'            => 'Capacité d\'accueil des invités',
                                'guest-limit'               => 'Limite d\'invités par table',
                                'prevent-scheduling-before' => 'Empêcher la planification avant',
                                'slot-duration'             => 'Durée du créneau (minutes)',

                                'same-slot-for-all-days'    => [
                                    'no'    => 'Non',
                                    'title' => 'Même créneau pour tous les jours',
                                    'yes'   => 'Oui',
                                ],
                            ],

                            'type' => [
                                'appointment' => 'Réservation de rendez-vous',
                                'default'     => 'Réservation par défaut',
                                'event'       => 'Réservation d\'événement',
                                'many'        => 'Plusieurs',
                                'one'         => 'Un',
                                'rental'      => 'Réservation de location',
                                'table'       => 'Réservation de table',
                                'title'       => 'Type',
                            ],

                            'title' => 'Type de Réservation',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'Réservation',
                ],

                'type' => [
                    'booking' => 'Réservation',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Date de Réservation',
                    'booking-detailes' => 'Détails de la Réservation',
                    'canceled'         => 'Annulé',
                    'closed'           => 'Fermé',
                    'done'             => 'Terminé',
                    'order-id'         => 'Identifiant de Commande',
                    'pending'          => 'En Attente',
                    'price'            => 'Prix',
                    'status'           => 'Statut',
                    'time-slot'        => 'Créneau Horaire:',
                    'view-details'     => 'Voir Détails',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Date de création',
                        'from'         => 'De',
                        'id'           => 'ID',
                        'order-id'     => 'ID de commande',
                        'qty'          => 'Qté',
                        'to'           => 'À',
                    ],

                    'title' => 'Produit de Réservations',
                ],

                'title' => 'Produit de Réservations',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => 'Fermé',

                'cart'             => [
                    'booking-from' => 'Réservation à partir de',
                    'booking-till' => 'Réservation jusqu\'à',
                    'daily'        => 'Base quotidienne',
                    'event-from'   => 'Événement à partir de',
                    'event-ticket' => 'Billet d\'événement',
                    'event-till'   => 'Événement jusqu\'à',
                    'hourly'       => 'Base horaire',

                    'integrity' => [
                        'event' => [
                            'expired' => 'Cet événement a expiré.',
                        ],

                        'missing_options'        => 'Des options sont manquantes pour ce produit.',
                        'inventory_warning'      => 'La quantité demandée n\'est pas disponible, veuillez réessayer plus tard.',
                        'select_hourly_duration' => 'Sélectionnez une durée de créneau d\'une heure.',
                    ],

                    'rent-from'    => 'Louer à partir de',
                    'rent-till'    => 'Louer jusqu\'à',
                    'rent-type'    => 'Type de location',
                    'renting_type' => 'Type de location',
                    'special-note' => 'Demande spéciale/Notes',
                ],

                'per-ticket-price' => ':price Par Billet',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'Fermé',
                            'today-availability' => "Disponibilité d'aujourd'hui",
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Réservez votre billet',
                        ],

                        'event-on'                 => 'Événement le',
                        'location'                 => 'Emplacement',

                        'rental'      => [
                            'choose-rent-option' => 'Choisissez une option de location',
                            'daily-basis'        => 'Journalier',
                            'from'               => 'De',
                            'hourly-basis'       => 'Horaire',
                            'rent-an-item'       => 'Louer un article',
                            'select-date'        => 'Sélectionner une date',
                            'select-rent-time'   => 'Sélectionnez l\'heure de location',
                            'select-slot'        => 'Sélectionner un créneau',
                            'select-time-slot'   => 'Sélectionnez un créneau horaire',
                            'slot'               => 'Créneau',
                            'to'                 => 'À',
                        ],

                        'slot-duration-in-minutes' => ':minutes minutes',
                        'slot-duration'            => 'Durée de créneau',

                        'slots'       => [
                            'book-an-appointment' => 'Prendre un rendez-vous',
                            'date'                => 'Date',
                            'no-slots-available'  => 'Aucun créneau disponible',
                            'select-slot'         => 'Sélectionner un créneau',
                            'title'               => 'Créneau',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Réservez une table',
                            'closed'             => 'Fermé',
                            'slots-for-all-days' => 'Afficher pour tous les jours',
                            'special-notes'      => 'Demandes spéciales/Remarques',
                            'today-availability' => "Disponibilité d'aujourd'hui",
                        ],

                        'view-on-map'              => 'Voir sur la carte',
                    ],
                ],
            ],
        ],
    ],
];
