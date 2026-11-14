<?php

declare(strict_types=1);

namespace Liberu\Cms\Hello\Fields;

use Liberu\Cms\Contracts\Fields\FieldTypeDefinition;
use Liberu\Cms\Contracts\Fields\FieldTypeRegistryInterface;

/**
 * Registers the "greeting" content-type field kind, so a content type can carry
 * a greeting field that renders and validates like a built-in kind.
 */
final class GreetingFieldType
{
    public static function registerInto(FieldTypeRegistryInterface $registry): void
    {
        $registry->register(new FieldTypeDefinition(
            'greeting',
            'Greeting',
            static fn (string $path, array $options): object => (object) ['path' => $path, 'options' => $options],
            static fn (mixed $value): bool => is_string($value),
        ));
    }
}
