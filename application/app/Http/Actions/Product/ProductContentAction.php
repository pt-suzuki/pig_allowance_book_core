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
use App\Http\Responders\Product\ProductContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductContentAction extends Controller
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
     * @var ProductContentResponder
     */
    protected $responder;

    public function __construct(
        ProductService $service,
        ProductTranslator $translator,
        ProductContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}