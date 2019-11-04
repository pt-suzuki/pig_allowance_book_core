<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\MyBest;

use App\Domains\MyBest\MyBestService;
use App\Domains\MyBest\MyBestTranslator;
use App\Http\Responders\MyBest\MyBestInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyBestInsertAction extends Controller
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
     * @var MyBestInsertResponder
     */
    protected $responder;

    public function __construct(
        MyBestService $service,
        MyBestTranslator $translator,
        MyBestInsertResponder $responder){
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