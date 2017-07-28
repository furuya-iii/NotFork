<?php

namespace TripleI\NotFork;

use TripleI\NotFork\Person\CapacityPerson;
use TripleI\NotFork\Person\CustomerGroup;
use TripleI\NotFork\Person\CustomerPerson;
use TripleI\NotFork\Register\CashiersCounter;
use TripleI\NotFork\Register\Register;

class NotForkTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NotFork
     */
    protected $skeleton;

    /**
     * @var NotFork
     */
    private $super_marker;

    protected function setUp()
    {
        $register_1 = new Register();
        $capacity = new CapacityPerson();
        $register_1->putCapacity($capacity);

        $register_2 = new Register();
        $capacity = new CapacityPerson();
        $register_2->putCapacity($capacity);

        $register_3 = new Register();
        $capacity = new CapacityPerson();
        $register_3->putCapacity($capacity);

        $register_4 = new Register();
        $capacity = new CapacityPerson();
        $register_4->putCapacity($capacity);

        $register_5 = new Register();
        $capacity = new CapacityPerson();
        $register_5->putCapacity($capacity);

        $registers = [
            $register_1,
            $register_2,
            $register_3,
            $register_4,
            $register_5
        ];
        $cashiers_counter = new CashiersCounter($registers);
        $this->super_marker = new NotFork($cashiers_counter);
    }

    public function testNew()
    {
//        $data = '42873x.3.';
//        $data = preg_split("//u", $data, -1, PREG_SPLIT_NO_EMPTY);
//
//
//        $super_marker = $this->super_marker;
//        foreach ($data as $number_of_people) {
//            if ($number_of_people === '.') {
//                $super_marker->cleanCashierCounter();
//                continue;
//            }
//
//            $customers = [];
//            $i = 0;
//            $max = (int)$number_of_people;
//            for (; $i < $max; ++$i) {
//                $customers[] = new CustomerPerson();
//            }
//            $customer_group = new CustomerGroup($customers);
//            $super_marker->joinCashiersCounter($customer_group);
//        }

        $counter = new Counter();
        var_dump($counter->count());
        var_dump($counter->count());
        var_dump($counter->count());
        var_dump($counter->count());

        
        var_dump($counter->count());
        var_dump($counter->count());
        var_dump($counter->count());
    }

}
