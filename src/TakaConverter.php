<?php

namespace Kalam\TakaConverter;


class TakaConverter {

    protected $converter;

    public function __construct($amount)
    {
        if( is_numeric($amount) ) {
            $this->converter = new WordConverter($amount);
        } else {
            $this->converter = new NumberConverter($amount);
        }
    }

    public function convert()
    {
        if( !$this->converter instanceof AbstractConverter ) {
            throw new \Exception("Invalid Convert class");
        }

        return $this->converter->convert();
    }
}