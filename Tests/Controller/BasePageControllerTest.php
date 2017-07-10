<?php

namespace App\BasePageBundle\Tests\Controller;

use App\AppBundle\Helper\AbstractTestController;
use App\BasePageBundle\Entity\BasePage;
use App\BasePageBundle\Form\BasePageType;

class BasePageControllerTest extends AbstractTestController {

    public function getControllerBundleName() {
        return 'AppBasePageBundle';
    }

    public function getControllerEntity() {
        return new BasePage;
    }

    public function getControllerFormType() {
        return BasePageType::class;
    }

}
