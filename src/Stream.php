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

use Psr\Http\Message\StreamInterface;

/**
 * Description of Stream
 *
 * @author Julian Jupiter <julianjupiter.io@gmail.com>
 */
class Stream implements StreamInterface
{
    public function __toString(): string {
        
    }

    public function close(): void {
        
    }

    public function detach() {
        
    }

    public function eof(): bool {
        
    }

    public function getContents(): string {
        
    }

    public function getMetadata($key = null) {
        
    }

    public function getSize() {
        
    }

    public function isReadable(): bool {
        
    }

    public function isSeekable(): bool {
        
    }

    public function isWritable(): bool {
        
    }

    public function read($length): string {
        
    }

    public function rewind() {
        
    }

    public function seek($offset, $whence = SEEK_SET) {
        
    }

    public function tell(): int {
        
    }

    public function write($string): int {
        
    }

}
