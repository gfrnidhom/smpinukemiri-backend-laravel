<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Illuminate\Support\Facades\Cache;
class City extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'city';

    # Define the columns that will be fetched
    const COLUMNS = [
        'city_id',
        'city_name'
    ];

    /**
     * Get all cities by province
     *
     * @param integer $prov_id
     * @return array
     */
    function city_by_provincy(int $prov_id) : array
    {
        return (array) Cache::remember('city_by_province_'.$prov_id, config('indonesia-territory-forms.cache_ttl'), function() use ($prov_id) {
            return $this->db()
                        ->query('SELECT '. implode(',', self::COLUMNS) .' FROM '. self::TABLE .' WHERE prov_id = '. $prov_id .' ORDER BY city_name ASC')
                        ->fetchAll(parent::$FETCH_ASSOC);
        });
    }

}