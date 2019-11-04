<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\User;

use App\Domains\User\UserService;
use App\Domains\User\UserTranslator;
use App\Http\Responders\User\UserDeleteResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDeleteAction extends Controller
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
     * @var UserDeleteResponder
     */
    protected $responder;

    public function __construct(
        UserService $service,
        UserTranslator $translator,
        UserDeleteResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse(
            $this->service->delete($this->translator->parseRequestToModel($request,$id)));
    }
}