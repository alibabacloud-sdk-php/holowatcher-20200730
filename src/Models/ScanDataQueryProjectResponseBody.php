<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ScanDataQueryProjectResponseBody extends Model
{
    /**
     * @description async
     *
     * @var bool
     */
    public $async;

    /**
     * @description asyncToken
     *
     * @var string
     */
    public $asyncToken;

    /**
     * @description errorCode
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMsg
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description traceId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description resultObj
     *
     * @var mixed[]
     */
    public $resultObj;

    /**
     * @description retry
     *
     * @var bool
     */
    public $retry;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'async'      => 'Async',
        'asyncToken' => 'AsyncToken',
        'errorCode'  => 'ErrorCode',
        'errorMsg'   => 'ErrorMsg',
        'requestId'  => 'RequestId',
        'resultObj'  => 'ResultObj',
        'retry'      => 'Retry',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->asyncToken) {
            $res['AsyncToken'] = $this->asyncToken;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultObj) {
            $res['ResultObj'] = $this->resultObj;
        }
        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanDataQueryProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['AsyncToken'])) {
            $model->asyncToken = $map['AsyncToken'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultObj'])) {
            $model->resultObj = $map['ResultObj'];
        }
        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
