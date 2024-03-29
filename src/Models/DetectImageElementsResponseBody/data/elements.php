<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 354
     *
     * @var int
     */
    public $height;

    /**
     * @example 0.997097373008728
     *
     * @var float
     */
    public $score;

    /**
     * @example majorhuman
     *
     * @var string
     */
    public $type;

    /**
     * @example 285
     *
     * @var int
     */
    public $width;

    /**
     * @example 287
     *
     * @var int
     */
    public $x;

    /**
     * @example 78
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'height' => 'Height',
        'score'  => 'Score',
        'type'   => 'Type',
        'width'  => 'Width',
        'x'      => 'X',
        'y'      => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
