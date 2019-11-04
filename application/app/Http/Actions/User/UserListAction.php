<?php

namespace App\Http\Actions\User;

use App\Domains\User\UserService;
use App\Domains\User\UserTranslator;
use App\Http\Responders\User\UserListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserListAction extends Controller
{
    /**
     * @var UserService
     */
    protected $service;
    /**
     * @var UserTranslator
     */
    protected $translator;
    /**
     * @var UserListResponder
     */
    protected $responder;

    public function __construct(
        UserService $service,
        UserTranslator $translator,
        UserListResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->getResponse(
            $this->service->getListByCriteria($this->translator->parseRequestToSearchCriteria($request)));
    }
}
