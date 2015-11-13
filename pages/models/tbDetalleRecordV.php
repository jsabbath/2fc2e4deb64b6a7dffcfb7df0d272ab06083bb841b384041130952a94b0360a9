<?php
class tbDetalleRecordV
{
    public $cid;
    public $cidrecordv;
    public $dateinicio;
    public $datefin;
    public $intdias;

    public function __construct($cid,$cidrecordv,$dateinicio
                                $datefin,$intdias){
        $this->cid = $cid;
        $this->cidrecordv = $cidrecordv;
        $this->dateinicio = $dateinicio;
        $this->datefin = $datefin;
        $this->intdias = $intdias;
    }
}