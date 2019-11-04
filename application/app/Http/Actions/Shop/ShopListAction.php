<?php

namespace App\Http\Actions\Shop;

use App\Domains\Shop\ShopService;
use App\Domains\Shop\ShopTranslator;
use App\Http\Responders\Shop\ShopListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopListAction extends Controller
{
    /**
     * @var ShopService
     */
    protected $service;
    /**
     * @var ShopTranslator
     */
    protected $translator;
    /**
     * @var ShopListResponder
     */
    protected $responder;

    public function __construct(
        ShopService $service,
        ShopTranslator $translator,
        ShopListResponder $responder){
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
