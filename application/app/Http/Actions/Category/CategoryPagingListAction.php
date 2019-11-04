<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:35
 */

namespace App\Http\Actions\Category;

use App\Domains\Category\CategoryService;
use App\Domains\Category\CategoryTranslator;
use App\Http\Responders\Category\CategoryPagingListResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryPagingListAction extends Controller
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
     * @var CategoryPagingListResponder
     */
    protected $responder;

    public function __construct(
        CategoryService $service,
        CategoryTranslator $translator,
        CategoryPagingListResponder $responder){
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