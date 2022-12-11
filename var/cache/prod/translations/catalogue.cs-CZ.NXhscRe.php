<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cs-CZ', array (
));

$catalogueCs = new MessageCatalogue('cs', array (
));
$catalogue->addFallbackCatalogue($catalogueCs);

return $catalogue;
