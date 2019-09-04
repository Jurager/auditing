<?php

namespace Jurager\Auditing\Events;

use Jurager\Auditing\Contracts\Audit;
use Jurager\Auditing\Contracts\Auditable;
use Jurager\Auditing\Contracts\AuditDriver;

class Audited
{
    /**
     * The Auditable model.
     *
     * @var \Jurager\Auditing\Contracts\Auditable
     */
    public $model;

    /**
     * Audit driver.
     *
     * @var \Jurager\Auditing\Contracts\AuditDriver
     */
    public $driver;

    /**
     * The Audit model.
     *
     * @var \Jurager\Auditing\Contracts\Audit|null
     */
    public $audit;

    /**
     * Create a new Audited event instance.
     *
     * @param \Jurager\Auditing\Contracts\Auditable   $model
     * @param \Jurager\Auditing\Contracts\AuditDriver $driver
     * @param \Jurager\Auditing\Contracts\Audit       $audit
     */
    public function __construct(Auditable $model, AuditDriver $driver, Audit $audit = null)
    {
        $this->model = $model;
        $this->driver = $driver;
        $this->audit = $audit;
    }
}
