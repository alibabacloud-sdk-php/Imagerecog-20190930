<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EvaluateCertificateQualityAdvanceRequest extends Model
{
    /**
     * @example https://viapi-doc.oss-cn-shanghai.aliyuncs.com/imagerecog/xxxxx.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example BusinessLicense
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateCertificateQualityAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
