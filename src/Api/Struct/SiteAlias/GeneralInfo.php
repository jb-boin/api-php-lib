<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\SiteAlias;

class GeneralInfo extends \PleskX\Api\Struct
{
    /** @var string */
    public $name;

    /** @var string */
    public $asciiName;

    /** @var string */
    public $status;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'name',
            'ascii-name',
            'status',
        ]);
    }
}
