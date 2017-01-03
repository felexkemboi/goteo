<?php


namespace Goteo\Controller\Admin\Tests;

use Goteo\Controller\Admin\UsersSubController;
use Goteo\Model\User;
use Symfony\Component\HttpFoundation\Request;

class UsersSubControllerTest extends \PHPUnit_Framework_TestCase {

    public function testInstance() {
        $user = new User();
        $node = 'test';
        $request = Request::create();

        $controller = new UsersSubController($node, $user, $request);

        $this->assertInstanceOf('\Goteo\Controller\Admin\UsersSubController', $controller);

        return $controller;
    }
}