<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Dragon
{
    private string $name;
    private string $color;
    private string $rider;
    private int $eatCount = 0;

    public function __construct(string $name, string $color, string $rider)
    {
        $this->name = $name;
        $this->color = $color;
        $this->rider = $rider;
    }

    public function getName(): string { return $this->name; }
    public function getColor(): string { return $this->color; }
    public function getRider(): string { return $this->rider; }
    public function isHungry(): bool { return $this->eatCount < 3; }
    public function eat(): void { $this->eatCount++; }
}
