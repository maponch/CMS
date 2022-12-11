/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/**
 * 2013 - 2022 PayPlug SAS
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
 *  @author    PayPlug SAS
 *  @copyright 2013 - 2022 PayPlug SAS
 *  @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PayPlug SAS
 */
$(document).ready(function() {
    if(typeof payplug_errors != 'undefined' && payplug_errors) {
        return false;
    }

    var url = $('#payplug_form_js').data('payment-url');

    // (PrestaShop 1.7 only) : If Internet Explorer, redirect instead
    if(!!window.MSInputMethodContext && !!document.documentMode){
        window.location.href = url;
        return false;
    }
    if (typeof isIntegratedPayment != 'undefined' && isIntegratedPayment) {
        Payplug.Form.showPayment(url);
    } else {
        Payplug.showPayment(url);
    }
});

/******/ })()
;