<?php

namespace Fardus\Traits\Symfony\Model;

use Fardus\Traits\Symfony\Accessors\EmailAccessorsTrait;

/**
 * trait EmailTrait
 * @package Fardus\Traits\Symfony\Model
 */
trait EmailTrait
{
    use EmailAccessorsTrait;

    /**
     * @var string
     */
    protected $email;

}
