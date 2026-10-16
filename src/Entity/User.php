<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use SolidWorx\Platform\PlatformBundle\Model\User as PlatformUser;
use SolidWorx\Platform\PlatformBundle\Repository\UserRepository;

// The repository is what the platform_user provider loads users through: it implements
// UserLoaderInterface, so leaving it off breaks login with a Doctrine provider error.
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User extends PlatformUser
{
}
