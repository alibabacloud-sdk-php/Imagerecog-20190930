<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog;

use AlibabaCloud\Tea\Model;

class RecognizeImageColorRequest extends Model
{
    public $url;
    public $colorCount;
    protected $_required = [
        'url' => true,
    ];
    protected $_name = [
        'url'        => 'Url',
        'colorCount' => 'ColorCount',
    ];
    protected $_description = [
        'url'        => 'url',
        'colorCount' => 'colorCount',
    ];
}
