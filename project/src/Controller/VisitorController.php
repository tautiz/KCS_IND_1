<?php

namespace KCS\Controller;

use KCS\Manager\VisitorManager;
use KCS\Model\AddressModel;
use KCS\Model\VisitorModel;
use KCS\Render;

class VisitorController extends BaseController
{
    /**
     * @var VisitorManager
     */
    private VisitorManager $manager;

    public function __construct(VisitorManager $manager, Render $render)
    {
        parent::__construct($render);
        $this->manager = $manager;
    }

    public function index(): void
    {
        $lankytojai = $this->manager->getAllVisitors();

        $this->render->render($lankytojai);
    }

    public function store($params): void
    {
        $addressDto = $this->requestHandler->getModelDto(AddressModel::class);
        $visitorDTO = $this->requestHandler->getModelDto(VisitorModel::class);

        $address = $this->addressManager->getOrCreate($addressDto);

        $lankytojas = $this->manager->store($visitorDTO);

        $lankytojas->setAddressId($address->getId());
        $lankytojas = $this->manager->update($lankytojas);

        $this->render->render($lankytojas);
    }
}
