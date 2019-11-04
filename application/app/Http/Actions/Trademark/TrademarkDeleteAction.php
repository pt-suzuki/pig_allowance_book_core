<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Trademark;

use App\Domains\Trademark\TrademarkService;
use App\Domains\Trademark\TrademarkTranslator;
use App\Http\Responders\Trademark\TrademarkDeleteResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrademarkDeleteAction extends Controller
{
    /**
     * @var TrademarkService
     */
    protected $service;
    /**
     * @var TrademarkTranslator
     */
    protected $translator;
    /**
     * @var TrademarkDeleteResponder
     */
    protected $responder;

    public function __construct(
        TrademarkService $service,
        TrademarkTranslator $translator,
        TrademarkDeleteResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse(
            $this->service->delete($this->translator->parseRequestToModel($request,$id)));
    }
}