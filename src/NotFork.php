<?php
/**
 * This file is part of the TripleI.NotFork
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace TripleI\NotFork;

use TripleI\NotFork\Person\CustomerGroup;
use TripleI\NotFork\Register\CashiersCounter;
use TripleI\NotFork\Register\Register;

/**
 * Class NotFork コンビニそのもの
 * @package TripleI\NotFork
 */
class NotFork
{
    /**
     * @var CashiersCounter
     */
    private $cashiers_counter;

    /**
     * @param CashiersCounter $cashiers_counter
     */
    public function __construct(CashiersCounter $cashiers_counter)
    {
        $this->cashiers_counter = $cashiers_counter;
    }

    /**
     * @param CustomerGroup $customer_group
     */
    public function joinCashiersCounter(CustomerGroup $customer_group)
    {
        $this->cashiers_counter->distributeCustomersToRegister($customer_group);
    }

    /**
     *
     */
    public function cleanCashierCounter()
    {
        $this->cashiers_counter->clean();
    }


}
