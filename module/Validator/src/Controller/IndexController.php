<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Validator\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Validator\StringLength;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $validator = new StringLength([
            'min' => 6,
            'max' => 10
        ]);
        $var = "tes7777777777777t";
        if ($validator->isValid($var)) {
            echo $var;
        } else {
            $massages = $validator->getMessages();
            foreach ($massages as $error) {
                echo $error . '<br>';
            }
        }
        return false;
    }
}
