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
use App\Http\Responders\User\UserInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserInsertAction extends Controller
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
     * @var UserInsertResponder
     */
    protected $responder;

    public function __construct(
        UserService $service,
        UserTranslator $translator,
        UserInsertResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->getResponse(
            $this->service->save($this->translator->parseRequestToModel($request)));
    }
}