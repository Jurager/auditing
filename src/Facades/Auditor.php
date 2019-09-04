<?php

namespace Jurager\Auditing\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jurager\Auditing\Contracts\AuditDriver auditDriver(\Jurager\Auditing\Contracts\Auditable $model);
 * @method static void execute(\Jurager\Auditing\Contracts\Auditable $model);
 */
class Auditor extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return \Jurager\Auditing\Contracts\Auditor::class;
    }
}
