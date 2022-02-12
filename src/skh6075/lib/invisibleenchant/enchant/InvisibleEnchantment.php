<?php

declare(strict_types=1);

namespace skh6075\lib\invisibleenchant\enchant;

use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\ItemFlags;
use pocketmine\item\enchantment\Rarity;

final class InvisibleEnchantment extends Enchantment{
	public const ID = -1;

	public function __construct(){
		parent::__construct('깔끔한', Rarity::COMMON, ItemFlags::ALL, ItemFlags::ALL, 1);
	}
}