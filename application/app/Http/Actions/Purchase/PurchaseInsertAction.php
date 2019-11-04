<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Purchase;

use App\Domains\Purchase\PurchaseService;
use App\Domains\Purchase\PurchaseTranslator;
use App\Http\Responders\Purchase\PurchaseInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseInsertAction extends Controller
{
    /**
     * @var PurchaseService
     */
    protected $service;
    /**
     * @var PurchaseTranslator
     */
    protected $translator;
    /**
     * @var PurchaseInsertResponder
     */
    protected $responder;

    public function __construct(
        PurchaseService $service,
        PurchaseTranslator $translator,
        PurchaseInsertResponder $responder){
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