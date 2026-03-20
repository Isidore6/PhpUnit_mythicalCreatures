<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Medusa
{
    private string $name;
    private array $statues = [];
    private const MAX_VICTIMS = 3;

    public function __construct(string $name) { $this->name = $name; }

    public function getName(): string { return $this->name; }
    public function getStatues(): array { return $this->statues; }

    public function stare(Person $person): void
    {
        if (count($this->statues) >= self::MAX_VICTIMS) {
            $oldest = array_shift($this->statues);
            $oldest->unpetrify();
        }
        $person->petrify();
        $this->statues[] = $person;
    }
}
