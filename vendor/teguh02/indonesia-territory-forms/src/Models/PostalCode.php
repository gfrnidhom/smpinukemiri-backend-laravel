<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Illuminate\Support\Facades\Cache;
class PostalCode extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'postal_code';

    # Define the columns that will be fetched
    const COLUMNS = [
        'postal_id',
        'postal_code'
    ];

    /**
     * Get all postal code by subdistrict
     *
     * @param integer $subdis_id
     * @return array
     */
    function postal_code_by_subdistrict(int $subdis_id) : array
    {
        return (array) Cache::remember('postal_code_by_subdistrict_'.$subdis_id, config('indonesia-territory-forms.cache_ttl'), function() use ($subdis_id) {
            return $this->db()
                        ->query('SELECT '. implode(',', self::COLUMNS) .' FROM '. self::TABLE .' WHERE subdis_id = '. $subdis_id .' ORDER BY postal_code ASC')
                        ->fetchAll(parent::$FETCH_ASSOC);
        });
    }

}