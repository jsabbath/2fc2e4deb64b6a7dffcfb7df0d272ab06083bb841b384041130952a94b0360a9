<?php
class tbArea
{
    public $cid;
    public $vcnombre;

    public function __construct($cid,$vcnombre){
        $this->cid = $cid;
        $this->vcnombre = $vcnombre;
    }
}