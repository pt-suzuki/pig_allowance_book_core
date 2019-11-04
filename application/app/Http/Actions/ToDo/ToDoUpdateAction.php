<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\ToDo;

use App\Domains\ToDo\ToDoService;
use App\Domains\ToDo\ToDoTranslator;
use App\Http\Responders\ToDo\ToDoUpdateResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToDoUpdateAction extends Controller
{
    /**
     * @var ToDoService
     */
    protected $service;
    /**
     * @var ToDoTranslator
     */
    protected $translator;
    /**
     * @var ToDoUpdateResponder
     */
    protected $responder;

    public function __construct(
        ToDoService $service,
        ToDoTranslator $translator,
        ToDoUpdateResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse(
            $this->service->save($this->translator->parseRequestToModel($request,$id)));
    }
}