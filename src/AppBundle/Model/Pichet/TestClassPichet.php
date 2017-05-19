<?php
namespace  AppBundle\Model\Pichet;


class TestClassPichet extends AbstractPichet
{

    public function __construct()
    {
        parent::__construct("BAD",array());
    }
    public  function constClass(){
        return parent::result();
    }

    public function getTransform(){
        return "NotWithMe";
    }

}
