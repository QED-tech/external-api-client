<?php

declare(strict_types=1);

namespace ExternalApiClient;

use ExternalApiClient\Request\EXRequestInterface;
use ExternalApiClient\RequestMapper\RequestMapperInterface;
use ExternalApiClient\ResponseMapper\ResponseMapperInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;

class Client
{
    /**
     * @param ResponseMapperInterface $responseMapper
     * @param ClientInterface $psrClient
     * @param RequestMapperInterface $requestMapper
     */
    public function __construct(
        private ResponseMapperInterface $responseMapper,
        private ClientInterface $psrClient,
        private RequestMapperInterface $requestMapper
    ) {
    }

    /**
     * @param EXRequestInterface $request
     * @param class-string<T> $responseClassName
     * @return T
     * @throws ClientExceptionInterface
     * @template T of object
     */
    public function request(
        EXRequestInterface $request,
        string $responseClassName
    ): object {
        $psrRequest = $this->requestMapper->map($request);

        $response = $this->psrClient->sendRequest($psrRequest);

        /** @var T */
        return $this->responseMapper->map($response, $responseClassName);
    }
}
