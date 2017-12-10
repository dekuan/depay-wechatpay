<?php

namespace dekuan\depay\WechatPay;

use dekuan\depay;


/**
 * Created by PhpStorm.
 * User: xing
 * Date: 17/02/2017
 * Time: 12:49 AM
 */
class testDePayWeChatPay extends \PHPUnit\Framework\TestCase
{
	var $gateway;

	public function testCreate()
	{
		$this->gateway = depay\DePay::create( 'WechatPay' );
		$this->gateway->setAppId('123456789');
		$this->gateway->setMchId('123456789');
		$this->gateway->setApiKey('XXSXXXSXXSXXSX');
		$this->gateway->setNotifyUrl('http://example.com/notify');
		$this->gateway->setTradeType('APP');

		var_dump( $this->gateway );
	}
}
