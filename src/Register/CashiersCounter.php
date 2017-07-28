<?php

namespace TripleI\NotFork\Register;

use TripleI\NotFork\Person\Customer;
use TripleI\NotFork\Person\CustomerGroup;

class CashiersCounter
{

    /**
     * @var array|Register[]
     */
    private $registers;

    /**
     * @param Register [] $registers
     */
    public function __construct($registers = [])
    {
        $this->registers = $registers;
    }

    /**
     * @param Customer $customer
     */
    public function joinRow(Customer $customer)
    {
        $waiting_customers[] = $customer;
    }

    /**
     * @param CustomerGroup $customer_group
     */
    public function distributeCustomersToRegister(CustomerGroup $customer_group)
    {

    }

    public function clean()
    {

    }


}