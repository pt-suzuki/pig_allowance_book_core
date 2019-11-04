<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Product;

use App\Domains\Product\ProductService;
use App\Domains\Product\ProductTranslator;
use App\Http\Responders\Product\ProductInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductInsertAction extends Controller
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
     * @var ProductInsertResponder
     */
    protected $responder;

    public function __construct(
        ProductService $service,
        ProductTranslator $translator,
        ProductInsertResponder $responder){
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