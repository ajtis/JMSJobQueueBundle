<?php

namespace JMS\JobQueueBundle\Entity\Type;

use Doctrine\DBAL\Types\JsonType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class SafeObjectType extends JsonType
{
    #[\Override]
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return $platform->getJsonTypeDeclarationSQL($fieldDeclaration);
    }

}
