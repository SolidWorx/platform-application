<?php

declare(strict_types=1);

namespace App\Menu;

use Knp\Menu\ItemInterface;
use SolidWorx\Platform\PlatformBundle\Attributes\Menu\MenuBuilder;
use SolidWorx\Platform\PlatformBundle\Menu\Options;
use SolidWorx\Platform\PlatformBundle\Menu\UserMenu;

final class SidebarMenu
{
    #[MenuBuilder(name: 'sidebar')]
    public function sidebar(ItemInterface $menu): void
    {
        $menu->addChild('Dashboard', Options::create()->route('app_home')->icon('home')->build());
    }

    #[MenuBuilder(name: UserMenu::NAME)]
    public function userMenu(ItemInterface $menu): void
    {
        $menu->addChild('Home', Options::create()->route('app_home')->icon('home')->build());
    }
}
