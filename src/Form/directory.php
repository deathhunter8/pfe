<?php 

use App\Entity\Centre;
use App\Entity\User;
use Symfony\Component\Form\DataTransformerInterface;

class UserToCentreTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        // Transform the User instance to a Centre instance
        // ...

        return $centre;
    }

    public function reverseTransform($value)
    {
        // Transform the Centre instance back to a User instance
        // ...

        return $user;
    }
}

// Add the data transformer to the form field
$builder->get('email')->addModelTransformer(new UserToCentreTransformer());
