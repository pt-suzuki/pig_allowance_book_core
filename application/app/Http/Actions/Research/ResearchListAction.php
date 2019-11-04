<?php

namespace App\Http\Actions\Research;

use App\Domains\Research\ResearchService;
use App\Domains\Research\ResearchTranslator;
use App\Http\Responders\Research\ResearchListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResearchListAction extends Controller
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
     * @var ResearchListResponder
     */
    protected $responder;

    public function __construct(
        ResearchService $service,
        ResearchTranslator $translator,
        ResearchListResponder $responder){
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
