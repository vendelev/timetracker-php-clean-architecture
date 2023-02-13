<?php
declare(strict_types=1);

namespace App\Core\Infrastructure;

use App\Core\Domain\Interfaces\DbConnectionInterface;
use SQLite3;
use SQLite3Stmt;

class SQLiteConnection implements DbConnectionInterface
{
    private SQLite3 $db;

    public function __construct(SQLite3 $db)
    {
        $this->db = $db;
    }

    public function fetchAll(string $sql, array $params = []): array
    {
        $rows = [];
        $result = $this->prepareStatement($sql, $params)->execute();
        while($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }

    private function prepareStatement(string $sql, array $params = []): SQLite3Stmt
    {
        $stmt = $this->db->prepare($sql);
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        return $stmt;
    }
}