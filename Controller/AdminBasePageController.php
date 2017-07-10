<?php

namespace App\BasePageBundle\Controller;

use App\AppBundle\Helper\AbstractAdminController;
use App\BasePageBundle\Entity\BasePage;
use App\BasePageBundle\Form\BasePageType;

/**
 * Admin controller.
 *
 */
class AdminBasePageController extends AbstractAdminController {

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
