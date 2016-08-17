<?php

require 'vendor/autoload.php';

use Milon\Barcode\DNS1D;

echo (new DNS1D())->getBarcodeSVG("324345", "EAN13",1,24,'black', true);


