<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\Purchase;

use App\Domains\Purchase\PurchaseService;
use App\Domains\Purchase\PurchaseTranslator;
use App\Http\Responders\Purchase\PurchasePagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchasePagingListAction extends Controller
{
    /**
     * @var PurchaseService
     */
    protected $service;
    /**
     * @var PurchaseTranslator
     */
    protected $translator;
    /**
     * @var PurchasePagingListResponder
     */
    protected $responder;

    public function __construct(
        PurchaseService $service,
        PurchaseTranslator $translator,
        PurchasePagingListResponder $responder){
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