    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('risks.index') }}">All products</a>
        </div>

    </div>

    <br>
    <br>


    <div class="mb-3">
        <h3>Name : {{ $risk->name }}</h3>
    </div>
    <div class="mb-3">
        <p><b>description : </b> {{ $risk->description }}</p>
    </div>
