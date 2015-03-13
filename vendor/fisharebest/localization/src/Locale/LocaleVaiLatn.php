<?php namespace Fisharebest\Localization;

/**
 * Class LocaleVaiLatn
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleVaiLatn extends LocaleVai {
	/** {@inheritdoc} */
	public function script() {
		return new ScriptLatn;
	}
}
