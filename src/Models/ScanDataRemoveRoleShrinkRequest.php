<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ScanDataRemoveRoleShrinkRequest extends Model
{
    /**
     * @description 业务幂等编号，用于幂等处理
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @description 移除角色的项目ID，必须是开放平台图对应source创建的项目
     *
     * @var int
     */
    public $projectId;

    /**
     * @description removeUserDataRequest
     *
     * @var string
     */
    public $removeUserDataRequestShrink;

    /**
     * @description 移除角色名称，本次只支持PROJECT_MANAGER
     *
     * @var string
     */
    public $roleName;

    /**
     * @description 数据请求来源，目前只支持广州三维家3VJIA
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'bizOrderNo'                  => 'BizOrderNo',
        'projectId'                   => 'ProjectId',
        'removeUserDataRequestShrink' => 'RemoveUserDataRequest',
        'roleName'                    => 'RoleName',
        'source'                      => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->removeUserDataRequestShrink) {
            $res['RemoveUserDataRequest'] = $this->removeUserDataRequestShrink;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanDataRemoveRoleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RemoveUserDataRequest'])) {
            $model->removeUserDataRequestShrink = $map['RemoveUserDataRequest'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
