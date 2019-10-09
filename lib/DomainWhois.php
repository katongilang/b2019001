<?php 
namespace DNLib;

class DomainWhois
{
    public function isAvailable($domain)
    {
        sleep(2);
        return (rand(0, 1) == 0);
    }
}
