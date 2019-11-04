<?php

namespace App\Http\Actions\ToDo;

use App\Domains\ToDo\ToDoService;
use App\Domains\ToDo\ToDoTranslator;
use App\Http\Responders\ToDo\ToDoListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToDoListAction extends Controller
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
     * @var ToDoListResponder
     */
    protected $responder;

    public function __construct(
        ToDoService $service,
        ToDoTranslator $translator,
        ToDoListResponder $responder){
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
