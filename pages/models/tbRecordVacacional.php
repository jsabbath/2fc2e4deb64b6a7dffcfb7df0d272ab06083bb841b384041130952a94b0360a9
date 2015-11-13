<?php
class tbRecordVacacional
{
    public $cid;
    public $cidcontrato;
    public $vcescalafon;
    public $cestado;
    public $intdrestantes;

    public function __construct($cid,$cidcontrato,$vcescalafon,
                                $cestado,$intdrestantes){
        $this->cid = $cid;
        $this->cidcontrato = $cidcontrato;
        $this->vcescalafon = $vcescalafon;
        $this->cestado = $cestado;
        $this->intdrestantes = $intdrestantes;
    }
}