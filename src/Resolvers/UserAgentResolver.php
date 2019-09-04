<?php

namespace Jurager\Auditing\Resolvers;

use Illuminate\Support\Facades\Request;

class UserAgentResolver implements \Jurager\Auditing\Contracts\UserAgentResolver
{
    /**
     * {@inheritdoc}
     */
    public static function resolve()
    {
        return Request::header('User-Agent');
    }
}
