<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\Shop;

use App\Domains\Shop\ShopService;
use App\Domains\Shop\ShopTranslator;
use App\Http\Responders\Shop\ShopPagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopPagingListAction extends Controller
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
     * @var ShopPagingListResponder
     */
    protected $responder;

    public function __construct(
        ShopService $service,
        ShopTranslator $translator,
        ShopPagingListResponder $responder){
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