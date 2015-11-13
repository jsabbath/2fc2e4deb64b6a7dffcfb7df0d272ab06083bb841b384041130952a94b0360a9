<?php
class tbContrato
{
    public $cid;
    public $cidpersonal;
    public $cidperiodo;
    public $cidregimen;
    public $cestado;
    public $dateinicio;
    public $datefin;
    public $vcobservaciones;

    public function __construct($cid,$cidpersonal,$cidperiodo,
                                $cidregimen,$cestado,$dateinicio,
                                $datefin,$vcobservaciones){
        $this->cid = $cid;
        $this->cidpersonal = $cidpersonal;
        $this->cidperiodo = $cidperiodo;
        $this->cidregimen = $cidregimen;
        $this->cestado = $cestado;
        $this->dateinicio = $dateinicio;
        $this->datefin = $datefin;
        $this->vcobservaciones = $vcobservaciones;
    }
}