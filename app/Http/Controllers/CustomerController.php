<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;

class CustomerController extends Controller
{
    /**
     * @var CustomerService
     */
    protected $customerService;

    /**
     * CustomerController constructor.
     * @param CustomerService $customerService
     */
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->findAll();

        return view('customer', compact('customers'));
    }
}
