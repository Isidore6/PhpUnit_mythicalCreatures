<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Vampire
{
    private string $name;
    private string $pet;
    private bool $thirsty = true;

    public function __construct(string $name, string $pet = 'bat')
    {
        $this->name = $name;
        $this->pet = $pet;
    }

    public function getName(): string { return $this->name; }
    public function getPet(): string { return $this->pet; }
    public function isThirsty(): bool { return $this->thirsty; }
    public function drink(): void { $this->thirsty = false; }
}
