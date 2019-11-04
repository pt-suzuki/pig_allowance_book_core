<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Brand;

use App\Domains\Brand\BrandService;
use App\Domains\Brand\BrandTranslator;
use App\Http\Responders\Brand\BrandListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandDeleteAction extends Controller
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
     * @var BrandListResponder
     */
    protected $responder;

    public function __construct(
        BrandService $service,
        BrandTranslator $translator,
        BrandListResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->getResponse(
            $this->service->get($this->translator->parseRequestToSearchCriteria($request)));
    }
}