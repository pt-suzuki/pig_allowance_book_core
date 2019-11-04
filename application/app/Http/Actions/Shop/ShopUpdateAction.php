<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Shop;

use App\Domains\Shop\ShopService;
use App\Domains\Shop\ShopTranslator;
use App\Http\Responders\Shop\ShopUpdateResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopUpdateAction extends Controller
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
     * @var ShopUpdateResponder
     */
    protected $responder;

    public function __construct(
        ShopService $service,
        ShopTranslator $translator,
        ShopUpdateResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse(
            $this->service->save($this->translator->parseRequestToModel($request,$id)));
    }
}