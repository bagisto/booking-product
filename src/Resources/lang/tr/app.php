<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'Slotlar Arası Mola Süresi (Dakika)',
                            'slot-duration'          => 'Slot Süresi (Dakika)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Hayır',
                                'title' => 'Tüm Günler İçin Aynı Slot',
                                'yes'   => 'Evet',
                            ],
                        ],

                        'default'     => [
                            'add'              => 'Ekle',
                            'break-duration'   => 'Slotlar Arası Mola Süresi (Dakika)',
                            'close'            => 'Kapat',
                            'description'      => 'Rezervasyon Bilgisi',
                            'description-info' => 'Slotlara göre zaman süresi oluşturulacak ve görünecektir.',
                            'edit'             => 'Düzenle',
                            'many'             => 'Bir Günde Çok Sayıda Rezervasyon',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Yuva Ekle',
                                    'close'      => 'Kapat',
                                    'day'        => 'Gün',
                                    'edit-title' => 'Yuvaları Düzenle',
                                    'friday'     => 'Cuma',
                                    'from'       => 'Başlangıç',
                                    'from-day'   => 'Başlangıç Günü',
                                    'from-time'  => 'Başlangıç Saati',
                                    'monday'     => 'Pazartesi',
                                    'open'       => 'Açık',
                                    'saturday'   => 'Cumartesi',
                                    'save'       => 'Kaydet',
                                    'select'     => 'Seç',
                                    'status'     => 'Durum',
                                    'sunday'     => 'Pazar',
                                    'thursday'   => 'Perşembe',
                                    'to'         => 'Bitiş',
                                    'to-day'     => 'Bitiş Günü',
                                    'to-time'    => 'Bitiş Saati',
                                    'tuesday'    => 'Salı',
                                    'wednesday'  => 'Çarşamba',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => 'Bir Gün İçin Tek Rezervasyon',
                            'open'             => 'Açık',
                            'slot-add'         => 'Slot Ekle',
                            'slot-title'       => 'Slot Zaman Süresi',
                            'slot-duration'    => 'Slot Süresi (Dakika)',
                            'title'            => 'Varsayılan',
                            'unavailable'      => 'kullanım dışı',
                        ],

                        'event'       => [
                            'add'                => 'Bilet Ekle',
                            'delete'             => 'Sil',
                            'description-info'   => 'Uygun bilet bulunmamaktadır.',
                            'description'        => 'Açıklama',
                            'edit'               => 'Düzenle',

                            'modal'              => [
                                'save' => 'Kaydet',
                            ],

                            'name'               => 'Ad',
                            'price'              => 'Fiyat',
                            'qty'                => 'Miktar',
                            'special-price-from' => 'Özel Fiyat - Başlangıç',
                            'special-price-to'   => 'Özel Fiyat - Bitiş',
                            'special-price'      => 'Özel Fiyat',
                            'title'              => 'Biletler',
                            'valid-from'         => 'Geçerli Başlangıç',
                            'valid-until'        => 'Geçerli Bitiş',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'Bilet Ekle',
                            ],

                            'slots'   => [
                                'add'         => 'Slot Ekle',
                                'description' => 'Mevcut Slotlar ve Zaman Süreleri.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'Hem Günlük Hem Saatlik',
                            'daily-price'            => 'Günlük Fiyat',
                            'daily'                  => 'Günlük',
                            'hourly-price'           => 'Saatlik Fiyat',
                            'hourly'                 => 'Saatlik',

                            'same-slot-for-all-days' => [
                                'no'    => 'Hayır',
                                'title' => 'Tüm Günler İçin Aynı Slot',
                                'yes'   => 'Evet',
                            ],

                            'title'                  => 'Kiralama Türü',
                        ],

                        'slots'       => [
                            'add'              => 'Slot Ekle',

                            'action'           => [
                                'add' => 'Ekle',
                            ],

                            'description-info' => 'Slotlara göre zaman süresi oluşturulacak ve görünecektir.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Cuma',
                                    'from'       => 'Başlangıç',
                                    'monday'     => 'Pazartesi',
                                    'saturday'   => 'Cumartesi',
                                    'sunday'     => 'Pazar',
                                    'thursday'   => 'Perşembe',
                                    'to'         => 'Bitiş',
                                    'tuesday'    => 'Salı',
                                    'wednesday'  => 'Çarşamba',
                                ],
                            ],

                            'save'             => 'Kaydet',
                            'title'            => 'Slot Zaman Süresi',
                            'unavailable'      => 'Uygun Değil',
                        ],

                        'table'       => [
                            'break-duration'            => 'Slotlar Arası Mola Süresi (Dakika)',

                            'charged-per'               => [
                                'guest'  => 'Misafir',
                                'table'  => 'Masa',
                                'title'  => 'Kişi Başına Ücret',
                            ],

                            'guest-capacity'            => 'Misafir Kapasitesi',
                            'guest-limit'               => 'Masa Başına Misafir Sınırı',
                            'prevent-scheduling-before' => 'Önceki Planlamayı Engelle',
                            'slot-duration'             => 'Slot Süresi (Dakika)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'Hayır',
                                'title' => 'Tüm Günler İçin Aynı Slot',
                                'yes'   => 'Evet',
                            ],
                        ],
                    ],

                    'types'       => [
                        'booking' => [
                            'available-from'       => 'Şuradan Mevcut',
                            'available-to'         => 'Şuraya Kadar Mevcut',

                            'available-every-week' => [
                                'no'    => 'Hayır',
                                'title' => 'Her Hafta Mevcut',
                                'yes'   => 'Evet',
                            ],

                            'location'             => 'Konum',
                            'qty'                  => 'Adet',

                            'type' => [
                                'appointment' => 'Randevu Rezervasyonu',
                                'default'     => 'Varsayılan Rezervasyon',
                                'event'       => 'Etkinlik Rezervasyonu',
                                'many'        => 'Çoklu',
                                'one'         => 'Bir',
                                'rental'      => 'Kiralama Rezervasyonu',
                                'table'       => 'Masa Rezervasyonu',
                                'title'       => 'Tür',
                            ],

                            'title'                => 'Rezervasyon Türü',
                        ],
                    ],
                ],

                'index'       => [
                    'booking' => 'Rezervasyon',
                ],

                'type'       => [
                    'booking' => 'Rezervasyon',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => 'Rezervasyon Tarihi',
                    'booking-detailes' => 'Rezervasyon Detayları',
                    'canceled'         => 'İptal Edildi',
                    'closed'           => 'Kapalı',
                    'done'             => 'Tamamlandı',
                    'order-id'         => 'Sipariş Kimliği',
                    'pending'          => 'Beklemede',
                    'price'            => 'Fiyat',
                    'status'           => 'Durum',
                    'time-slot'        => 'Zaman Aralığı:',
                    'view-details'     => 'Detayları Görüntüle',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => 'Oluşturulma Tarihi',
                        'from'         => 'Başlangıç',
                        'id'           => 'ID',
                        'order-id'     => 'Sipariş ID',
                        'qty'          => 'MKT',
                        'to'           => 'Bitiş',
                    ],

                    'title'    => 'Rezervasyon Ürünü',
                ],

                'title' => 'Rezervasyon Ürünü',
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
                        'choose-rent-option' => 'Choose Rent Option',
                        'daily-basis'        => 'Daily Basis',
                        'from'               => 'From',
                        'hourly-basis'       => 'Hourly Basis',
                        'rent-an-item'       => 'Rent an Item',
                        'select-date'        => 'Select date',
                        'select-rent-time'   => 'Select Rent Time',
                        'select-slot'        => 'Select Slot',
                        'slot'               => 'Slot',
                        'to'                 => 'To',
                    ],

                    'slots'       => [
                        'book-an-appointment' => 'Book an Appointment',
                        'date'                => 'Date',
                        'no-slots-available'  => 'No slots available',
                        'title'               => 'Slot',
                    ],

                    'table'       => [
                        'book-a-table'       => 'Book a Table',
                        'closed'             => 'Closed',
                        'slots-for-all-days' => 'Show for all days',
                        'special-notes'      => 'Special Request/Notes',
                        'today-availability' => 'Today Availability',
                    ],
                ],
            ],
        ],
    ],
];
