<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no-NO', array (
));

$catalogueNo = new MessageCatalogue('no', array (
));
$catalogue->addFallbackCatalogue($catalogueNo);

return $catalogue;
