# taka-converter

Covert numeric taka to word.

Installation

```
composer require kalam/taka-converter dev-master
```
Example
```
<?php

include('vendor/autoload.php');

echo (new Kalam\TakaConverter\TakaConverter(101))->convert(); 
// one hundred one

echo (new Kalam\TakaConverter\TakaConverter(1000))->convert(); 
// one thousand

echo (new Kalam\TakaConverter\TakaConverter(120350))->convert();
// one lac twenty thousand three hundred fifty

echo (new Kalam\TakaConverter\TakaConverter(12109530))->convert(); 
// one crore twenty one lac nine thousand five hundred thirty

echo (new Kalam\TakaConverter\TakaConverter(1002109530))->convert(); 
// one hundred  crore twenty one lac nine thousand five hundred thirty
?>
```
Or

```
<?php
include('vendor/autoload.php');

echo (new Kalam\TakaConverter\WordConverter(101))->convert(); 
// one hundred one

echo (new Kalam\TakaConverter\WordConverter(1000))->convert(); 
// one thousand

echo (new Kalam\TakaConverter\WordConverter(120350))->convert(); 
// one lac twenty thousand three hundred fifty

echo (new Kalam\TakaConverter\WordConverter(12109530))->convert(); 
// one crore twenty one lac nine thousand five hundred thirty

echo (new Kalam\TakaConverter\WordConverter(1002109530))->convert(); 
// one hundred  crore twenty one lac nine thousand five hundred thirty
?>
```

Drawback
 - Its not supported decimal point
