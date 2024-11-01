<?php

namespace Upgradelabs\Reduniq;

use Saloon\Http\Connector;

class Reduniq extends Connector
{
    public function resolveBaseUrl(): string
    {
        return match (config('reduniq.environment')) {
            'production' => 'https://pagamentos.reduniq.pt/api-gateway/v6.0/rest',
            default => 'https://pagamentos.sandbox.reduniq.pt/api-gateway/v6.0/rest',
        };
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }
}
