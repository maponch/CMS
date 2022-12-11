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
<p>{l s='You need to activate your account before performing LIVE transactions.' mod='payplug'}</p>
<div class="{$module_name|escape:'htmlall':'UTF-8'}Popup_footer">
    <button type="button" class="{$module_name|escape:'htmlall':'UTF-8'}Button -close">{l s='Cancel' mod='payplug'}</button>
    <a class="{$module_name|escape:'htmlall':'UTF-8'}Button -green" target="_blank" href="{$site_url|escape:'htmlall':'UTF-8'}/portal">{l s='Activate account' mod='payplug'}</a>
</div>
