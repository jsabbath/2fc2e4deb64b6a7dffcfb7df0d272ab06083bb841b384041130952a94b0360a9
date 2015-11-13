<?php
class tbPeriodo
{
    public $cid;
    public $vcdescripcion;

    public function __construct($cid,$vcdescripcion){
        $this->cid = $cid;
        $this->vcdescripcion = $vcdescripcion;
    }
}