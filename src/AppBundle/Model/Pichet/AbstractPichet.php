<?php
namespace  AppBundle\Model\Pichet;

abstract class AbstractPichet implements Pichet
{

    protected
        $string,
        $conf;
    const STRING = "A false constant";

    public function __construct( $string, array $conf)
    {
        $this->string = $string;
        $this->conf = $conf;
    }

    public function __toString() {
        return $this->string;
    }
    Public  function getString(){
        return "please return the correct value";
    }
    public function setTransform($value){
        $this->string = $value;
    }
    public function getTransform(){
        return null;
    }
    public  function result(){
        return  self::STRING;
    }
}
