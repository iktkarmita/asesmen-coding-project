<?php

namespace Modules\Post\Services;

use InvalidArgumentException;
use Illuminate\Support\Facades\Validator;
use Modules\Post\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function store($data)
    {
        $validator = Validator::make($data, [
            'nama' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'persediaan' => 'required'

        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->postRepository->save($data);

        return $result;
    }
}
