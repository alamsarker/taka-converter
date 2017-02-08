# taka-converter

Covert numeric taka to word.

## Installation

```
composer require kalam/taka-converter dev-master
```
## Example
```
<?php

include('vendor/autoload.php');

echo (new Kalam\TakaConverter\TakaConverter(101))->convert(); 
// One Hundred One Only

echo (new Kalam\TakaConverter\TakaConverter(1000))->convert(); 
// One Thousand  Only

echo (new Kalam\TakaConverter\TakaConverter(120350))->convert();
// One Lac Twenty Thousand Three Hundred Fifty Only

echo (new Kalam\TakaConverter\TakaConverter(12109530))->convert(); 
// One Crore Twenty One Lac Nine Thousand Five Hundred Thirty Only

echo (new Kalam\TakaConverter\TakaConverter(10021095.959))->convert(); 
// One Crore Twenty One Thousand Ninety Five And Ninety Six Poisa Only

?>
```
Or

```
<?php
include('vendor/autoload.php');

echo (new Kalam\TakaConverter\WordConverter(101))->convert(); 
// One Hundred One Only

echo (new Kalam\TakaConverter\WordConverter(1000))->convert(); 
// One Thousand  Only

echo (new Kalam\TakaConverter\WordConverter(120350))->convert(); 
// One Lac Twenty Thousand Three Hundred Fifty Only

echo (new Kalam\TakaConverter\WordConverter(12109530))->convert(); 
// One Crore Twenty One Lac Nine Thousand Five Hundred Thirty Only

echo (new Kalam\TakaConverter\WordConverter(10021095.959))->convert(); 
// One Crore Twenty One Thousand Ninety Five And Ninety Six Poisa Only
?>
```