<?php

namespace Upgradelabs\Reduniq\Enums;

enum PaymentAction: int
{
    case AUTORIZACAO = 100;
    case AUTORIZACAO_E_CAPTURA = 101;
}
