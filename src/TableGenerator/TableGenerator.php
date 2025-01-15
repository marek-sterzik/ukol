<?php

namespace App\TableGenerator;

use Symfony\Component\Yaml\Yaml;

class TableGenerator
{
    private array $data;

    public function __construct(string $dataFile)
    {
        $this->data = Yaml::parseFile($dataFile);
    }

    public function getTableData(string $tableIdentifier): ?array
    {
        return $this->data[$tableIdentifier] ?? null;
    }
}
