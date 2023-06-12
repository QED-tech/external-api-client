<?php

declare(strict_types=1);

namespace ExternalApiClient\ResponseMapper;

use Psr\Http\Message\ResponseInterface;

interface ResponseMapperInterface
{
    public function map(ResponseInterface $request, string $responseClassName): object;
}
