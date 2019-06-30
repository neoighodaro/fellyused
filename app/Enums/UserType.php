<?php

namespace App\Enums;

class UserType
{
    const SELLER = 'seller';
    const CUSTOMER = 'customer';

    /**
     * Returns a list of available users.
     *
     * @return array
     */
    public static function available(): array
    {
        return [
            static::SELLER,
            static::CUSTOMER,
        ];
    }
}
