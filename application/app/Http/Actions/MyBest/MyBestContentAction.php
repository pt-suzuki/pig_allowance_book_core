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
use App\Http\Responders\MyBest\MyBestContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyBestContentAction extends Controller
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
     * @var MyBestContentResponder
     */
    protected $responder;

    public function __construct(
        MyBestService $service,
        MyBestTranslator $translator,
        MyBestContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}