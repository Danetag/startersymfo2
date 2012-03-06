<?php

namespace Danetag\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DanetagUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
