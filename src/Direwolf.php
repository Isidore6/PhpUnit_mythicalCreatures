<?php
declare(strict_types=1);
namespace MythicalCreatures;

class Direwolf
{
    private string $name;
    private string $home;
    private string $size;
    private array $starksToProtect = [];
    private const MAX_STARKS = 2;

    public function __construct(string $name, string $home = 'Beyond the Wall', string $size = 'Massive')
    {
        $this->name = $name;
        $this->home = $home;
        $this->size = $size;
    }

    public function getName(): string { return $this->name; }
    public function getHome(): string { return $this->home; }
    public function getSize(): string { return $this->size; }
    public function getStarksToProtect(): array { return $this->starksToProtect; }

    public function protects(Stark $stark): void
    {
        if (count($this->starksToProtect) >= self::MAX_STARKS) return;
        if ($stark->getLocation() !== $this->home) return;
        $this->starksToProtect[] = $stark;
        $stark->setSafe(true);
    }

    public function leaves(Stark $stark): Stark
    {
        $this->starksToProtect = array_values(
            array_filter($this->starksToProtect, fn(Stark $s) => $s->getName() !== $stark->getName())
        );
        $stark->setSafe(false);
        return $stark;
    }

    public function huntsWhiteWalkers(): bool { return empty($this->starksToProtect); }
}
