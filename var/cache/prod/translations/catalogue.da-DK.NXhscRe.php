<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da-DK', array (
));

$catalogueDa = new MessageCatalogue('da', array (
));
$catalogue->addFallbackCatalogue($catalogueDa);

return $catalogue;
