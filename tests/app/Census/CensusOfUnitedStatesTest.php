<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2019 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Census;

use Fisharebest\Webtrees\TestCase;

/**
 * Test harness for the class CensusOfUnitedStates
 */
class CensusOfUnitedStatesTest extends TestCase
{
    /**
     * Test the census place
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfUnitedStates
     *
     * @return void
     */
    public function testPlace(): void
    {
        $census = new CensusOfUnitedStates();

        $this->assertSame('United States', $census->censusPlace());
    }

    /**
     * Test the census dates
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfUnitedStates
     *
     * @return void
     */
    public function testAllDates(): void
    {
        $census = new CensusOfUnitedStates();

        $census_dates = $census->allCensusDates();

        $this->assertCount(16, $census_dates);
        $this->assertInstanceOf(CensusOfUnitedStates1790::class, $census_dates[0]);
        $this->assertInstanceOf(CensusOfUnitedStates1800::class, $census_dates[1]);
        $this->assertInstanceOf(CensusOfUnitedStates1810::class, $census_dates[2]);
        $this->assertInstanceOf(CensusOfUnitedStates1820::class, $census_dates[3]);
        $this->assertInstanceOf(CensusOfUnitedStates1830::class, $census_dates[4]);
        $this->assertInstanceOf(CensusOfUnitedStates1840::class, $census_dates[5]);
        $this->assertInstanceOf(CensusOfUnitedStates1850::class, $census_dates[6]);
        $this->assertInstanceOf(CensusOfUnitedStates1860::class, $census_dates[7]);
        $this->assertInstanceOf(CensusOfUnitedStates1870::class, $census_dates[8]);
        $this->assertInstanceOf(CensusOfUnitedStates1880::class, $census_dates[9]);
        $this->assertInstanceOf(CensusOfUnitedStates1890::class, $census_dates[10]);
        $this->assertInstanceOf(CensusOfUnitedStates1900::class, $census_dates[11]);
        $this->assertInstanceOf(CensusOfUnitedStates1910::class, $census_dates[12]);
        $this->assertInstanceOf(CensusOfUnitedStates1920::class, $census_dates[13]);
        $this->assertInstanceOf(CensusOfUnitedStates1930::class, $census_dates[14]);
        $this->assertInstanceOf(CensusOfUnitedStates1940::class, $census_dates[15]);
    }
}
