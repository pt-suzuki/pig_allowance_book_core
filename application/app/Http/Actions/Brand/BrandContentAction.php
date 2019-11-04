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
use App\Http\Responders\Brand\BrandContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandContentAction extends Controller
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
     * @var BrandContentResponder
     */
    protected $responder;

    public function __construct(
        BrandService $service,
        BrandTranslator $translator,
        BrandContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}