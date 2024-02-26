<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'スロット間の休憩時間（分）',
                            'slot-duration'          => 'スロットの期間（分）',

                            'same-slot-for-all-days' => [
                                'no'    => 'いいえ',
                                'title' => '全ての日で同じスロット',
                                'yes'   => 'はい',
                            ],
                        ],

                        'default'     => [
                            'add'              => '追加',
                            'break-duration'   => 'スロット間の休憩時間（分）',
                            'close'            => '閉じる',
                            'description'      => '予約情報',
                            'description-info' => 'スロットに基づいて時間の期間が作成され、表示されます。',
                            'edit'             => '編集',
                            'many'             => '1日に複数の予約',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'スロットを追加',
                                    'close'      => '閉じる',
                                    'day'        => '曜日',
                                    'edit-title' => 'スロットを編集',
                                    'friday'     => '金曜日',
                                    'from'       => '開始',
                                    'from-day'   => '開始日',
                                    'from-time'  => '開始時間',
                                    'monday'     => '月曜日',
                                    'open'       => '開始',
                                    'saturday'   => '土曜日',
                                    'save'       => '保存する',
                                    'select'     => '選択',
                                    'status'     => 'ステータス',
                                    'sunday'     => '日曜日',
                                    'thursday'   => '木曜日',
                                    'to'         => '終了',
                                    'to-day'     => '終了日',
                                    'to-time'    => '終了時間',
                                    'tuesday'    => '火曜日',
                                    'wednesday'  => '水曜日',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'              => '複数日のための1つの予約',
                            'open'             => '開く',
                            'slot-add'         => 'スロットを追加',
                            'slot-title'       => 'スロットの時間の期間',
                            'slot-duration'    => 'スロットの期間（分）',
                            'title'            => 'デフォルト',
                            'unavailable'      => '利用不可',
                        ],

                        'event'       => [
                            'add'                => 'チケットを追加',
                            'delete'             => '削除',
                            'description-info'   => '利用可能なチケットはありません。',
                            'description'        => '説明',
                            'edit'               => '編集',

                            'modal'              => [
                                'save' => '保存する',
                            ],

                            'name'               => '名前',
                            'price'              => '価格',
                            'qty'                => '数量',
                            'special-price-from' => '特別価格 開始',
                            'special-price-to'   => '特別価格 終了',
                            'special-price'      => '特別価格',
                            'title'              => 'チケット',
                            'valid-from'         => '有効開始日',
                            'valid-until'        => '有効終了日',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'チケットを追加',
                            ],

                            'slots'   => [
                                'add'         => 'スロットを追加',
                                'description' => '利用可能なスロットと時間の期間。',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => '両方（デイリーおよび時間単位）',
                            'daily-price'            => 'デイリープライス',
                            'daily'                  => 'デイリーベース',
                            'hourly-price'           => '時間単位の価格',
                            'hourly'                 => '時間単位のベース',

                            'same-slot-for-all-days' => [
                                'no'    => 'いいえ',
                                'title' => '全ての日で同じスロット',
                                'yes'   => 'はい',
                            ],

                            'title'                  => 'レンタルタイプ',
                        ],

                        'slots'       => [
                            'add'              => 'スロットを追加',

                            'action'           => [
                                'add' => '追加',
                            ],

                            'description-info' => 'スロットに基づいて時間の期間が作成され、表示されます。',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => '金曜日',
                                    'from'       => '開始',
                                    'monday'     => '月曜日',
                                    'saturday'   => '土曜日',
                                    'sunday'     => '日曜日',
                                    'thursday'   => '木曜日',
                                    'to'         => '終了',
                                    'tuesday'    => '火曜日',
                                    'wednesday'  => '水曜日',
                                ],
                            ],

                            'save'             => '保存',
                            'title'            => 'スロットの時間の期間',
                            'unavailable'      => '利用不可',
                        ],

                        'table'       => [
                            'break-duration'            => 'スロット間の休憩時間（分）',

                            'charged-per'               => [
                                'guest'  => 'ゲスト',
                                'table'  => 'テーブル',
                                'title'  => 'プライトチャージ',
                            ],

                            'guest-capacity'            => 'ゲスト収容人数',
                            'guest-limit'               => 'テーブルごとのゲスト制限',
                            'prevent-scheduling-before' => '前日予約防止',
                            'slot-duration'             => 'スロットの期間（分）',

                            'same-slot-for-all-days'    => [
                                'no'    => 'いいえ',
                                'title' => '全ての日で同じスロット',
                                'yes'   => 'はい',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => '利用可能開始日',
                            'available-to'         => '利用可能終了日',

                            'available-every-week' => [
                                'no'    => 'いいえ',
                                'title' => '毎週利用可能',
                                'yes'   => 'はい',
                            ],

                            'location'             => '場所',
                            'qty'                  => '数量',

                            'type'                 => [
                                'appointment' => '予約',
                                'default'     => 'デフォルト',
                                'event'       => 'イベント',
                                'many'        => 'たくさん',
                                'one'         => '1つ',
                                'rental'      => 'レンタル',
                                'table'       => 'テーブル',
                                'title'       => 'タイプ',
                            ],

                            'title'                => '予約タイプ',
                        ],
                    ],
                ],

                'index'   => [
                    'booking' => '予約',
                ],

                'type'   => [
                    'booking' => '予約',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => '予約日',
                    'booking-detailes' => '予約詳細',
                    'canceled'         => 'キャンセル',
                    'closed'           => '閉じる',
                    'done'             => '完了',
                    'order-id'         => '注文ID',
                    'pending'          => '保留中',
                    'price'            => '価格',
                    'status'           => 'ステータス',
                    'time-slot'        => '時間帯：',
                    'view-details'     => '詳細を表示',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => '作成日',
                        'from'         => '開始',
                        'id'           => 'ID',
                        'order-id'     => '注文ID',
                        'qty'          => '数量',
                        'to'           => '終了',
                    ],

                    'title' => '予約製品',
                ],

                'title' => '予約製品',
            ],
        ],
    ],

    'component' => [
        'modal' => [
            'close' => '閉じる',
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => '閉じています',

                'cart'             => [
                    'booking-from' => '予約開始日時',
                    'booking-till' => '予約終了日時',
                    'daily'        => '毎日',
                    'event-from'   => 'イベント開始',
                    'event-ticket' => 'イベントチケット',
                    'event-till'   => 'イベント終了',

                    'integrity'    => [
                        'missing_options'        => 'この製品のオプションがありません。',
                        'select_hourly_duration' => '1時間のスロットの期間を選択してください。',
                    ],

                    'rent-from'    => 'レンタル開始',
                    'rent-till'    => 'レンタル終了',
                    'rent-type'    => 'レンタルタイプ',
                    'renting_type' => 'レンタルタイプ',
                    'special-note' => '特別リクエスト/メモ',
                ],

                'per-ticket-price' => ':price チケットごと',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'event-on'                 => 'イベント日',
                        'location'                 => '場所',
                        'slot-duration-in-minutes' => ':minutes 分',
                        'slot-duration'            => 'スロット期間',
                        'view-on-map'              => 'マップで表示',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => '閉じています',
                        'today-availability' => '今日の利用可能性',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'チケットを予約する',
                    ],

                    'rental'      => [
                        'choose-rent-option' => 'レンタルオプションを選択する',
                        'daily-basis'        => '日次ベース',
                        'from'               => '開始',
                        'hourly-basis'       => '時間単位ベース',
                        'rent-an-item'       => 'アイテムをレンタルする',
                        'select-date'        => '日付を選択する',
                        'select-rent-time'   => 'レンタル時間を選択する',
                        'select-slot'        => 'スロットを選択する',
                        'slot'               => 'スロット',
                        'to'                 => '終了',
                    ],

                    'slots'       => [
                        'book-an-appointment' => '予約する',
                        'date'                => '日付',
                        'no-slots-available'  => '利用可能なスロットはありません',
                        'title'               => 'スロット',
                    ],

                    'table'       => [
                        'book-a-table'       => 'テーブルを予約する',
                        'closed'             => '閉じています',
                        'slots-for-all-days' => 'すべての日にちを表示',
                        'special-notes'      => '特別リクエスト/メモ',
                        'today-availability' => '今日の利用可能性',
                    ],
                ],
            ],
        ],
    ],
];
