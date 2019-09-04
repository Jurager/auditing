<?php

namespace Jurager\Auditing\Contracts;

interface AuditDriver
{
    /**
     * Perform an audit.
     *
     * @param \Jurager\Auditing\Contracts\Auditable $model
     *
     * @return \Jurager\Auditing\Contracts\Audit
     */
    public function audit(Auditable $model): Audit;

    /**
     * Remove older audits that go over the threshold.
     *
     * @param \Jurager\Auditing\Contracts\Auditable $model
     *
     * @return bool
     */
    public function prune(Auditable $model): bool;
}
