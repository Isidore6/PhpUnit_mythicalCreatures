<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Victim
{
    private string $name;
    private bool $dead = false;

    public function __construct(string $name) { $this->name = $name; }

    public function getName(): string { return $this->name; }
    public function isDead(): bool { return $this->dead; }
    public function kill(): void { $this->dead = true; }
}
