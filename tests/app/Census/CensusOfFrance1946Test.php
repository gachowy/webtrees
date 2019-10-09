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
 * Test harness for the class CensusOfFrance1946
 */
class CensusOfFrance1946Test extends TestCase
{
    /**
     * Test the census place and date
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfFrance1946
     *
     * @return void
     */
    public function testPlaceAndDate(): void
    {
        $census = new CensusOfFrance1946();

        $this->assertSame('France', $census->censusPlace());
        $this->assertSame('17 JAN 1946', $census->censusDate());
    }

    /**
     * Test the census columns
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfFrance1946
     * @covers \Fisharebest\Webtrees\Census\AbstractCensusColumn
     *
     * @return void
     */
    public function testColumns(): void
    {
        $census  = new CensusOfFrance1946();
        $columns = $census->columns();

        $this->assertCount(6, $columns);
        $this->assertInstanceOf(CensusColumnSurname::class, $columns[0]);
        $this->assertInstanceOf(CensusColumnGivenNames::class, $columns[1]);
        $this->assertInstanceOf(CensusColumnRelationToHead::class, $columns[2]);
        $this->assertInstanceOf(CensusColumnBirthYear::class, $columns[3]);
        $this->assertInstanceOf(CensusColumnNationality::class, $columns[4]);
        $this->assertInstanceOf(CensusColumnOccupation::class, $columns[5]);

        $this->assertSame('Nom', $columns[0]->abbreviation());
        $this->assertSame('Prénom', $columns[1]->abbreviation());
        $this->assertSame('Parenté', $columns[2]->abbreviation());
        $this->assertSame('Année', $columns[3]->abbreviation());
        $this->assertSame('Nationalité', $columns[4]->abbreviation());
        $this->assertSame('Profession', $columns[5]->abbreviation());

        $this->assertSame('Nom de famille', $columns[0]->title());
        $this->assertSame('Prénom usuel', $columns[1]->title());
        $this->assertSame('Parenté avec le chef de ménage ou situation dans le ménage', $columns[2]->title());
        $this->assertSame('Année de naissance', $columns[3]->title());
        $this->assertSame('', $columns[4]->title());
        $this->assertSame('', $columns[5]->title());
    }
}
