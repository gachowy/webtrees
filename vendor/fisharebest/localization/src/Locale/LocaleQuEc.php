<?php namespace Fisharebest\Localization;

/**
 * Class LocaleQuEc
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleQuEc extends LocaleQu {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryEc;
	}
}
