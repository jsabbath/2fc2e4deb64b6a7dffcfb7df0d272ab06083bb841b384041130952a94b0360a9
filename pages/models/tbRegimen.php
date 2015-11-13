<?php
class tbRegimen
{
    public $cid;
    public $vcdescripcion;
    public $vcobservaciones;

    public function __construct($cid,$vcdescripcion,$vcobservaciones){
        $this->cid = $cid;
        $this->vcdescripcion = $vcdescripcion;
        $this->vcobservaciones = $vcobservaciones;
    }
}