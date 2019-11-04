<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\Category;

use App\Domains\Category\CategoryService;
use App\Domains\Category\CategoryTranslator;
use App\Http\Responders\Category\CategoryInsertResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryInsertAction extends Controller
{
    /**
     * @var CategoryService
     */
    protected $service;
    /**
     * @var CategoryTranslator
     */
    protected $translator;
    /**
     * @var CategoryInsertResponder
     */
    protected $responder;

    public function __construct(
        CategoryService $service,
        CategoryTranslator $translator,
        CategoryInsertResponder $responder){
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