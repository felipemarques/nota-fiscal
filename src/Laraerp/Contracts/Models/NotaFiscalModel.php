<?php namespace Laraerp\Contracts\Models;

interface NotaFiscalModel {

    /**
     * Set identification
     *
     * @param int $id
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setId($id);

    /**
     * Set Data de emissão
     *
     * @param mixed
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setDataEmissao($data_emissao);

    /**
     * Set Venda
     *
     * @param \Laraerp\Contracts\Models\VendaModel $venda
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setVenda(VendaModel $venda);

    /**
     * Set Compra (TODO)
     *
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setCompra();

    /**
     * Set Chave
     *
     * @param string $chave
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setChave($chave);

    /**
     * Set Modelo
     *
     * @param int $modelo
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setModelo($modelo);

    /**
     * Set Numero
     *
     * @param mixed $numero
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setNumero($numero);

    /**
     * Set Serie
     *
     * @param mixed $serie
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setSerie($serie);

    /**
     * Set Versão
     *
     * @param mixed $versao
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setVersao($versao);

    /**
     * Set Caminho do XML
     *
     * @param mixed $path_xml
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function setPathXML($path_xml);

    /**
     * Get identification
     *
     * @return int
     */
    public function getId();

    /**
     * Get data de emissão
     *
     * @return \Carbon\Carbon
     */
    public function getDataEmissao();

    /**
     * Get Venda
     *
     * @return \Laraerp\Contracts\Models\VendaModel
     */
    public function getVenda();

    /**
     * Get Compra (TODO)
     *
     * @return null
     */
    public function getCompra();

    /**
     * Get Chave
     *
     * @return string
     */
    public function getChave();

    /**
     * Get Modelo
     *
     * @return string
     */
    public function getModelo();

    /**
     * Get Numero
     *
     * @return mixed
     */
    public function getNumero();

    /**
     * Get Serie
     *
     * @return string
     */
    public function getSerie();

    /**
     * Get Versão
     *
     * @return string
     */
    public function getVersao();

    /**
     * Get Caminho do XML
     *
     * @return string
     */
    public function getPathXML();

}