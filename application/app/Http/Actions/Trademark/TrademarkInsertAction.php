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
use App\Http\Responders\Trademark\TrademarkInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrademarkInsertAction extends Controller
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
     * @var TrademarkInsertResponder
     */
    protected $responder;

    public function __construct(
        TrademarkService $service,
        TrademarkTranslator $translator,
        TrademarkInsertResponder $responder){
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