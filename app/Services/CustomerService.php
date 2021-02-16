<?php


namespace App\Services;


use App\Repositories\CustomerRepository;
use App\Traits\CrudTrait;

class CustomerService
{
    use CrudTrait;

    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->setActionRepository($this->customerRepository);
    }
}
