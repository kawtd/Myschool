<?php

namespace My\schoolBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyschoolBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
