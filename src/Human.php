<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Human
{
    private string $name = 'Jane';
    private int $encounterCounter = 0;
    private bool $knockedOut = false;

    public function getName(): string { return $this->name; }
    public function getEncounterCounter(): int { return $this->encounterCounter; }
    public function incrementEncounter(): void { $this->encounterCounter++; }
    public function noticesOgre(): bool { return $this->encounterCounter % 3 === 0; }
    public function knockOut(): void { $this->knockedOut = true; }
    public function wakeUp(): void { $this->knockedOut = false; }
    public function isKnockedOut(): bool { return $this->knockedOut; }
}
