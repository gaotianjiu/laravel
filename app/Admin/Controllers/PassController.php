<?php

namespace App\Admin\Controllers;

use App\Models\Pass;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PassController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Pass';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pass);

        $grid->column('uid', __('Uid'));
        $grid->column('user_name', '用户名');
        $grid->column('email', '邮箱');
        $grid->column('mobile', '手机');
        $grid->column('state', '状态')->using([1 => '正常', 0 => '锁定']);
        $grid->column('reg_time', '注册时间');
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
        $show = new Show(Pass::findOrFail($id));

        $show->field('uid', __('Uid'));
        $show->field('user_name', __('User_name'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pass);
        $form->text('user_name', __('User_name'));
        return $form;
    }
}
