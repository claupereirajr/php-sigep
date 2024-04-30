<?php

namespace PhpSigep\Model;

/**
 * @author: Rodrigo Job (rodrigo at econector.com.br)
 */
class LogisticaReversaPedidoResposta extends AbstractModel
{
    /**
     * @var string
     */
    protected $return;
    
    /**
     * @var array
     */
    protected $coletas_solicitadas;

    /**
     * @param $return
     * @return $this;
     */
    public function setReturn($return)
    {
        $this->return = $return;
        
        if (isset($return->resultado_solicitacao) && is_object($return->resultado_solicitacao)){
            if (sizeof((array)$return->resultado_solicitacao)>0){
                $this->coletas_solicitadas = $return->resultado_solicitacao;
            }

            if (sizeof((array)$return->coleta)>0){
                $this->coletas_solicitadas = $return->coleta;
            }
        }

        return $this;
    }
    
    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->return;
    }
    
    /**
     * @return string
     */
    public function getColeta()
    {
        return $this->coletas_solicitadas;
    }
}
