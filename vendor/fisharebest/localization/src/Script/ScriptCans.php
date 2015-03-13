<?php namespace Fisharebest\Localization;

/**
 * Class ScriptCans - Representation of the Unified Canadian Aboriginal Syllabics script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCans extends Script {
	/** {@inheritdoc} */
	public function code() {
		return 'Cans';
	}

	/** {@inheritdoc} */
	public function number() {
		return '440';
	}

	/** {@inheritdoc} */
	public function unicodeName() {
		return 'Canadian_Aboriginal';
	}
}
