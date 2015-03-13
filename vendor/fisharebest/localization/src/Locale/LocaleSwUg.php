<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSwUg
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSwUg extends LocaleSw {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryUg;
	}
}
