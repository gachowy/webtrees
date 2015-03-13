<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArEr
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArEr extends LocaleAr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryEr;
	}
}
