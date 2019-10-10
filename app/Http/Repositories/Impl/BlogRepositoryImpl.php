<?php


namespace App\Http\Repositories\Impl;


use App\Blog;
use App\Http\Repositories\BlogRepositories;
use App\Http\Repositories\Eloquent\EloquentRepository;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepositories
{
public function getModel()
{
    $model = Blog::class;
    return $model;
}
}
