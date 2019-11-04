<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\Trademark;

use App\Domains\Trademark\TrademarkService;
use App\Domains\Trademark\TrademarkTranslator;
use App\Http\Responders\Trademark\TrademarkPagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrademarkPagingListAction extends Controller
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
     * @var TrademarkPagingListResponder
     */
    protected $responder;

    public function __construct(
        TrademarkService $service,
        TrademarkTranslator $translator,
        TrademarkPagingListResponder $responder){
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