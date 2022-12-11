<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nn-NO', array (
));

$catalogueNn = new MessageCatalogue('nn', array (
));
$catalogue->addFallbackCatalogue($catalogueNn);

return $catalogue;
