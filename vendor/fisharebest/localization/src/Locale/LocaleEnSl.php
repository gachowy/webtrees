<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnSl
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnSl extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritorySl;
	}
}
