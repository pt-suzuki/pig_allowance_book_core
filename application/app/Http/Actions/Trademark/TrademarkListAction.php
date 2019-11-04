<?php

namespace App\Http\Actions\Trademark;

use App\Domains\Trademark\TrademarkService;
use App\Domains\Trademark\TrademarkTranslator;
use App\Http\Responders\Trademark\TrademarkListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrademarkListAction extends Controller
{
    /**
     * @var TrademarkService
     */
    protected $service;
    /**
     * @var TrademarkTranslator
     */
    protected $translator;
    /**
     * @var TrademarkListResponder
     */
    protected $responder;

    public function __construct(
        TrademarkService $service,
        TrademarkTranslator $translator,
        TrademarkListResponder $responder){
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
