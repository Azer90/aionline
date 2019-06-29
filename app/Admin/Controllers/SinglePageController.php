<?php

namespace App\Admin\Controllers;

use App\SinglePage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SinglePageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '服务定制单页';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SinglePage);

        $grid->id('ID')->sortable();
        $grid->column('c_name', '栏目');
        $grid->column('title', trans('admin.title'));
        $grid->column('keywords', trans('admin.keywords'))->style('max-width:200px;word-break:break-all;');
        $grid->description(trans('admin.description'))->style('max-width:200px;word-break:break-all;')->display(function ($text) {
            return  str_limit($text, 100, '...');
        });


        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '关闭', 'color' => 'default'],
        ];
        $grid->show(trans('admin.show'))->switch($states);

        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

        $grid->actions(function ($actions) {
            if (!Admin::user()->isAdministrator()) {
                $actions->disableDelete();
            }
            $actions->disableView();
        });
        $grid->disableExport();
        if (!Admin::user()->isAdministrator()) {
            $grid->tools(function ($tools) {
                $tools->batch(function ($batch) {
                    $batch->disableDelete();
                });
            });
        }

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SinglePage::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SinglePage);

        $form->display('id', 'ID');

        $form->text('c_name', '栏目')->rules('required');
        $form->text('title', trans('admin.title'))->rules('required');
        $form->text('keywords', trans('admin.keywords'))->placeholder('多关键词之间用英文逗号隔开')->rules('required');
        $form->text('description', trans('admin.description'))->placeholder('填写文章内容描述')->rules('required|max:120');

        $form->UEditor('content',trans('admin.content'))->rules('required');

        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
        ];

        $form->switch('show', trans('admin.show'))->states($states);

        $form->display('created_at', trans('admin.created_at'));
        $form->display('updated_at', trans('admin.updated_at'));
        $form->footer(function ($footer) {
            // 去掉`查看`checkbox
            $footer->disableViewCheck();
            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();
            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}
