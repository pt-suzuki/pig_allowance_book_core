<?php

namespace App\Http\Actions\Product;

use App\Domains\Product\ProductService;
use App\Domains\Product\ProductTranslator;
use App\Http\Responders\Product\ProductListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductListAction extends Controller
{
    /**
     * @var ProductService
     */
    protected $service;
    /**
     * @var ProductTranslator
     */
    protected $translator;
    /**
     * @var ProductListResponder
     */
    protected $responder;

    public function __construct(
        ProductService $service,
        ProductTranslator $translator,
        ProductListResponder $responder){
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
