<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFf - Fulah
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFf extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Pulaar';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'PULAAR';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageFf;
	}

	/** {@inheritdoc} */
	public function numberSymbols() {
		return array(
			self::GROUP   => self::NBSP,
			self::DECIMAL => self::COMMA,
		);
	}
}
