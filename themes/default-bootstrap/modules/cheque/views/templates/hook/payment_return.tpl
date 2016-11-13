{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $status == 'ok'}
	<p class="alert alert-success">{l s='Your order on %s is complete.' sprintf=$shop_name mod='cheque'}</p>
	<div class="box order-confirmation">
		<h3 class="page-subheading">{l s='Your check must include:' mod='cheque'}</h3>
		- {l s='Payment amount.' mod='cheque'} <span class="price"><strong>{$total_to_pay}</strong></span>
		{if !isset($reference) && isset($id_order) && $id_order}
			<br />- Mã đơn hàng: {$id_order}
		{else}
			<br />- Mã đơn hàng: {$reference}
		{/if}
		<br />Chúng tôi đã gửi email xác nhận đặt hàng cho bạn.
		<br />Nếu bạn có yêu cầu hoặc thắc mắc khác, xin vui lòng liên hệ với chúng tôi để được giải đáp.
	</div>
{else}
	<p class="alert alert-warning">
		{l s='We noticed a problem with your order. If you think this is an error, feel free to contact our' mod='cheque'}
		<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}">{l s='customer service department.' mod='cheque'}</a>.
	</p>
{/if}
