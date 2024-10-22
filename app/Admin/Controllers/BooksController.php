<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Books;

class BooksController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'books';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Books());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('author', __('Author'));

        $grid->column('cover_image_url', __('Cover Image'))->image(url('/uploads/'), 100, 150);
      

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
        $show = new Show(Books::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
       
      

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Books());

        $form->text('title', __('title'));
        $form->text('author', __('Author'));      
        $form->text('isbn', __('ISBN'));      
        $form->text('publisher', __('Publisher'));      
        $form->text('publication_year', __('Publication Year'));      
        $form->text('edition', __('Edition'));      
        $form->text('category', __('Category'));      
        $form->number('num_pages', __('Number Pages'));      
        $form->text('cover_type', __('Cover Type'));      
        $form->text('language', __('Language'));      
        $form->number('total_copies', __('Total Copies'));      
        $form->number('available_copies', __('Available Copies'));      
        $form->text('status', __('Status'));      
        $form->text('condition_book', __('Condition Book'));      
        $form->textarea('summary', __('Summary'));      
        $form->text('tags', __('Tags'));      
        $form->text('price', __('price'));      
        $form->image('cover_image_url', __('Cover Image'));

        return $form;
    }
}
