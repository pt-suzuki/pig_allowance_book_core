<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/02
 * Time: 22:35
 */

namespace App\Http\Actions\DropDown;

use App\Domains\Category\CategoryService;
use App\Domains\Category\CategoryTranslator;
use App\Http\Responders\DropDown\CategoryDropDownResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryDropDownAction extends Controller
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
     * @var CategoryDropDownResponder
     */
    protected $responder;

    public function __construct(
        CategoryService $service,
        CategoryTranslator $translator,
        CategoryDropDownResponder $responder){
        $this->service= $service;
        $this->translator =$translator;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->getResponse(
            $this->service->getDropDownListByCriteria(
                $this->translator->parseRequestToSearchCriteria($request)));
    }
}