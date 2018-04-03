<?php
namespace ScriptFUSIONTest\Unit\Type;

use ScriptFUSION\Type\ObjectType;

final class ObjectTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testToArray()
    {
        $object = json_decode(json_encode(
            $array = [
                'foo' => [
                    'bar',
                ],
            ]
        ));

        self::assertSame($array, ObjectType::toArray($object));
    }
}
