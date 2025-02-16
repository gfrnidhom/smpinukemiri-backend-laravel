<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Illuminate\Support\Facades\Cache;

class District extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'district';

    # Define the columns that will be fetched
    const COLUMNS = [
        'dis_id',
        'dis_name'
    ];

    /**
     * Get all districts by city
     *
     * @param integer $city_id
     * @return array
     */
    function district_by_city(int $city_id) : array {
        return (array) Cache::remember('district_by_city_'.$city_id, config('indonesia-territory-forms.cache_ttl'), function() use ($city_id) {
            return $this->db()
                        ->query('SELECT '. implode(',', self::COLUMNS) .' FROM '. self::TABLE .' WHERE city_id = '. $city_id .' ORDER BY dis_name ASC')
                        ->fetchAll(parent::$FETCH_ASSOC);
        });
    }

}