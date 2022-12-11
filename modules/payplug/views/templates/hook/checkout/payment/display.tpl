{*
* 2022 PayPlug
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0).
* It is available through the world-wide-web at this URL:
* https://opensource.org/licenses/osl-3.0.php
* If you are unable to obtain it through the world-wide-web, please send an email
* to contact@payplug.com so we can send you a copy immediately.
*
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PayPlug module to newer
 * versions in the future.
*
*  @author PayPlug SAS
*  @copyright 2022 PayPlug SAS
*  @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PayPlug SAS
*}

<script type="text/javascript" src="{$api_url|escape:'htmlall':'UTF-8'}/js/1/form.latest.js"></script>
{if isset($payplug_payment_options) && $payplug_payment_options}
    {foreach $payplug_payment_options as $method => $payplug_payment_option}
        {include file=$payplug_payment_option.tpl payplug_payment_option=$payplug_payment_option method=$method}
    {/foreach}
{/if}

<form style="display: none;">
    <input type="hidden" name="front_ajax_url" value="{$front_ajax_url|escape:'htmlall':'UTF-8'}" />
    <input type="hidden" name="id_cart" value="{$cart->id|escape:'htmlall':'UTF-8'}" />
    <input type="hidden" name="spinner_url" value="{$spinner_url|escape:'htmlall':'UTF-8'}" />
</form>
