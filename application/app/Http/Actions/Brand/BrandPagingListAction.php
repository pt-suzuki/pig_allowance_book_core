<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\Brand;

use App\Domains\Brand\BrandService;
use App\Domains\Brand\BrandTranslator;
use App\Http\Controllers\Controller;
use App\Http\Responders\Brand\BrandPagingListResponder;
use Illuminate\Http\Request;

class BrandPagingListAction extends Controller
{
    /**
     * @var BrandService
     */
    protected $service;
    /**
     * @var BrandTranslator
     */
    protected $translator;
    /**
     * @var BrandPagingListResponder
     */
    protected $responder;

    public function __construct(
        BrandService $service,
        BrandTranslator $translator,
        BrandPagingListResponder $responder){
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