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
use App\Http\Responders\Research\ResearchUpdateResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResearchUpdateAction extends Controller
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
     * @var ResearchUpdateResponder
     */
    protected $responder;

    public function __construct(
        ResearchService $service,
        ResearchTranslator $translator,
        ResearchUpdateResponder $responder){
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