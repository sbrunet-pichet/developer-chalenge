<?php
namespace AppBundle\Model\Pichet;


class AnotherClassPichet extends AbstractPichet
{

    public function getTransform(){
        return $this->string;
    }

}
