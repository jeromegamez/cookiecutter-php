<?php

declare(strict_types=1);

namespace {{ cookiecutter.psr4_namespace }}\Tests;

use {{ cookiecutter.psr4_namespace }}\Placeholder;
use PHPUnit\Framework\TestCase;

final class PlaceholderTest extends TestCase
{
    private Placeholder $placeholder;

    protected function setUp(): void
    {
        $this->placeholder = new Placeholder('{{ cookiecutter.full_name }} says: ');
    }

    public function testItEchoesAValue(): void
    {
        self::assertSame('{{ cookiecutter.full_name }} says: Hello', $this->placeholder->echo('Hello'));
    }
}
