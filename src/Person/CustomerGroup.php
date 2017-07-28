<?php

namespace TripleI\NotFork\Person;

class CustomerGroup
{
    /**
     * @var Customer[]
     */
    private $customers;

    /**
     * @param Customer [] $customers
     */
    public function __construct($customers = [])
    {
        $this->customers = $customers;
    }


}
