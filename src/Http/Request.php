<?php namespace Neomerx\JsonApi\Http;

/**
 * Copyright 2015-2017 info@neomerx.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use \Closure;
use \LogicException;
use \Psr\Http\Message\MessageInterface;
use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\StreamInterface;
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\UriInterface;

/**
 * @package Neomerx\JsonApi
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class Request implements ServerRequestInterface
{
    /**
     * @var Closure
     */
    private $getMethodClosure;

    /**
     * @var Closure
     */
    private $getHeaderClosure;

    /**
     * @var Closure
     */
    private $getQueryParamsClosure;

    /**
     * @param Closure $getMethodClosure
     * @param Closure $getHeaderClosure
     * @param Closure $getQueryParamsClosure
     *
     * @SuppressWarnings(PHPMD.LongVariable)
     */
    public function __construct(
        Closure $getMethodClosure,
        Closure $getHeaderClosure,
        Closure $getQueryParamsClosure
    ) {
        $this->getMethodClosure      = $getMethodClosure;
        $this->getHeaderClosure      = $getHeaderClosure;
        $this->getQueryParamsClosure = $getQueryParamsClosure;
    }

    /**
     * @inheritdoc
     */
    public function getHeader(string $name): array
    {
        $closure = $this->getHeaderClosure;
        $result  = $closure($name);

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function getQueryParams(): array
    {
        $closure = $this->getQueryParamsClosure;
        $result  = $closure();

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function getMethod(): string
    {
        $closure = $this->getMethodClosure;
        $result  = $closure();

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function getParsedBody()
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getProtocolVersion(): string
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withProtocolVersion(string $version): MessageInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getHeaders(): array
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function hasHeader(string $name): bool
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getHeaderLine(string $name): string
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withHeader(string $name, $value): MessageInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withAddedHeader(string $name, $value): MessageInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withoutHeader(string $name): MessageInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getBody(): StreamInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withBody(StreamInterface $body): MessageInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getRequestTarget(): string
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withRequestTarget(string $requestTarget): RequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withMethod(string $method): RequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getUri(): UriInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function withUri(UriInterface $uri, bool $preserveHost = false): RequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getServerParams(): array
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getCookieParams(): array
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withCookieParams(array $cookies): ServerRequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withQueryParams(array $query): ServerRequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getUploadedFiles(): array
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withUploadedFiles(array $uploadedFiles): ServerRequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withParsedBody($data): ServerRequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getAttributes(): array
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function getAttribute($name, $default = null)
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withAttribute(string $name, $value): ServerRequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }

    /**
     * @inheritdoc
     */
    public function withoutAttribute(string $name): ServerRequestInterface
    {
        // Method is not used.
        throw new LogicException();
    }
}
