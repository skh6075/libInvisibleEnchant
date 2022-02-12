<?php

declare(strict_types=1);

namespace skh6075\lib\invisibleenchant;

use InvalidArgumentException;
use pocketmine\data\bedrock\EnchantmentIdMap;
use pocketmine\plugin\Plugin;
use skh6075\lib\invisibleenchant\data\InvisibleEnchantmentMapping;
use skh6075\lib\invisibleenchant\enchant\InvisibleEnchantment;

final class InvisibleEnchantHandler{

	private static ?Plugin $registrant = null;

	public static function isRegistered(): bool{
		return self::$registrant !== null;
	}

	public static function register(Plugin $plugin): void{
		if(self::isRegistered()){
			throw new InvalidArgumentException("Already linked with other plugin.");
		}
		self::$registrant = $plugin;
		self::registerEnchantment();
	}

	private static function registerEnchantment(): void{
		EnchantmentIdMap::getInstance()->register(InvisibleEnchantment::ID, InvisibleEnchantmentMapping::INVISIBLE());
	}
}