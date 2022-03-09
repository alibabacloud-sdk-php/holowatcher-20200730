<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CompanyFindByIsvTypeRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $isvType;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'isvType'   => 'IsvType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->isvType) {
            $res['IsvType'] = $this->isvType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompanyFindByIsvTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['IsvType'])) {
            $model->isvType = $map['IsvType'];
        }

        return $model;
    }
}
