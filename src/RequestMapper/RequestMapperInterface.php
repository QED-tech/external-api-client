<?php

declare(strict_types=1);

namespace ExternalApiClient\RequestMapper;

use ExternalApiClient\Request\EXRequestInterface;
use Psr\Http\Message\RequestInterface;

interface RequestMapperInterface
{
    /**
     * @param EXRequestInterface $request
     * @return RequestInterface
     */
    public function map(EXRequestInterface $request): RequestInterface;
}
