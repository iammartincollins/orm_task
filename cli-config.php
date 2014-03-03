<?php
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

//php vendor/bin/doctrine orm:schema-tool:drop --force
//php vendor/bin/doctrine orm:schema-tool:create
//php vendor/bin/doctrine orm:schema-tool:update --force