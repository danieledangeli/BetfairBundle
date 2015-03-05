<?php

namespace Erlangb\BetfairBundle;
use Erlangb\BetfairBundle\DependencyInjection\BetfairBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BetfairBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new BetfairBundleExtension();
    }

} 