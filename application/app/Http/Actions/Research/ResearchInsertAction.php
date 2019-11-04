<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Research;

use App\Domains\Research\ResearchService;
use App\Domains\Research\ResearchTranslator;
use App\Http\Responders\Research\ResearchInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResearchInsertAction extends Controller
{
    /**
     * @var ResearchService
     */
    protected $service;
    /**
     * @var ResearchTranslator
     */
    protected $translator;
    /**
     * @var ResearchInsertResponder
     */
    protected $responder;

    public function __construct(
        ResearchService $service,
        ResearchTranslator $translator,
        ResearchInsertResponder $responder){
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