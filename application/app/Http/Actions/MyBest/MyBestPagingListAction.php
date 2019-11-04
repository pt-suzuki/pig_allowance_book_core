<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\MyBest;

use App\Domains\MyBest\MyBestService;
use App\Domains\MyBest\MyBestTranslator;
use App\Http\Responders\MyBest\MyBestPagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyBestPagingListAction extends Controller
{
    /**
     * @var MyBestService
     */
    protected $service;
    /**
     * @var MyBestTranslator
     */
    protected $translator;
    /**
     * @var MyBestPagingListResponder
     */
    protected $responder;

    public function __construct(
        MyBestService $service,
        MyBestTranslator $translator,
        MyBestPagingListResponder $responder){
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