<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody\resultObj\isvUserMap;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody\resultObj\photoContact;
use AlibabaCloud\Tea\Model;

class resultObj extends Model
{
    /**
     * @var string
     */
    public $backExtInfo;

    /**
     * @var string
     */
    public $backReason;

    /**
     * @var string
     */
    public $billTime;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $cipherId;

    /**
     * @var string
     */
    public $cipherProjectId;

    /**
     * @var int
     */
    public $cloudTbLongId;

    /**
     * @var int
     */
    public $cloudTbPhone;

    /**
     * @var int
     */
    public $cloudUserId;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $demandContent;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $estimatedCost;

    /**
     * @var string
     */
    public $expectedOnlineTime;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $feeState;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var isvUserMap
     */
    public $isvUserMap;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderState;

    /**
     * @var string
     */
    public $outBizNo;

    /**
     * @var int
     */
    public $panoramaSize;

    /**
     * @var string
     */
    public $photoAddress;

    /**
     * @var string
     */
    public $photoCity;

    /**
     * @var photoContact[]
     */
    public $photoContact;

    /**
     * @var string
     */
    public $photoEnvironment;

    /**
     * @var int
     */
    public $photoFloorNum;

    /**
     * @var string
     */
    public $photoProvince;

    /**
     * @var int
     */
    public $photoSize;

    /**
     * @var string
     */
    public $photoTime;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $platformAccount;

    /**
     * @var string
     */
    public $platformAccountType;

    /**
     * @var int
     */
    public $scanUserId;

