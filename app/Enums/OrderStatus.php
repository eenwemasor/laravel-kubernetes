<?php

namespace App\Enums;

enum OrderStatus: string
{
    case PENDING = 'PENDING';
    case CANCELLED = 'CANCELLED';
    case PROOFING = 'PROOFING';
    case REPROOF = 'REPROOF';
    case UNDER_REVIEW = 'UNDER_REVIEW';
    case APPROVED = 'APPROVED';
    case PRINTING = 'PRINTING';
    case PRINTED = 'PRINTED';
    case SHIPPED = 'SHIPPED';
    case DELIVERED = 'DELIVERED';
    case COMPLETED = 'COMPLETED';
}