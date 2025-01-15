<?php

namespace App\TableGenerator;

use Symfony\Component\Yaml\Yaml;
use Exception;

class TableGenerator
{
    private array $data = [];

    public function __construct(string $dataFile)
    {
        $data = @file_get_contents($dataFile);
        if (is_string($data)) {
            $data = base64_decode($data);
            if (is_string($data)) {
                try {
                    $data = Yaml::parse($data);
                    if (is_array($data)) {
                        $this->data = $data;
                    }
                } catch (Exception $e) {
                }
            }
        }
    }

    public function getTableData(string $tableIdentifier): ?array
    {
        return $this->data[$tableIdentifier] ?? null;
    }
}
