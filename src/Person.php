<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Person
{
    private string $name;
    private bool $stoned = false;

    public function __construct(string $name) { $this->name = $name; }

    public function getName(): string { return $this->name; }
    public function isStoned(): bool { return $this->stoned; }
    public function petrify(): void { $this->stoned = true; }
    public function unpetrify(): void { $this->stoned = false; }
}
