<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario11
 * Date: 19/05/2018
 * Time: 14:18
 */

namespace Domain\Service;


use Domain\Model\Oportunidade;

interface OportunidadeServiceInterface
{
    public function salvar(Oportunidade $oportunidade);
}