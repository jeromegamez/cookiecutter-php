<?php

declare(strict_types=1);

namespace {{ cookiecutter.psr4_namespace }}\Tests;

use {{ cookiecutter.psr4_namespace }}\Placeholder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
#[CoversClass(Placeholder::class)]
final class PlaceholderTest extends TestCase
{
    #[Test]
    public function testItEchoesAValue(): void
    {
        $placeholder = new Placeholder('Test: ');
        $result = $placeholder->echo('Hello');

        self::assertSame('Test: Hello', $result);
    }
}
