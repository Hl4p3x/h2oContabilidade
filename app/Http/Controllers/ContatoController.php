<?php

namespace h2o\Http\Controllers;

use h2o\Repositories\ContatoRepository;
use Illuminate\Http\Request;

use h2o\Http\Requests;
use h2o\Http\Controllers\Controller;

class ContatoController extends Controller
{
    /**
     * @var ContatoRepository
     */
    private $repository;

    public function __construct(ContatoRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contato = $this->repository->paginate(5);

        return view('admin.contato.index', compact('contato'));
    }

    public function home()
    {
        return view('home.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contato = $this->repository->find($id);

        return view('admin.contato.show', compact('contato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.contato.index');
    }
}
