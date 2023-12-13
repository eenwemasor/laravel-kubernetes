<?php

namespace App\Enums;

interface StatusCode
{
    const OK = 200;
    const DELETED = 200;
    const CREATED = 201;
    const UPDATED = 202;
    const NO_CONTENT = 204;
    const PARTIAL_CONTENT = 206;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const BAD_RESPONSE = 407;
    const VALIDATION = 422;
    const SERVER_ERROR = 500;
    const SERVICE_UNAVAILABLE = 503;
}
