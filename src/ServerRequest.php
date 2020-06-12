<?php

/*
 * Copyright 2020 Julian Jupiter <julianjupiter.io@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Haribon\Http\Message;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * Description of ServerRequest
 *
 * @author Julian Jupiter <julianjupiter.io@gmail.com>
 */
class ServerRequest implements ServerRequestInterface {

    public function getAttribute($name, $default = null) {
        
    }

    public function getAttributes(): array {
        
    }

    public function getBody(): StreamInterface {
        
    }

    public function getCookieParams(): array {
        
    }

    public function getHeader($name): array {
        
    }

    public function getHeaderLine($name): string {
        
    }

    public function getHeaders(): array {
        
    }

    public function getMethod(): string {
        return 'GET';
    }

    public function getParsedBody() {
        
    }

    public function getProtocolVersion(): string {
        
    }

    public function getQueryParams(): array {
        
    }

    public function getRequestTarget(): string {
        
    }

    public function getServerParams(): array {
        
    }

    public function getUploadedFiles(): array {
        
    }

    public function getUri(): UriInterface {
        
    }

    public function hasHeader($name): bool {
        
    }

    public function withAddedHeader($name, $value): ServerRequest {
        
    }

    public function withAttribute($name, $value): ServerRequest {
        
    }

    public function withBody(StreamInterface $body): ServerRequest {
        
    }

    public function withCookieParams(array $cookies): ServerRequest {
        
    }

    public function withHeader($name, $value): ServerRequest {
        
    }

    public function withMethod($method): ServerRequest {
        
    }

    public function withParsedBody($data): ServerRequest {
        
    }

    public function withProtocolVersion($version): ServerRequest {
        
    }

    public function withQueryParams(array $query): ServerRequest {
        
    }

    public function withRequestTarget($requestTarget): ServerRequest {
        
    }

    public function withUploadedFiles(array $uploadedFiles): ServerRequest {
        
    }

    public function withUri(UriInterface $uri, $preserveHost = false): ServerRequest {
        
    }

    public function withoutAttribute($name): ServerRequest {
        
    }

    public function withoutHeader($name): ServerRequest {
        
    }

}
