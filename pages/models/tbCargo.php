<?php
class tbCargo
{
    public $cid;
    public $cidarea;
    public $vcnombre;

    public function __construct($cid,$cidarea,$vcnombre){
        $this->cid = $cid;
        $this->cidarea = $cidarea;
        $this->vcnombre = $vcnombre;
    }
}