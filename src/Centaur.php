<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Centaur
{
    private string $name;
    private string $breed;
    private int $actions = 0;
    private bool $standing = true;

    public function __construct(string $name, string $breed)
    {
        $this->name = $name;
        $this->breed = $breed;
    }

    public function getName(): string { return $this->name; }
    public function getBreed(): string { return $this->breed; }
    public function isCranky(): bool { return $this->actions >= 3; }
    public function isStanding(): bool { return $this->standing; }
    public function isLaying(): bool { return !$this->standing; }

    public function shoot(): string
    {
        if (!$this->standing || $this->isCranky()) return 'NO!';
        $this->actions++;
        return 'Twang!!!';
    }

    public function run(): string
    {
        if (!$this->standing || $this->isCranky()) return 'NO!';
        $this->actions++;
        return 'Clop clop clop clop!';
    }

    public function layDown(): void { $this->standing = false; }
    public function standUp(): void { $this->standing = true; }

    public function sleep(): string
    {
        if ($this->standing) return 'NO!';
        $this->actions = 0;
        return 'Zzzzz...';
    }

    public function drinkPotion(): void
    {
        if ($this->standing) { $this->actions = 0; }
    }
}
