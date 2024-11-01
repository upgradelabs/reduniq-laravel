<?php

namespace Upgradelabs\Reduniq\DTO\Requests;

use Carbon\Carbon;
use Upgradelabs\Reduniq\Enums\PaymentAction;
use Upgradelabs\Reduniq\Enums\PaymentSolution;

readonly class InitPaymentRequestDTO
{
    public function __construct(
        public string $username,
        public string $password,
        public PaymentAction $action,
        public PaymentSolution $solution,
        public string $description,
        public mixed $ref,
        public int $amount,
        public Carbon $date,
        public string $buyerName,
        public string $buyerEmail,
        public string $buyerPhone,
        public string $returnUrlOk,
        public string $returnUrlError,
    ) {}
}
