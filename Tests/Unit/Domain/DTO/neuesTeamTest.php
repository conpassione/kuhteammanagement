<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Tests\Unit\Domain\DTO;
use Conpassione\kuhteammanagement\Domain\DTO\neuesTeam;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class neuesTeamTest extends UnitTestCase {

    protected ?neuesTeam $subject;

    protected function setUp(): void {
        parent::setUp();
        $this->subject = neuesTeam::createEmpty();
    }

    #[Test] public function teamCanBeInstatiaated(): void {
        self::assertInstanceOf(neuesTeam::class, $this->subject);
    }

    #[Test] public function uidByDefaultZero(): void {
        self::assertSame(0,$this->subject->getUid());
    }

    #[Test] public function setLastNameSetsLastName(): void
    {
        $lastname = 'Meier';
        $this->subject->setLastname($lastname);
        self::assertSame($lastname, $this->subject->getLastname());
    }
}

