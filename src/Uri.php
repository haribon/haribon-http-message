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

use Psr\Http\Message\UriInterface;

/**
 * Description of Uri
 *
 * @author Julian Jupiter <julianjupiter.io@gmail.com>
 */
class Uri implements UriInterface {
    
    private string $value;
    
    private function __construct(string $uri) 
    {
        $this->value = $uri;
    }
    
    public static function of(string $uri): UriInterface
    {
        return new Uri($uri);
    }
    
    public function getScheme()
    {
        
    }

    public function getAuthority()
    {
        
    }

    public function getUserInfo()
    {
        
    }

    public function getHost()
    {
        
    }

    public function getPort()
    {
        
    }

    public function getPath()
    {
        
    }

    public function getQuery()
    {
        
    }

    public function getFragment()
    {
        
    }

    public function withScheme($scheme)
    {
        
    }

    public function withUserInfo($user, $password = null)
    {
        
    }

    public function withHost($host)
    {
        
    }

    public function withPort($port)
    {
        
    }

    public function withPath($path)
    {
        
    }

    public function withQuery($query)
    {
        
    }

    public function withFragment($fragment)
    {
        
    }

    public function __toString()
    {
        
    }
}
