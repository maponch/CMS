<?php
/* Smarty version 3.1.43, created on 2022-12-12 11:25:38
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639701a222fee1_01652266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1670692123,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_639701a222fee1_01652266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-lg-3 links wrapper">
    <p class="footer__title footer__title--desktop">Votre compte</p>
    <a href="#footer_account_list" class="footer__title--mobile footer__title" data-toggle="collapse">Votre compte</a>
  <ul class="account-list collapse show" data-collapse-hide-mobile id="footer_account_list">
            <li>
          <a href="http://localhost/prestashop/fr/identite" title="Informations personnelles" rel="nofollow">
            Informations personnelles
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/fr/historique-commandes" title="Commandes" rel="nofollow">
            Commandes
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/fr/avoirs" title="Avoirs" rel="nofollow">
            Avoirs
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/fr/adresses" title="Adresses" rel="nofollow">
            Adresses
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/fr/reduction" title="Bons de réduction" rel="nofollow">
            Bons de réduction
          </a>
        </li>
          <li>
    <a href="http://localhost/prestashop/fr/module/blockwishlist/lists" title="Mes listes" rel="nofollow">
      Liste d&#039;envies
    </a>
  </li>

	</ul>
</div>
<?php }
}
