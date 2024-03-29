<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus返回参数结构体
 *
 * @method boolean getServiceEnabled() 获取true表示服务已开通，false 表示服务尚未开通。
 * @method void setServiceEnabled(boolean $ServiceEnabled) 设置true表示服务已开通，false 表示服务尚未开通。
 * @method integer getInvalidType() 获取服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
 * @method void setInvalidType(integer $InvalidType) 设置服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
 * @method boolean getAccessKeyEscrowEnabled() 获取true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
 * @method void setAccessKeyEscrowEnabled(boolean $AccessKeyEscrowEnabled) 设置true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean true表示服务已开通，false 表示服务尚未开通。
     */
    public $ServiceEnabled;

    /**
     * @var integer 服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
     */
    public $InvalidType;

    /**
     * @var boolean true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
     */
    public $AccessKeyEscrowEnabled;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled true表示服务已开通，false 表示服务尚未开通。
     * @param integer $InvalidType 服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放。
     * @param boolean $AccessKeyEscrowEnabled true表示用户已经可以使用密钥安全托管功能，
false表示用户暂时不能使用密钥安全托管功能。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("AccessKeyEscrowEnabled",$param) and $param["AccessKeyEscrowEnabled"] !== null) {
            $this->AccessKeyEscrowEnabled = $param["AccessKeyEscrowEnabled"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
