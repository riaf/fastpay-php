<?php

/**
 * This file is part of FastPay.
 *
 * Copyright (c) 2014 Yahoo Japan Corporation
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FastPay\Api;

use FastPay\ApiClient;

class Charge extends ApiClient
{
    public function all(array $fields = array())
    {
        return $this->request($this->createCommand("all"), $fields);
    }

    public function refund()
    {
        return $this->request($this->createCommand("refund"), array("id" => $this->id));
    }

    public function capture()
    {
        return $this->request($this->createCommand("capture"), array("id" => $this->id));
    }
}
