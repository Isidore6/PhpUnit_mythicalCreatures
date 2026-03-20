<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Wizard
{
    private string $name;
    private bool $bearded;
    private int $spellsCast = 0;

    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        $this->bearded = $options['bearded'] ?? true;
    }

    public function getName(): string { return $this->name; }
    public function isBearded(): bool { return $this->bearded; }
    public function isRested(): bool { return $this->spellsCast < 3; }
    public function incantation(string $command): string { return "sudo {$command}"; }
    public function cast(): string { $this->spellsCast++; return 'MAGIC MISSILE!'; }
}
