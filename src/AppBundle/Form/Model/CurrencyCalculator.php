<?php
namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class for holding Currency Calculator form properties
 */
class CurrencyCalculator
{
    /**
    * @Assert\Currency
    * @Assert\NotBlank
    */
    private $baseCurrency;

    /**
    * @Assert\Currency
    * @Assert\NotBlank
    */
    private $targetCurrency;

    /**
    * @Assert\NotBlank
    */
    private $amount;

    public function getBaseCurrency()
    {
        return $this->baseCurrency;
    }

    public function setBaseCurrency($baseCurrency)
    {
        $this->baseCurrency = $baseCurrency;

        return $this;
    }

    public function getTargetCurrency()
    {
        return $this->targetCurrency;
    }

    public function setTargetCurrency($targetCurrency)
    {
        $this->targetCurrency = $targetCurrency;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }
}
