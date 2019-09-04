<?php

namespace Jurager\Auditing\Resolvers;

use Illuminate\Support\Facades\Request;

class IpAddressResolver implements \Jurager\Auditing\Contracts\IpAddressResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve(): string
    {
        return Request::ip();
    }
}
