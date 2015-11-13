<?php
class tbPersonal
{
    public $cid;
    public $vcnombre;
    public $vcApPaterno;
    public $vcApMaterno;
    public $cdni;
    public $cidcargo;

    public function __construct($cid,$vcnombre,$vcApPaterno
                                $vcApMaterno,$cdni,$cidcargo){
        $this->cid = $cid;
        $this->vcnombre = $vcnombre;
        $this->vcApPaterno = $vcApPaterno;
        $this->vcApMaterno = $vcApMaterno;
        $this->cdni = $cdni;
        $this->cidcargo = $cidcargo;
    }
}