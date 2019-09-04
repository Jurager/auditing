<?php

namespace Jurager\Auditing\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model implements \Jurager\Auditing\Contracts\Audit
{
    use \Jurager\Auditing\Audit;

    /**
     * {@inheritdoc}
     */
    protected $guarded = [];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'old_values'   => 'json',
        'new_values'   => 'json',
        'auditable_id' => 'integer',
    ];
}
