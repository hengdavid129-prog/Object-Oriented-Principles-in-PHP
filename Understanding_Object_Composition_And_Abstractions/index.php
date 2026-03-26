<?php

class Subscription
{
    public function __construct(
        protected BillingPortal $BillingPortal
        ) {
            //
    }
    public function create()
    {
        $this->BillingPortal->getCustomer();
    }

    public function cancel()
    {

    }

    public function swap()
    {

    }

    public function invoice()
    {

    }
}

interface BillingPortal
{
    public function getCustomer();
    public function getSubscription();
}

class StripeBillingPortal implements BillingPortal
{
    public function getCustomer()
    {

    }

    public function getSubscription()
    {

    }
}

$subscription = new Subscription(
    new StripeBillingPortal()
);

$subscription->create();
