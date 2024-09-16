<?php

namespace Webkul\BookingProduct\DataGrids\Admin\Catalog;

use Illuminate\Support\Facades\DB;
use Webkul\Admin\DataGrids\Catalog\ProductDataGrid as baseProductDataGrid;

class ProductDataGrid extends baseProductDataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        $tablePrefix = DB::getTablePrefix();

        /**
         * Query Builder to fetch records from `product_flat` table
         */
        $queryBuilder = DB::table('product_flat')
            ->distinct()
            ->leftJoin('attribute_families as af', 'product_flat.attribute_family_id', '=', 'af.id')
            ->leftJoin('product_inventories', 'product_flat.product_id', '=', 'product_inventories.product_id')
            ->leftJoin('product_images', 'product_flat.product_id', '=', 'product_images.product_id')
            ->leftJoin('product_categories as pc', 'product_flat.product_id', '=', 'pc.product_id')
            ->leftJoin('category_translations as ct', function ($leftJoin) {
                $leftJoin->on('pc.category_id', '=', 'ct.category_id')
                    ->where('ct.locale', app()->getLocale());
            })
            ->leftJoin('booking_products', function ($join) {
                $join->on('product_flat.product_id', '=', 'booking_products.product_id')
                    ->where('product_flat.type', 'booking');
            })
            ->leftJoin('booking_product_event_tickets', function ($join) {
                $join->on('booking_products.id', '=', 'booking_product_event_tickets.booking_product_id')
                    ->where('booking_products.type', 'event');
            })
            ->select(
                'product_flat.locale',
                'product_flat.channel',
                'product_images.path as base_image',
                'pc.category_id',
                'ct.name as category_name',
                'product_flat.product_id',
                'product_flat.sku',
                'product_flat.name',
                'product_flat.type',
                'product_flat.status',
                'product_flat.price',
                'product_flat.url_key',
                'product_flat.visible_individually',
                'af.name as attribute_family',
                // DB::raw('SUM(DISTINCT '.$tablePrefix.'product_inventories.qty) as quantity'),
                DB::raw('COUNT(DISTINCT '.$tablePrefix.'product_images.id) as images_count'),
                // DB::raw('IF(booking_products.type = "event", SUM(booking_product_event_tickets.qty), booking_products.qty) as booking_qty')
                DB::raw('IF(
                    product_flat.type = "booking", 
                    IF(booking_products.type = "event", 
                        SUM(booking_product_event_tickets.qty), 
                        booking_products.qty
                    ), 
                    SUM(DISTINCT product_inventories.qty)
                ) as quantity')
            )
            ->where('product_flat.locale', app()->getLocale())
            ->groupBy('product_flat.product_id');

        // ->select(
        //     'product_flat.locale',
        //     'product_flat.channel',
        //     'product_images.path as base_image',
        //     'pc.category_id',
        //     'ct.name as category_name',
        //     'product_flat.product_id',
        //     'product_flat.sku',
        //     'product_flat.name',
        //     'product_flat.type',
        //     'product_flat.status',
        //     'product_flat.price',
        //     'product_flat.url_key',
        //     'product_flat.visible_individually',
        //     'af.name as attribute_family',
        //     DB::raw('SUM(DISTINCT product_inventories.qty) as quantity'),
        //     DB::raw('COUNT(DISTINCT product_images.id) as images_count'),
        //     // Conditional quantity based on product type and event/booking
        //      DB::raw('IF(
        //     product_flat.type = "booking",
        //     IF(booking_products.type = "event",
        //         SUM(booking_product_event_tickets.qty),
        //         booking_products.qty
        //     ),
        //     SUM(DISTINCT product_inventories.qty)
        // ) as quantity')
        // )
        // ->where('product_flat.locale', app()->getLocale())
        // ->groupBy('product_flat.product_id');

        $this->addFilter('product_id', 'product_flat.product_id');
        $this->addFilter('channel', 'product_flat.channel');
        $this->addFilter('locale', 'product_flat.locale');
        $this->addFilter('name', 'product_flat.name');
        $this->addFilter('type', 'product_flat.type');
        $this->addFilter('status', 'product_flat.status');
        $this->addFilter('attribute_family', 'af.id');

        return $queryBuilder;
    }
}
