<?php

namespace TripleI\NotFork\Register;

use TripleI\NotFork\Person\Capacity;
use TripleI\NotFork\Person\CustomerGroup;

class Register
{
    /**
     * @var array
     */
    private $waiting_customers = [];

    /**
     * @var Capacity
     */
    private $capacity = null;

    /**
     * @param Capacity $capacity
     */
    public function putCapacity(Capacity $capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @param CustomerGroup $customer_group
     */
    public function joinCustomerGroup(CustomerGroup $customer_group)
    {
    }

    /**
     * @param Register $register
     */
    public function isLargeOfWatingCustomers(Register $register)
    {
        
    }


}
