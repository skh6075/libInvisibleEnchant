<?php

declare(strict_types=1);

namespace skh6075\lib\invisibleenchant\data;

use pocketmine\item\enchantment\Enchantment;
use pocketmine\utils\CloningRegistryTrait;
use pocketmine\utils\RegistryTrait;
use skh6075\lib\invisibleenchant\enchant\InvisibleEnchantment;

/**
 * @method static InvisibleEnchantment INVISIBLE()
 */

final class InvisibleEnchantmentMapping{
	use RegistryTrait;

	public function __construct(){}

	protected static function register(string $name, Enchantment $enchantment): void{
		self::_registryRegister($name, $enchantment);
	}

	protected static function setup() : void{
		self::register('INVISIBLE', new InvisibleEnchantment());
	}
}