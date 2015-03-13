<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrCi
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrCi extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCi;
	}
}
