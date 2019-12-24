<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\DropDown;

use App\Domains\Product\ProductService;
use App\Domains\Product\ProductTranslator;
use App\Http\Responders\DropDown\ProductDropDownResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDropDownAction extends Controller
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
     * @var ProductDropDownResponder
     */
    protected $responder;

    public function __construct(
        ProductService $service,
        ProductTranslator $translator,
        ProductDropDownResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->getResponse(
            $this->service->getDropDownListByCriteria(
                $this->translator->parseRequestToSearchCriteria($request)));
    }
}