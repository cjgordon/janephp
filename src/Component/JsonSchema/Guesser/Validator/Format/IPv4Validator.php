<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Ip;

class IPv4Validator implements ValidatorInterface
{
    public function supports($object): bool
    {
        return $object instanceof JsonSchema && ((\is_array($object->getType()) ? \in_array('string', $object->getType()) : 'string' === $object->getType()) || null === $object->getType()) && 'ipv4' === $object->getFormat();
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Ip::class, [
            'version' => Ip::V4,
        ]));
    }
}
