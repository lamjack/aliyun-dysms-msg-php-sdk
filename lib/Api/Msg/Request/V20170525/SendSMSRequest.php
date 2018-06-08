<?php
/**
 * SendSMSRequest.php
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    jack <jack@wizmacau.com>
 * @copyright 2007-2018/5/15 WIZ TECHNOLOGY
 * @link      https://wizmacau.com
 * @link      https://lamjack.github.io
 * @link      https://github.com/lamjack
 * @version
 */

namespace Aliyun\Api\Msg\Request\V20170525;

use Aliyun\Core\RpcAcsRequest;

/**
 * Class SendSMSRequest
 * @package Aliyun\Api\Msg\Request\V20170525
 */
class SendSMSRequest extends RpcAcsRequest
{
    private $templateCode;

    private $phoneNumbers;

    private $signName;

    private $resourceOwnerAccount;

    private $templateParam;

    private $resourceOwnerId;

    private $ownerId;

    private $outId;

    private $smsUpExtendCode;

    /**
     * SendSMSRequest constructor.
     */
    public function __construct()
    {
        parent::__construct("Dysmsapi", "2017-05-25", "SendSms");
        $this->setMethod("POST");
    }
    
    /**
     * @return mixed
     */
    public function getTemplateCode()
    {
        return $this->templateCode;
    }

    /**
     * @param $templateCode
     */
    public function setTemplateCode($templateCode)
    {
        $this->templateCode = $templateCode;
        $this->queryParameters["TemplateCode"] = $templateCode;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @param $phoneNumbers
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
        $this->queryParameters["PhoneNumbers"] = $phoneNumbers;
    }

    /**
     * @return mixed
     */
    public function getSignName()
    {
        return $this->signName;
    }

    /**
     * @param $signName
     */
    public function setSignName($signName)
    {
        $this->signName = $signName;
        $this->queryParameters["SignName"] = $signName;
    }

    /**
     * @return mixed
     */
    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }

    /**
     * @param $resourceOwnerAccount
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    /**
     * @return mixed
     */
    public function getTemplateParam()
    {
        return $this->templateParam;
    }

    /**
     * @param $templateParam
     */
    public function setTemplateParam($templateParam)
    {
        $this->templateParam = $templateParam;
        $this->queryParameters["TemplateParam"] = $templateParam;
    }

    /**
     * @return mixed
     */
    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }

    /**
     * @param $resourceOwnerId
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    /**
     * @return mixed
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

    /**
     * @return mixed
     */
    public function getOutId()
    {
        return $this->outId;
    }

    /**
     * @param $outId
     */
    public function setOutId($outId)
    {
        $this->outId = $outId;
        $this->queryParameters["OutId"] = $outId;
    }

    /**
     * @return mixed
     */
    public function getSmsUpExtendCode()
    {
        return $this->smsUpExtendCode;
    }

    /**
     * @param $smsUpExtendCode
     */
    public function setSmsUpExtendCode($smsUpExtendCode)
    {
        $this->smsUpExtendCode = $smsUpExtendCode;
        $this->queryParameters["SmsUpExtendCode"] = $smsUpExtendCode;
    }
}