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
use App\Http\Responders\Purchase\PurchaseContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseContentAction extends Controller
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
     * @var PurchaseContentResponder
     */
    protected $responder;

    public function __construct(
        PurchaseService $service,
        PurchaseTranslator $translator,
        PurchaseContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}