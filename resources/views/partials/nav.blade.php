<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href={{route('home')}}>Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('addmembre')}}>+++++++++</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('show','femme')}}>femmes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('show', 'homme')}}>hommes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('show', '15pers')}}>15 personnes</a>
        </li>
    </ul>
    </div>
</nav>