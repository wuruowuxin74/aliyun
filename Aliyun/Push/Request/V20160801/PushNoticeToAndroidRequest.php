<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Push\Request\V20160801;

class PushNoticeToAndroidRequest extends \Aliyun\Client\RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2016-08-01", "PushNoticeToAndroid");
	}

	private  $appKey;

	private  $target;

	private  $targetValue;

	private  $title;

	private  $body;

	private  $extParameters;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getTarget() {
		return $this->target;
	}

	public function setTarget($target) {
		$this->target = $target;
		$this->queryParameters["Target"]=$target;
	}

	public function getTargetValue() {
		return $this->targetValue;
	}

	public function setTargetValue($targetValue) {
		$this->targetValue = $targetValue;
		$this->queryParameters["TargetValue"]=$targetValue;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		$this->queryParameters["Title"]=$title;
	}

	public function getBody() {
		return $this->body;
	}

	public function setBody($body) {
		$this->body = $body;
		$this->queryParameters["Body"]=$body;
	}

	public function getExtParameters() {
		return $this->extParameters;
	}

	public function setExtParameters($extParameters) {
		$this->extParameters = $extParameters;
		$this->queryParameters["ExtParameters"]=$extParameters;
	}
	
}