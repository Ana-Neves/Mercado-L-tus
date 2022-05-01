<?php

class produto
{

    private $tipoDeCarne;
    private $tipoDeDoce;
    private $tipoDeItemHigienico;
    private $kilos;
    private $quantidadeDoces;
    private $quantidadeItens;

    public function getTipoDeCarne()
    {
        return $this->tipoDeCarne;
    }

    public function setTipoDeCarne($tipoDeCarne)
    {
        $this->tipoDeCarne = $tipoDeCarne;

        return $this;
    }

    public function getTipoDeDoce()
    {
        return $this->tipoDeDoce;
    }

    public function setTipoDeDoce($tipoDeDoce)
    {
        $this->tipoDeDoce = $tipoDeDoce;

        return $this;
    }

    public function getTipoDeItemHigienico()
    {
        return $this->tipoDeItemHigienico;
    }

    public function setTipoDeItemHigienico($tipoDeItemHigienico)
    {
        $this->tipoDeItemHigienico = $tipoDeItemHigienico;

        return $this;
    }


    public function getKilos()
    {
        return $this->kilos;
    }

    public function setKilos($kilos)
    {
        $this->kilos = $kilos;

        return $this;
    }

    public function getQuantidadeDoces()
    {
        return $this->quantidadeDoces;
    }

    public function setQuantidadeDoces($quantidadeDoces)
    {
        $this->quantidadeDoces = $quantidadeDoces;

        return $this;
    }

    public function getQuantidadeItens()
    {
        return $this->quantidadeItens;
    }
    public function setQuantidadeItens($quantidadeItens)
    {
        $this->quantidadeItens = $quantidadeItens;

        return $this;
    }


    // funções de preços

    function tipoCarne()
    {
        switch ($this->tipoDeCarne) {
            case 'Guisado':
                return 23.00;
                break;
            case 'Linguiça':
                return 22.00;
            case 'Galinha':
                return 20.00;
            default:
                return 0;
                break;
        }
    }

    function tipoDoces()
    {
        switch ($this->tipoDeDoce) {
            case 'Bolo de Pote':
                return 12.00;
                break;
            case 'Barra de chocolate':
                return 7.00;
            case 'Pudim':
                return 10.00;
            default:
                return 0;
                break;
        }
    }

    function tipoItem()
    {
        switch ($this->tipoDeItemHigienico) {
            case 'Escova de Dente':
                return 7.00 ;
                break;
            case 'Pasta de Dente':
                return 5.00;
            case 'Enxaguante Bucal':
                return 10.00;
            default:
                return 0;
                break;
        }
    }

    //calculos

    function valorDasCarnes()
    {
        return $this->tipoCarne() * $this->kilos;
    }


    function valorDosDoces()
    {
        return $this->tipoDoces() * $this->quantidadeDoces;
    }

    function valorDosItens()
    {
        return $this->tipoItem() * $this->quantidadeItens;
    }

    // valor total

   function valorFinal()
   {
      return $this->valorDasCarnes() + $this->valorDosDoces() + $this->valorDosItens();
   }




}
