<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Pirate
{
    private string $name;
    private string $job;
    private int $heinousActs = 0;
    private int $booty = 0;

    public function __construct(string $name, string $job = 'Scallywag')
    {
        $this->name = $name;
        $this->job = $job;
    }

    public function getName(): string { return $this->name; }
    public function getJob(): string { return $this->job; }
    public function getBooty(): int { return $this->booty; }
    public function isCursed(): bool { return $this->heinousActs >= 3; }
    public function commitHeinousAct(): void { $this->heinousActs++; }
    public function robShip(): void { $this->booty += 100; }
}
