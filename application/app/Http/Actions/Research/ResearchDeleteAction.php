<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Research;

use App\Domains\Research\ResearchService;
use App\Domains\Research\ResearchTranslator;
use App\Http\Responders\Research\ResearchDeleteResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResearchDeleteAction extends Controller
{
    /**
     * @var ResearchService
     */
    protected $service;
    /**
     * @var ResearchTranslator
     */
    protected $translator;
    /**
     * @var ResearchDeleteResponder
     */
    protected $responder;

    public function __construct(
        ResearchService $service,
        ResearchTranslator $translator,
        ResearchDeleteResponder $responder){
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