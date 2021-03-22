<?php

namespace KCS;

class Config
{
    /** @var string */
    public $dbHost;

    /** @var string */
    public $dbName;

    /** @var string */
    public $dbPass;

    /** @var string */
    public $dbUser;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->dbHost = $this->getEnv('DB_HOST');
        $this->dbName = $this->getEnv('DB_NAME');
        $this->dbPass = $this->getEnv('DB_PASS');
        $this->dbUser = $this->getEnv('DB_USER');
    }

    /**
     * @param  string  $index
     *
     * @return mixed
     */
    private function getEnv(string $index): string
    {
        return $_ENV[$index] ?? $_SERVER[$index] ?? getenv($index);
    }
}
