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
use App\Http\Responders\Shop\ShopInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopInsertAction extends Controller
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
     * @var ShopInsertResponder
     */
    protected $responder;

    public function __construct(
        ShopService $service,
        ShopTranslator $translator,
        ShopInsertResponder $responder){
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