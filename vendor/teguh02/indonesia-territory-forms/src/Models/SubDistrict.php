<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Illuminate\Support\Facades\Cache;

class SubDistrict extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'subdistrict';

    # Define the columns that will be fetched
    const COLUMNS = [
        'subdis_id',
        'subdis_name'
    ];

    /**
     * Get all subdistricts by district
     *
     * @param integer $dis_id
     * @return array
     */
    function subdistrict_by_district(int $dis_id) : array
    {
        return (array) Cache::remember('subdistrict_by_district_'.$dis_id, config('indonesia-territory-forms.cache_ttl'), function() use ($dis_id) {
            return $this->db()
                        ->query('SELECT '. implode(',', self::COLUMNS) .' FROM '. self::TABLE .' WHERE dis_id = '. $dis_id .' ORDER BY subdis_name ASC')
                        ->fetchAll(parent::$FETCH_ASSOC);
        });
    }

}