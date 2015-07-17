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

class ExtensionServiceFeatureInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'enabled' => 'boolean',
      'feature_name' => 'string',
      'reason' => 'string'
  );

  static $attributeMap = array(
      'enabled' => 'enabled',
      'feature_name' => 'featureName',
      'reason' => 'reason'
  );

  
  /**
  * Feature status; shows feature availability for an extension
  * @var boolean
  */
  public $enabled;
  /**
  * Feature name, see all available values in Service Feature List
  * @var string
  */
  public $feature_name;
  /**
  * Reason of limitation for a particular service feature. Returned only if the enabled parameter value is 'False', see Service Feature Limitations and Reasons. When retrieving service features for an extension, the reasons for the limitations, if any, are returned in response
  * @var string
  */
  public $reason;

  public function __construct(array $data = null) {
    $this->enabled = $data["enabled"];
    $this->feature_name = $data["feature_name"];
    $this->reason = $data["reason"];
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