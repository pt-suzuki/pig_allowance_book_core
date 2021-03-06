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
use App\Http\Responders\ToDo\ToDoContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToDoContentAction extends Controller
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
     * @var ToDoContentResponder
     */
    protected $responder;

    public function __construct(
        ToDoService $service,
        ToDoTranslator $translator,
        ToDoContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}