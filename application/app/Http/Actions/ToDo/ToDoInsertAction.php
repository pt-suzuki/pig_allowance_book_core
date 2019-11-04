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
use App\Http\Responders\ToDo\ToDoInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToDoInsertAction extends Controller
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
     * @var ToDoInsertResponder
     */
    protected $responder;

    public function __construct(
        ToDoService $service,
        ToDoTranslator $translator,
        ToDoInsertResponder $responder){
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