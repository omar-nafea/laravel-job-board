<div>
    <h1>Job Number 2</h1>

    <h4>my name is {{ $name }}</h4>
    @foreach ($jobs as $job)
        <div>
            {{$job['Title']}}: {{ $job['Salary'] }}
        </div>
    
    @endforeach
</div>
