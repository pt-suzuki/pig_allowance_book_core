<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\User;

use App\Domains\User\UserService;
use App\Domains\User\UserTranslator;
use App\Http\Responders\User\UserPagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPagingListAction extends Controller
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
     * @var UserPagingListResponder
     */
    protected $responder;

    public function __construct(
        UserService $service,
        UserTranslator $translator,
        UserPagingListResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->getResponse(
            $this->service->getPaginateListByCriteria($this->translator->parseRequestToSearchCriteria($request)));
    }
}