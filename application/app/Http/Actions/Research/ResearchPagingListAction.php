<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\Research;

use App\Domains\Research\ResearchService;
use App\Domains\Research\ResearchTranslator;
use App\Http\Responders\Research\ResearchPagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResearchPagingListAction extends Controller
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
     * @var ResearchPagingListResponder
     */
    protected $responder;

    public function __construct(
        ResearchService $service,
        ResearchTranslator $translator,
        ResearchPagingListResponder $responder){
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