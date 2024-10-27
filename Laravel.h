public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->boolean('completed')->default(false);
        $table->timestamps();
    });
}
use App\Models\Task;

public function index()
{
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
}

public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
    ]);

    Task::create($request->all());
    return redirect()->route('tasks.index');
}
