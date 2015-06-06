<?php namespace Laraerp\Contracts\Repositories;

interface BotaFiscalRepository {

    /**
     * Retorna uma Nota Fiscal pelo ID
     *
     * @param int $id
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function getById($id);

    /**
     * Retorna uma Nota Fiscal pela Chave
     *
     * @param int $chave
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function getByChave($chave);

    /**
     * Salva uma Nota fiscal no repositório
     *
     * @param array $params
     * @return \Laraerp\Contracts\Models\NotaFiscalModel
     */
    public function save(array $params);

    /**
     * Remove uma Nota fiscal do repositorio
     *
     * @param int $id
     * @return boolean
     */
    public function remove($id);

}