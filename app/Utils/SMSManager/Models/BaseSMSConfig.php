<?php

namespace App\Utils\SMSManager\Models;

use App\Traits\Inputable;
use JsonSerializable;
use Serializable;

abstract class BaseSMSConfig extends BaseModel implements JsonSerializable, Serializable
{
    use Inputable;
    /**
     * @rules(input_rule="bool")
     * @data(input_type="checkbox")
     */
    public $is_enabled;

    /**
     * @rules(input_rule="bool")
     * @data(input_type="checkbox")
     */
    public $flash_support;


    public function __construct()
    {
        $this->is_enabled = false;
        $this->flash_support = false;
    }

    public function serialize()
    {
        return json_encode($this);
    }

    public function unserialize(string $data)
    {
        $tmp_data = json_decode($data, true);
        foreach($tmp_data as $key=>$value){
            $this->$key = $value;
        }
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}
