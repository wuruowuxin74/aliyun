<?php
/*----------------------------------------------------------------
* A miss is as good as a mile
* File: Request.php
* Author: BeaconFire
* Email: 465689707@qq.com
* Create Time: 2017/7/5 13:53
----------------------------------------------------------------*/

namespace Aliyun\Alidns\Request;

use \Aliyun\Alidns\Request\V20150109\AddBatchDomainRecordsRequest;
use \Aliyun\Alidns\Request\V20150109\AddDomainGroupRequest;
use \Aliyun\Alidns\Request\V20150109\AddDomainRecordRequest;
use \Aliyun\Alidns\Request\V20150109\AddDomainRequest;
use \Aliyun\Alidns\Request\V20150109\ApplyForRetrievalDomainNameRequest;
use \Aliyun\Alidns\Request\V20150109\ChangeDomainGroupRequest;
use \Aliyun\Alidns\Request\V20150109\ChangeDomainOfDnsProductRequest;
use \Aliyun\Alidns\Request\V20150109\CheckDomainRecordRequest;
use \Aliyun\Alidns\Request\V20150109\DeleteBatchDomainRecordsRequest;
use \Aliyun\Alidns\Request\V20150109\DeleteBatchDomainsRequest;
use \Aliyun\Alidns\Request\V20150109\DeleteDomainGroupRequest;
use \Aliyun\Alidns\Request\V20150109\DeleteDomainRecordRequest;
use \Aliyun\Alidns\Request\V20150109\DeleteDomainRequest;
use \Aliyun\Alidns\Request\V20150109\DeleteSubDomainRecordsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeBatchResultRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDnsProductInstanceRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDnsProductInstancesRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDNSSLBSubDomainsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainGroupsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainInfoRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainLogsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainNsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainRecordInfoRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainRecordsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeDomainWhoisInfoRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeRecordLogsRequest;
use \Aliyun\Alidns\Request\V20150109\DescribeSubDomainRecordsRequest;
use \Aliyun\Alidns\Request\V20150109\GetMainDomainNameRequest;
use \Aliyun\Alidns\Request\V20150109\ModifyHichinaDomainDNSRequest;
use \Aliyun\Alidns\Request\V20150109\RetrievalDomainNameRequest;
use \Aliyun\Alidns\Request\V20150109\SetDNSSLBStatusRequest;
use \Aliyun\Alidns\Request\V20150109\SetDomainRecordStatusRequest;
use \Aliyun\Alidns\Request\V20150109\UpdateBatchDomainRecordsRequest;
use \Aliyun\Alidns\Request\V20150109\UpdateDNSSLBWeightRequest;
use \Aliyun\Alidns\Request\V20150109\UpdateDomainGroupRequest;
use \Aliyun\Alidns\Request\V20150109\UpdateDomainRecordRequest;

class Request
{
    public function addBatchDomainRecords()
    {
        return new AddBatchDomainRecordsRequest();
    }

    public function addDomainGroup()
    {
        return new AddDomainGroupRequest();
    }

    public function addDomainRecord()
    {
        return new AddDomainRecordRequest();
    }

    public function addDomain()
    {
        return new AddDomainRequest();
    }

    public function applyForRetrievalDomainName()
    {
        return new ApplyForRetrievalDomainNameRequest();
    }

    public function changeDomainGroup()
    {
        return new ChangeDomainGroupRequest();
    }

    public function changeDomainOfDnsProduct()
    {
        return new ChangeDomainOfDnsProductRequest();
    }

    public function checkDomainRecord()
    {
        return new CheckDomainRecordRequest();
    }

    public function deleteBatchDomainRecords()
    {
        return new DeleteBatchDomainRecordsRequest();
    }

    public function deleteBatchDomains()
    {
        return new DeleteBatchDomainsRequest();
    }

    public function deleteDomainGroup()
    {
        return new DeleteDomainGroupRequest();
    }

    public function deleteDomainRecord()
    {
        return new DeleteDomainRecordRequest();
    }

    public function deleteDomain()
    {
        return new DeleteDomainRequest();
    }

    public function deleteSubDomainRecords()
    {
        return new DeleteSubDomainRecordsRequest();
    }

    public function describeBatchResult()
    {
        return new DescribeBatchResultRequest();
    }

    public function describeDnsProductInstance()
    {
        return new DescribeDnsProductInstanceRequest();
    }

    public function describeDnsProductInstances()
    {
        return new DescribeDnsProductInstancesRequest();
    }

    public function describeDNSSLBSubDomains()
    {
        return new DescribeDNSSLBSubDomainsRequest();
    }

    public function describeDomainGroups()
    {
        return new DescribeDomainGroupsRequest();
    }

    public function describeDomainInfo()
    {
        return new DescribeDomainInfoRequest();
    }

    public function describeDomainLogs()
    {
        return new DescribeDomainLogsRequest();
    }

    public function describeDomainNs()
    {
        return new DescribeDomainNsRequest();
    }

    public function describeDomainRecordInfo()
    {
        return new DescribeDomainRecordInfoRequest();
    }

    public function describeDomainRecords()
    {
        return new DescribeDomainRecordsRequest();
    }

    public function describeDomains()
    {
        return new DescribeDomainsRequest();
    }

    public function describeDomainWhoisInfo()
    {
        return new DescribeDomainWhoisInfoRequest();
    }

    public function describeRecordLogs()
    {
        return new DescribeRecordLogsRequest();
    }

    public function describeSubDomainRecords()
    {
        return new DescribeSubDomainRecordsRequest();
    }

    public function getMainDomainName()
    {
        return new GetMainDomainNameRequest();
    }

    public function modifyHichinaDomainDNS()
    {
        return new ModifyHichinaDomainDNSRequest();
    }

    public function retrievalDomainName()
    {
        return new RetrievalDomainNameRequest();
    }

    public function setDNSSLBStatus()
    {
        return new SetDNSSLBStatusRequest();
    }

    public function setDomainRecordStatus()
    {
        return new SetDomainRecordStatusRequest();
    }

    public function updateBatchDomainRecords()
    {
        return new UpdateBatchDomainRecordsRequest();
    }

    public function updateDNSSLBWeight()
    {
        return new UpdateDNSSLBWeightRequest();
    }

    public function updateDomainGroup()
    {
        return new UpdateDomainGroupRequest();
    }

    public function updateDomainRecord()
    {
        return new UpdateDomainRecordRequest();
    }
}