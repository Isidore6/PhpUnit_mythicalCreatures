<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Werewolf
{
    private string $name;
    private string $location;
    private bool $wolf = false;
    private bool $hungry = false;

    public function __construct(string $name, string $location = 'Unknown')
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function getName(): string { return $this->name; }
    public function getLocation(): string { return $this->location; }
    public function isHuman(): bool { return !$this->wolf; }
    public function isWolf(): bool { return $this->wolf; }
    public function isHungry(): bool { return $this->hungry; }

    public function change(): void
    {
        $this->wolf = !$this->wolf;
        if ($this->wolf) { $this->hungry = true; }
    }

    public function consume(Victim $victim): void
    {
        if (!$this->wolf) return;
        $victim->kill();
        $this->hungry = false;
    }
}
