<?php
/**
 * @license MIT License
 * 
 * MIT License
 * 
 * Copyright (c) 2021 Ablaze
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 * 
 * - This file is library script -
 */

class PHP_Router
{
    public function __construct(String $REQUEST){
        const REQUEST_URI = $REQUEST;
    }
    
    public function error($code, $callback){
        $this->$code(){
            
        }
    }

    public function router(String $pass, $callback){
        if(!isset(self::REQUEST_URI) || empty(self::REQUEST_URI) && $pass !== "/"){
            return;
        }

        $request = explode("/", self::REQUEST_URI);
        $routing = explode("/", $pass);

        if(!isset(self::REQUEST_URI) || empty(self::REQUEST_URI) && $pass === "/"){
            $response = $callback();
            if($response === 404){

            }
        }
    }

    static function static(){
        echo "static";
    }
}