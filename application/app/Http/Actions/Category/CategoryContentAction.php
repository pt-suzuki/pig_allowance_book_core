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
use App\Http\Responders\Category\CategoryContentResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryContentAction extends Controller
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
     * @var CategoryContentResponder
     */
    protected $responder;

    public function __construct(
        CategoryService $service,
        CategoryTranslator $translator,
        CategoryContentResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(string $id,Request $request)
    {
        return $this->responder->getResponse($this->service->getContentById($id));
    }
}