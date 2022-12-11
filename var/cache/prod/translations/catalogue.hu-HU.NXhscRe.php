<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu-HU', array (
));

$catalogueHu = new MessageCatalogue('hu', array (
));
$catalogue->addFallbackCatalogue($catalogueHu);

return $catalogue;
