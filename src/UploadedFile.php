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

use Psr\Http\Message\UploadedFileInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Description of UploadedFile
 *
 * @author Julian Jupiter <julianjupiter.io@gmail.com>
 */
class UploadedFile implements UploadedFileInterface
{
    public function getClientFilename() {
        
    }

    public function getClientMediaType() {
        
    }

    public function getError(): int {
        
    }

    public function getSize() {
        
    }

    public function getStream(): StreamInterface {
        
    }

    public function moveTo($targetPath) {
        
    }

}
