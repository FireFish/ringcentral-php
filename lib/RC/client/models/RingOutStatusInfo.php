<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

//namespace SwaggerClient\models;
namespace RC\client\models;

use \ArrayAccess;

class RingOutStatusInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'call_status' => 'string',
      'caller_status' => 'string',
      'callee_status' => 'string'
  );

  static $attributeMap = array(
      'call_status' => 'callStatus',
      'caller_status' => 'callerStatus',
      'callee_status' => 'calleeStatus'
  );

  
  /**
  * Status of a call
  * @var string
  */
  public $call_status;
  /**
  * Status of a calling party
  * @var string
  */
  public $caller_status;
  /**
  * Status of a called party
  * @var string
  */
  public $callee_status;

  public function __construct(array $data = null) {
    $this->call_status = $data["call_status"];
    $this->caller_status = $data["caller_status"];
    $this->callee_status = $data["callee_status"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}