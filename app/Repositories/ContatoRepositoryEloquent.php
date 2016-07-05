<?php

namespace h2o\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use h2o\Repositories\ContatoRepository;
use h2o\Models\Contato;
use h2o\Validators\ContatoValidator;

/**
 * Class ContatoRepositoryEloquent
 * @package namespace Excel\Repositories;
 */
class ContatoRepositoryEloquent extends BaseRepository implements ContatoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contato::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
