<?php

namespace App\Enums;

use phpDocumentor\Reflection\Types\Self_;

enum CheckoutStepsEnum: int {
    case INFORMATION = 1;
    case SHIPPING = 2;
    case PAYMENT = 3;

    public function getName(): string
    {
        return match ($this) {
            self::INFORMATION => 'Informação',
            self::SHIPPING => 'Frete',
            self::PAYMENT => 'Pagamento',
        };
    }
}

