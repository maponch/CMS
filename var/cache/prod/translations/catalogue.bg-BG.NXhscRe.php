<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bg-BG', array (
));

$catalogueBg = new MessageCatalogue('bg', array (
));
$catalogue->addFallbackCatalogue($catalogueBg);

return $catalogue;
