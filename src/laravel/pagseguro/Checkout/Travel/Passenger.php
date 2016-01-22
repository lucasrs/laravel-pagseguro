<?php

namespace laravel\pagseguro\Checkout\Travel;

use laravel\pagseguro\Complements\DataHydratorTrait\DataHydratorConstructorTrait;
use laravel\pagseguro\Complements\DataHydratorTrait\DataHydratorProtectedTrait;
use laravel\pagseguro\Complements\DataHydratorTrait\DataHydratorTrait;
use laravel\pagseguro\Document\CPF\CPF;
use laravel\pagseguro\Document\Passport\Passport;

/**
 * Passenger Object
 *
 * @category   Checkout
 * @package    Laravel\PagSeguro\Checkout
 *
 * @author     Isaque de Souza <isaquesb@gmail.com>
 * @since      2016-01-12
 *
 * @copyright  Laravel\PagSeguro
 */
class Passenger
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var CPF
     */
    protected $cpf;

    /**
     * @var Passport
     */
    protected $passport;

    use DataHydratorTrait, DataHydratorProtectedTrait, DataHydratorConstructorTrait {
        DataHydratorProtectedTrait::hydrate insteadof DataHydratorTrait;
    }

    /**
     * Constructor
     * @param array|string $data Passenger data
     */
    public function __construct($data = [])
    {
        $this->hydrateMagic(
            ['name', 'cpf', 'passport'],
            func_get_args()
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Passenger
     */
    protected function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Passport
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param Passport $passport
     * @return Passenger
     */
    protected function setPassport($passport)
    {
        $this->passport = $passport;
        return $this;
    }

    /**
     * @return CPF
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param CPF $cpf
     * @return Passenger
     */
    protected function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }
}