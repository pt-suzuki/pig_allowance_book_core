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
use App\Http\Responders\User\UserContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserContentAction extends Controller
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
     * @var UserContentResponder
     */
    protected $responder;

    public function __construct(
        UserService $service,
        UserTranslator $translator,
        UserContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}