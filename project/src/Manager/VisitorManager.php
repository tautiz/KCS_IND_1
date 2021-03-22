<?php

namespace KCS\Manager;

use KCS\Repository\VisitorRepository;

class VisitorManager
{
    /**
     * @var VisitorRepository
     */
    private VisitorRepository $repository;

    public function __construct(VisitorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllVisitors()
    {
        return $this->repository->all();
    }
}
