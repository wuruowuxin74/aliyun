<?php
/*----------------------------------------------------------------
* A miss is as good as a mile
* File: Request.php
* Author: BeaconFire
* Email: 465689707@qq.com
* Create Time: 2017/7/5 14:36
----------------------------------------------------------------*/

namespace Aliyun\Domain\Request;

use \Aliyun\Domain\Request\V20160511\CheckDomainRequest;
use \Aliyun\Domain\Request\V20160511\CreateOrderRequest;
use \Aliyun\Domain\Request\V20160511\DeleteContactTemplateRequest;
use \Aliyun\Domain\Request\V20160511\GetWhoisInfoRequest;
use \Aliyun\Domain\Request\V20160511\QueryBatchTaskDetailListRequest;
use \Aliyun\Domain\Request\V20160511\QueryBatchTaskListRequest;
use \Aliyun\Domain\Request\V20160511\QueryContactRequest;
use \Aliyun\Domain\Request\V20160511\QueryContactTemplateRequest;
use \Aliyun\Domain\Request\V20160511\QueryDomainBySaleIdRequest;
use \Aliyun\Domain\Request\V20160511\QueryDomainListRequest;
use \Aliyun\Domain\Request\V20160511\QueryOrderRequest;
use \Aliyun\Domain\Request\V20160511\SaveContactTemplateRequest;
use \Aliyun\Domain\Request\V20160511\WhoisProtectionRequest;

class Request
{
    public function checkDomain()
    {
        return new CheckDomainRequest();
    }

    public function createOrder()
    {
        return new CreateOrderRequest();
    }

    public function deleteContactTemplate()
    {
        return new DeleteContactTemplateRequest();
    }

    public function getWhoisInfo()
    {
        return new GetWhoisInfoRequest();
    }

    public function queryBatchTaskDetailList()
    {
        return new QueryBatchTaskDetailListRequest();
    }

    public function queryBatchTaskList()
    {
        return new QueryBatchTaskListRequest();
    }

    public function queryContact()
    {
        return new QueryContactRequest();
    }

    public function queryContactTemplate()
    {
        return new QueryContactTemplateRequest();
    }

    public function queryDomainBySaleId()
    {
        return new QueryDomainBySaleIdRequest();
    }

    public function queryDomainList()
    {
        return new QueryDomainListRequest();
    }

    public function queryOrder()
    {
        return new QueryOrderRequest();
    }

    public function saveContactTemplate()
    {
        return new SaveContactTemplateRequest();
    }

    public function whoisProtection()
    {
        return new WhoisProtectionRequest();
    }
}