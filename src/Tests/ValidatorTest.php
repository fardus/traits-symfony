<?php

namespace Fardus\Traits\Symfony\Tests;

use Symfony\Component\Validator\Validator\ValidatorInterface;

trait ValidatorTest
{
    protected function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
    }

    public function assertHasErrors(object $content, int $number): void
    {
        $errors = self::$container->get(ValidatorInterface::class)->validate($content);
        $this->assertCount($number, $errors);
    }
}
