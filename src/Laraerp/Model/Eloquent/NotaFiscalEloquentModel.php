<?php namespace Laraerp\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Laraerp\Contracts\Models\NotaFiscalModel;
use Laraerp\Contracts\Models\VendaModel;

class NotaFiscalEloquentModel extends Model implements NotaFiscalModel {

    /**
     * Belongs to Venda
     */
    public function venda() {
        return $this->belongsTo('Laraerp\Models\Eloquent\VendaEloquentModel', 'venda_id', 'id');
    }

    /**
     * Set identification
     *
     * @param int $id
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set Data de emissão
     *
     * @param mixed
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setDataEmissao($data_emissao)
    {
        try{
            $this->data_emissao = Carbon::createFromFormat('d/m/Y H:i', $data_emissao);
        }catch (Exception $e){
            throw new Exception('Informe a data no formato DD/MM/YYYY HH:MM');
        }

        return $this;
    }

    /**
     * Set Venda
     *
     * @param \Laraerp\Contracts\Models\VendaModel $venda
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setVenda(VendaModel $venda)
    {
        $this->venda_id = $venda->getId();

        return $this;
    }

    /**
     * Set Compra (TODO)
     *
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setCompra()
    {
        return $this;
    }

    /**
     * Set Chave
     *
     * @param string $chave
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * Set Modelo
     *
     * @param int $modelo
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Set Numero
     *
     * @param mixed $numero
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Set Serie
     *
     * @param mixed $serie
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Set Versão
     *
     * @param mixed $versao
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;

        return $this;
    }

    /**
     * Set Caminho do XML
     *
     * @param mixed $path_xml
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setPathXML($path_xml)
    {
        $this->path_xml = $path_xml;

        return $this;
    }

    /**
     * Get identification
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get data de emissão
     *
     * @return \Carbon\Carbon
     */
    public function getDataEmissao()
    {
        return $this->nascimento_fundacao->format('d/m/Y');
    }

    /**
     * Get Venda
     *
     * @return \Laraerp\Contracts\Models\VendaModel
     */
    public function getVenda()
    {
        return $this->venda;
    }

    /**
     * Get Compra (TODO)
     *
     * @return null
     */
    public function getCompra()
    {
        return null;
    }

    /**
     * Get Chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Get Modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Get Numero
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Get Serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Get Versão
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Get Caminho do XML
     *
     * @return string
     */
    public function getPathXML()
    {
        return $this->path_xml;
    }


}
