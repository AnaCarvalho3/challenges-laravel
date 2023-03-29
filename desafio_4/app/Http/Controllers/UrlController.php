class UrlController extends Controller
{

     //listar as urls
     @return view

    public function index () {

     $urls = Url::get();
     public function index () {
     // Buscar os clientes no banco de dados

}}


public function show(int $id)
{
    $ = Url::find($id);
    return view('urls.show',[
        'Url' => $urls
    ]);
}


    public function create()
    {
        return view('urls.create');
    }


    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Url::create($dados);
        return redirect('/urls');
    }


    public function edit(int $id)
    {
        $ = Url::find($id);
        @@ public function edit(int $id)
            'url' => $url
        ];
    }



    public function update(int $id, Request $request)
    {
        $url = url::find($id);
        @@ public function update(int $id, Request $request)
        ];
        return redirect('/urls');
    }



    public function destroy(int $id)
    {
        $url = url::find($id);
        $url->delete();
        return redirect('/urls');
    }
}
