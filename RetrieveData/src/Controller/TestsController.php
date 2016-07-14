<?php
/**
 * Created by PhpStorm.
 * User: rhull
 * Date: 7/13/16
 * Time: 2:19 PM
 */

namespace App\Controller;


class TestsController extends AppController
{
    public function index()
    {
        $this->set('color', 'blue');
    }

}