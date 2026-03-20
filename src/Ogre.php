<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Ogre
{
    private string $name;
    private string $home;
    private int $swings = 0;

    public function __construct(string $name, string $home = 'Swamp')
    {
        $this->name = $name;
        $this->home = $home;
    }

    public function getName(): string { return $this->name; }
    public function getHome(): string { return $this->home; }
    public function getSwings(): int { return $this->swings; }

    public function encounter(Human $human): void
    {
        $human->incrementEncounter();
        if ($human->noticesOgre()) { $this->swingAt($human); }
    }

    public function swingAt(Human $human): void
    {
        $this->swings++;
        if ($this->swings % 2 === 0) { $human->knockOut(); }
    }

    public function apologize(Human $human): void { $human->wakeUp(); }
}
