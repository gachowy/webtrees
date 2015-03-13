<?php namespace Fisharebest\Localization;

/**
 * Class LocaleMl - Malayalam
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleMl extends Locale {
	/** {@inheritdoc} */
	protected function digitsGroup() {
		return 2;
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'മലയാളം';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageMl;
	}
}
