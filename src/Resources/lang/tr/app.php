<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'types'       => [
                        'booking' => [
                            'available-from'       => 'Şuradan Mevcut',
                            'available-to'         => 'Şuraya Kadar Mevcut',

                            'available-every-week' => [
                                'no'    => 'Hayır',
                                'title' => 'Her Hafta Mevcut',
                                'yes'   => 'Evet',
                            ],

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
                                'slot-duration'    => 'Slot Süresi (Dakika)',
                                'slot-title'       => 'Slot Zaman Süresi',
                                'title'            => 'Varsayılan',
                                'unavailable'      => 'kullanım dışı',
                            ],

                            'event'       => [
                                'add'                => 'Bilet Ekle',
                                'delete'             => 'Sil',
                                'description'        => 'Açıklama',
                                'description-info'   => 'Uygun bilet bulunmamaktadır.',
                                'edit'               => 'Düzenle',

                                'modal'              => [
                                    'edit' => 'Biletleri Düzenle',
                                    'save' => 'Kaydet',
                                ],

                                'name'               => 'Ad',
                                'price'              => 'Fiyat',
                                'qty'                => 'Miktar',
                                'special-price'      => 'Özel Fiyat',
                                'special-price-from' => 'Özel Fiyat - Başlangıç',
                                'special-price-to'   => 'Özel Fiyat - Bitiş',
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

                            'location'             => 'Konum',
                            'qty'                  => 'Adet',

                            'rental'      => [
                                'daily'                  => 'Günlük',
                                'daily-hourly'           => 'Hem Günlük Hem Saatlik',
                                'daily-price'            => 'Günlük Fiyat',
                                'hourly'                 => 'Saatlik',
                                'hourly-price'           => 'Saatlik Fiyat',

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
                'closed'           => 'Kapalı',

                'cart'             => [
                    'booking-from' => 'Rezervasyon Başlangıç ​​Tarihi:',
                    'booking-till' => 'Şu tarihe kadar rezervasyon:',
                    'daily'        => 'Günlük Bazda',
                    'event-from'   => 'Etkinlik Başlangıç ​​Tarihi',
                    'event-ticket' => 'Etkinlik Bileti',
                    'event-till'   => 'Etkinlik Bitiş Tarihi',
                    'hourly'       => 'Saatlik bazda',

                    'integrity' => [
                        'event' => [
                            'expired' => 'Bu etkinlik süresi doldu.',
                        ],

                        'missing_options'        => 'Bu ürün için seçenekler eksik.',
                        'inventory_warning'      => 'İstenen miktar mevcut değil, lütfen daha sonra tekrar deneyin.',
                        'select_hourly_duration' => 'Bir saatlik bir zaman aralığı seçin.',
                    ],

                    'rent-from'    => 'Kiralama Yeri',
                    'rent-till'    => 'Şu Kadar Kirala',
                    'rent-type'    => 'Kira Türü',
                    'renting_type' => 'Kira Türü',
                    'special-note' => 'Özel İstek/Notlar',
                ],

                'per-ticket-price' => ':price Bilet Başına',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => 'Kapalı',
                            'today-availability' => 'Bugün Kullanılabilirlik',
                        ],

                        'event'       => [
                            'book-your-ticket' => 'Biletinizi Ayırın',
                        ],

                        'event-on'                 => 'Etkinlik Açık',
                        'location'                 => 'Konum',

                        'rental'      => [
                            'choose-rent-option' => 'Kiralama Seçeneğini Seçin',
                            'daily-basis'        => 'Günlük Bazda',
                            'from'               => 'İtibaren',
                            'hourly-basis'       => 'Saatlik bazda',
                            'rent-an-item'       => 'Bir Ürün Kirala',
                            'select-date'        => 'Tarih seç',
                            'select-rent-time'   => 'Kiralama Süresini Seçin',
                            'select-slot'        => 'Yuva Seç',
                            'select-time-slot'   => 'Zaman Aralığını Seçin',
                            'slot'               => 'Yuva',
                            'to'                 => 'İle',
                        ],

                        'slot-duration-in-minutes' => ':minutes dakika',
                        'slot-duration'            => 'Yuva Süresi',

                        'slots'       => [
                            'book-an-appointment' => 'Randevu Alın',
                            'date'                => 'Tarih',
                            'no-slots-available'  => 'Kullanılabilir yuva yok',
                            'select-slot'         => 'Yuva Seç',
                            'title'               => 'Yuva',
                        ],

                        'table'       => [
                            'book-a-table'       => 'Bir masa rezervasyonu',
                            'closed'             => 'Kapalı',
                            'slots-for-all-days' => 'Tüm günler için göster',
                            'special-notes'      => 'Özel İstek/Notlar',
                            'today-availability' => 'Bugün Kullanılabilirlik',
                        ],

                        'view-on-map'              => 'Haritada görüntüle',
                    ],
                ],
            ],
        ],
    ],
];
