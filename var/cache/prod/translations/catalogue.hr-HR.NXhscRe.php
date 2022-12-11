<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hr-HR', array (
));

$catalogueHr = new MessageCatalogue('hr', array (
));
$catalogue->addFallbackCatalogue($catalogueHr);

return $catalogue;
