<?php

\Codebird\Codebird::setConsumerKey('API_KEY', 'API_SECRET');

$cb = \Codebird\Codebird::getInstance();

$cb->setToken("USER_TOKEN", "USER_SECRET");
