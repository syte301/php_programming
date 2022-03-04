<?php

$xml = simplexml_load_file(epmloye.xml);
echo $xml->worker->name; //выведет 'Коля'
echo $xml->worker->age; //выведет 25