    /**
     * @var string
     */
    public $specialRequirements;
    protected $_name = [
        'backExtInfo'         => 'BackExtInfo',
        'backReason'          => 'BackReason',
        'billTime'            => 'BillTime',
        'bizType'             => 'BizType',
        'cipherId'            => 'CipherId',
        'cipherProjectId'     => 'CipherProjectId',
        'cloudTbLongId'       => 'CloudTbLongId',
        'cloudTbPhone'        => 'CloudTbPhone',
        'cloudUserId'         => 'CloudUserId',
        'createUserId'        => 'CreateUserId',
        'customerName'        => 'CustomerName',
        'demandContent'       => 'DemandContent',
        'enabled'             => 'Enabled',
        'estimatedCost'       => 'EstimatedCost',
        'expectedOnlineTime'  => 'ExpectedOnlineTime',
        'extraInfo'           => 'ExtraInfo',
        'feeState'            => 'FeeState',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'industry'            => 'Industry',
        'isvUserMap'          => 'IsvUserMap',
        'itemType'            => 'ItemType',
        'orderName'           => 'OrderName',
        'orderState'          => 'OrderState',
        'outBizNo'            => 'OutBizNo',
        'panoramaSize'        => 'PanoramaSize',
        'photoAddress'        => 'PhotoAddress',
        'photoCity'           => 'PhotoCity',
        'photoContact'        => 'PhotoContact',
        'photoEnvironment'    => 'PhotoEnvironment',
        'photoFloorNum'       => 'PhotoFloorNum',
        'photoProvince'       => 'PhotoProvince',
        'photoSize'           => 'PhotoSize',
        'photoTime'           => 'PhotoTime',
        'platform'            => 'Platform',
        'platformAccount'     => 'PlatformAccount',
        'platformAccountType' => 'PlatformAccountType',
        'scanUserId'          => 'ScanUserId',
        'specialRequirements' => 'SpecialRequirements',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backExtInfo) {
            $res['BackExtInfo'] = $this->backExtInfo;
        }
        if (null !== $this->backReason) {
            $res['BackReason'] = $this->backReason;
        }
        if (null !== $this->billTime) {
            $res['BillTime'] = $this->billTime;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->cipherId) {
            $res['CipherId'] = $this->cipherId;
        }
        if (null !== $this->cipherProjectId) {
            $res['CipherProjectId'] = $this->cipherProjectId;
        }
        if (null !== $this->cloudTbLongId) {
            $res['CloudTbLongId'] = $this->cloudTbLongId;
        }
        if (null !== $this->cloudTbPhone) {
            $res['CloudTbPhone'] = $this->cloudTbPhone;
        }
        if (null !== $this->cloudUserId) {
            $res['CloudUserId'] = $this->cloudUserId;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }
        if (null !== $this->demandContent) {
            $res['DemandContent'] = $this->demandContent;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->estimatedCost) {
            $res['EstimatedCost'] = $this->estimatedCost;
        }
        if (null !== $this->expectedOnlineTime) {
            $res['ExpectedOnlineTime'] = $this->expectedOnlineTime;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->feeState) {
            $res['FeeState'] = $this->feeState;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->isvUserMap) {
            $res['IsvUserMap'] = null !== $this->isvUserMap ? $this->isvUserMap->toMap() : null;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }
        if (null !== $this->outBizNo) {
            $res['OutBizNo'] = $this->outBizNo;
        }
        if (null !== $this->panoramaSize) {
            $res['PanoramaSize'] = $this->panoramaSize;
        }
        if (null !== $this->photoAddress) {
            $res['PhotoAddress'] = $this->photoAddress;
        }
        if (null !== $this->photoCity) {
            $res['PhotoCity'] = $this->photoCity;
        }
        if (null !== $this->photoContact) {
            $res['PhotoContact'] = [];
            if (null !== $this->photoContact && \is_array($this->photoContact)) {
                $n = 0;
                foreach ($this->photoContact as $item) {
                    $res['PhotoContact'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->photoEnvironment) {
            $res['PhotoEnvironment'] = $this->photoEnvironment;
        }
        if (null !== $this->photoFloorNum) {
            $res['PhotoFloorNum'] = $this->photoFloorNum;
        }
        if (null !== $this->photoProvince) {
            $res['PhotoProvince'] = $this->photoProvince;
        }
        if (null !== $this->photoSize) {
            $res['PhotoSize'] = $this->photoSize;
        }
        if (null !== $this->photoTime) {
            $res['PhotoTime'] = $this->photoTime;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->platformAccount) {
            $res['PlatformAccount'] = $this->platformAccount;
        }
        if (null !== $this->platformAccountType) {
            $res['PlatformAccountType'] = $this->platformAccountType;
        }
        if (null !== $this->scanUserId) {
            $res['ScanUserId'] = $this->scanUserId;
        }
        if (null !== $this->specialRequirements) {
            $res['SpecialRequirements'] = $this->specialRequirements;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObj
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackExtInfo'])) {
            $model->backExtInfo = $map['BackExtInfo'];
        }
        if (isset($map['BackReason'])) {
            $model->backReason = $map['BackReason'];
        }
        if (isset($map['BillTime'])) {
            $model->billTime = $map['BillTime'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CipherId'])) {
            $model->cipherId = $map['CipherId'];
        }
        if (isset($map['CipherProjectId'])) {
            $model->cipherProjectId = $map['CipherProjectId'];
        }
        if (isset($map['CloudTbLongId'])) {
            $model->cloudTbLongId = $map['CloudTbLongId'];
        }
        if (isset($map['CloudTbPhone'])) {
            $model->cloudTbPhone = $map['CloudTbPhone'];
        }
        if (isset($map['CloudUserId'])) {
            $model->cloudUserId = $map['CloudUserId'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }
        if (isset($map['DemandContent'])) {
            $model->demandContent = $map['DemandContent'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['EstimatedCost'])) {
            $model->estimatedCost = $map['EstimatedCost'];
        }
        if (isset($map['ExpectedOnlineTime'])) {
            $model->expectedOnlineTime = $map['ExpectedOnlineTime'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['FeeState'])) {
            $model->feeState = $map['FeeState'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['IsvUserMap'])) {
            $model->isvUserMap = isvUserMap::fromMap($map['IsvUserMap']);
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderState'])) {
            $model->orderState = $map['OrderState'];
        }
        if (isset($map['OutBizNo'])) {
            $model->outBizNo = $map['OutBizNo'];
        }
        if (isset($map['PanoramaSize'])) {
            $model->panoramaSize = $map['PanoramaSize'];
        }
        if (isset($map['PhotoAddress'])) {
            $model->photoAddress = $map['PhotoAddress'];
        }
        if (isset($map['PhotoCity'])) {
            $model->photoCity = $map['PhotoCity'];
        }
        if (isset($map['PhotoContact'])) {
            if (!empty($map['PhotoContact'])) {
                $model->photoContact = [];
                $n                   = 0;
                foreach ($map['PhotoContact'] as $item) {
                    $model->photoContact[$n++] = null !== $item ? photoContact::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PhotoEnvironment'])) {
            $model->photoEnvironment = $map['PhotoEnvironment'];
        }
        if (isset($map['PhotoFloorNum'])) {
            $model->photoFloorNum = $map['PhotoFloorNum'];
        }
        if (isset($map['PhotoProvince'])) {
            $model->photoProvince = $map['PhotoProvince'];
        }
        if (isset($map['PhotoSize'])) {
            $model->photoSize = $map['PhotoSize'];
        }
        if (isset($map['PhotoTime'])) {
            $model->photoTime = $map['PhotoTime'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PlatformAccount'])) {
            $model->platformAccount = $map['PlatformAccount'];
        }
        if (isset($map['PlatformAccountType'])) {
            $model->platformAccountType = $map['PlatformAccountType'];
        }
        if (isset($map['ScanUserId'])) {
            $model->scanUserId = $map['ScanUserId'];
        }
        if (isset($map['SpecialRequirements'])) {
            $model->specialRequirements = $map['SpecialRequirements'];
        }

        return $model;
    }
}
