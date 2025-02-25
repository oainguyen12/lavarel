<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware; // nếu dùng package này

class TrustProxies extends Middleware
{
    /**
     * Danh sách proxy được tin cậy.
     *
     * @var array|string|null
     */
    protected $proxies = '*';

    /**
     * Các header cho proxy.
     *
     * @var int
     */
    protected $headers = \Illuminate\Http\Request::HEADER_X_FORWARDED_ALL;
}
