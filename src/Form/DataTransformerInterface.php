<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use App\Entity\User;
use App\Entity\Centre;

class UserToCentreTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        // transform the User object to a Centre object
        if ($value instanceof User) {
            return new Centre($value->getNom());
        }

        return null;
    }

    public function reverseTransform($value)
    {
        // transform the Centre object back to a User object
        if ($value instanceof Centre) {
            $user = new User();
            $user->setNom($value->getNom());

            return $user;
        }

        return null;
    }
}
