<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnBs
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnBs extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBs;
	}
}
