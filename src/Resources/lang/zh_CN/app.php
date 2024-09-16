<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit' => [
                    'types'   => [
                        'booking' => [
                            'available-from'       => '从可用',
                            'available-to'         => '到可用',

                            'available-every-week' => [
                                'no'    => '否',
                                'title' => '每周都可用',
                                'yes'   => '是',
                            ],

                            'appointment' => [
                                'break-duration'         => '时间间隔（分钟）',
                                'slot-duration'          => '时隙时长（分钟）',

                                'same-slot-for-all-days' => [
                                    'no'    => '否',
                                    'title' => '所有天使用相同时隙',
                                    'yes'   => '是',
                                ],
                            ],

                            'default'     => [
                                'add'              => '添加',
                                'break-duration'   => '时间间隔（分钟）',
                                'close'            => '关闭',
                                'description'      => '预约信息',
                                'description-info' => '根据时隙将创建并显示时间段。',
                                'edit'             => '编辑',
                                'many'             => '一天内的多次预约',

                                'modal'            => [
                                    'slot' => [
                                        'add-title'  => '添加时间段',
                                        'close'      => '关闭',
                                        'day'        => '日期',
                                        'edit-title' => '编辑时间段',
                                        'friday'     => '星期五',
                                        'from'       => '从',
                                        'from-day'   => '从日期',
                                        'from-time'  => '从时间',
                                        'monday'     => '星期一',
                                        'open'       => '开放',
                                        'saturday'   => '星期六',
                                        'save'       => '保存',
                                        'select'     => '选择',
                                        'status'     => '状态',
                                        'sunday'     => '星期天',
                                        'thursday'   => '星期四',
                                        'to'         => '至',
                                        'to-day'     => '至日期',
                                        'to-time'    => '至时间',
                                        'tuesday'    => '星期二',
                                        'wednesday'  => '星期三',
                                        'week'       => ':day',
                                    ],
                                ],

                                'one'              => '一天内的一次预约',
                                'open'             => '开放',
                                'slot-add'         => '添加时隙',
                                'slot-duration'    => '时隙时长（分钟）',
                                'slot-title'       => '时隙时长',
                                'title'            => '默认',
                                'unavailable'      => '不可用',
                            ],

                            'event'       => [
                                'add'                => '添加门票',
                                'delete'             => '删除',
                                'description'        => '描述',
                                'description-info'   => '没有可用的门票。',
                                'edit'               => '编辑',

                                'modal'              => [
                                    'edit' => '编辑门票',
                                    'save' => '保存',
                                ],

                                'name'               => '名称',
                                'price'              => '价格',
                                'qty'                => '数量',
                                'special-price'      => '特价',
                                'special-price-from' => '特价开始时间',
                                'special-price-to'   => '特价结束时间',
                                'title'              => '门票',
                                'valid-from'         => '有效开始时间',
                                'valid-until'        => '有效结束时间',
                            ],

                            'empty-info'  => [
                                'tickets' => [
                                    'add' => '添加门票',
                                ],

                                'slots'   => [
                                    'add'         => '添加时隙',
                                    'description' => '可用时隙及时长。',
                                ],
                            ],

                            'location'             => '位置',
                            'qty'                  => '数量',

                            'rental'      => [
                                'daily'                  => '每日',
                                'daily-hourly'           => '日常和每小时',
                                'daily-price'            => '每日价格',
                                'hourly'                 => '每小时',
                                'hourly-price'           => '每小时价格',

                                'same-slot-for-all-days' => [
                                    'no'    => '否',
                                    'title' => '所有天使用相同时隙',
                                    'yes'   => '是',
                                ],

                                'title'                  => '租赁类型',
                            ],

                            'slots'       => [
                                'add'              => '添加时隙',

                                'action'           => [
                                    'add' => '添加',
                                ],

                                'description-info' => '根据时隙将创建并显示时间段。',

                                'modal'            => [
                                    'slot' => [
                                        'friday'     => '星期五',
                                        'from'       => '从',
                                        'monday'     => '星期一',
                                        'saturday'   => '星期六',
                                        'sunday'     => '星期天',
                                        'thursday'   => '星期四',
                                        'to'         => '至',
                                        'tuesday'    => '星期二',
                                        'wednesday'  => '星期三',
                                    ],
                                ],

                                'save'             => '保存',
                                'title'            => '时隙时长',
                                'unavailable'      => '不可用',
                            ],

                            'table'       => [
                                'break-duration'            => '时间间隔（分钟）',

                                'charged-per'               => [
                                    'guest'  => '客人',
                                    'table'  => '桌子',
                                    'title'  => '计费方式',
                                ],

                                'guest-capacity'            => '客人容量',
                                'guest-limit'               => '每桌客人限制',
                                'prevent-scheduling-before' => '在此之前禁止预订',
                                'slot-duration'             => '时隙时长（分钟）',

                                'same-slot-for-all-days'    => [
                                    'no'    => '否',
                                    'title' => '所有天使用相同时隙',
                                    'yes'   => '是',
                                ],
                            ],

                            'type' => [
                                'appointment' => '预约预订',
                                'default'     => '默认预订',
                                'event'       => '事件预订',
                                'many'        => '多个',
                                'one'         => '一个',
                                'rental'      => '租赁预订',
                                'table'       => '桌子预订',
                                'title'       => '类型',
                            ],

                            'title'                => '预订类型',
                        ],
                    ],
                ],

                'index'   => [
                    'booking' => '预订',
                ],

                'type'   => [
                    'booking' => '预订',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'calendar' => [
                    'booking-date'     => '预订日期',
                    'booking-detailes' => '预订详情',
                    'canceled'         => '已取消',
                    'closed'           => '已关闭',
                    'done'             => '已完成',
                    'order-id'         => '订单编号',
                    'pending'          => '待处理',
                    'price'            => '价格',
                    'status'           => '状态',
                    'time-slot'        => '时间段：',
                    'view-details'     => '查看详情',
                ],

                'index' => [
                    'datagrid' => [
                        'created-date' => '创建日期',
                        'from'         => '从',
                        'id'           => 'ID',
                        'order-id'     => '订单ID',
                        'qty'          => '数量',
                        'to'           => '到',
                    ],

                    'title'    => '预订产品',
                ],

                'title' => '预订产品',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed'           => '已关闭',

                'cart'             => [
                    'booking-from' => '预订从',
                    'booking-till' => '预订至',
                    'daily'        => '每日基础',
                    'event-from'   => '活动开始于',
                    'event-ticket' => '活动门票',
                    'event-till'   => '活动结束于',
                    'hourly'       => '按小时计算',

                    'integrity' => [
                        'event' => [
                            'expired' => '此活动已过期。',
                        ],

                        'missing_options'        => '此产品缺少选项。',
                        'inventory_warning'      => '所请求的数量不可用，请稍后重试。',
                        'select_hourly_duration' => '选择一个小时的时段。',
                    ],

                    'rent-from'    => '租赁从',
                    'rent-till'    => '租赁至',
                    'rent-type'    => '租赁类型',
                    'renting_type' => '租赁类型',
                    'special-note' => '特殊要求/备注',
                ],

                'per-ticket-price' => ':price 每张票',
            ],

            'view'    => [
                'types'   => [
                    'booking' => [
                        'appointment' => [
                            'closed'             => '已关闭',
                            'today-availability' => '今日可预订',
                        ],

                        'event'       => [
                            'book-your-ticket' => '预订您的门票',
                        ],

                        'event-on'                 => '活动时间',
                        'location'                 => '地点',

                        'rental'      => [
                            'choose-rent-option' => '选择租赁选项',
                            'daily-basis'        => '按日计费',
                            'from'               => '从',
                            'hourly-basis'       => '按小时计费',
                            'rent-an-item'       => '租赁物品',
                            'select-date'        => '选择日期',
                            'select-rent-time'   => '选择租赁时间',
                            'select-slot'        => '选择时间段',
                            'select-time-slot'   => '选择时段',
                            'slot'               => '时间段',
                            'to'                 => '至',
                        ],

                        'slot-duration-in-minutes' => ':minutes 分钟',
                        'slot-duration'            => '时间段',

                        'slots'       => [
                            'book-an-appointment' => '预订约会',
                            'date'                => '日期',
                            'no-slots-available'  => '没有可用时间段',
                            'select-slot'         => '选择时间段',
                            'title'               => '时间段',
                        ],

                        'table'       => [
                            'book-a-table'       => '预订桌位',
                            'closed'             => '已关闭',
                            'slots-for-all-days' => '显示所有日期',
                            'special-notes'      => '特殊要求/备注',
                            'today-availability' => '今日可用',
                        ],

                        'view-on-map'              => '在地图上查看',
                    ],
                ],
            ],
        ],
    ],
];
