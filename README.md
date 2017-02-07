# taka-converter

Covert taka numeric value to word.

Install

```
composer require kalam/taka-converter dev-master
```
Example
```
$converter = new TakaConverter(1000);
$converter->convert(); // one thousand

$converter = new TakaConverter(120300);
$converter->convert(); // one lac twenty thousand three hundred
```
Or

```
$converter = new WordConverter(1000);
$converter->convert(); // one thousand

$converter = new TakaConverter(120300);
$converter->convert(); // one lac twenty thousand three hundred
