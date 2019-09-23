<div>
<ul class="nav nav-tabs nav-justified mb-4">
    <li class="nav-item"><a href="{{ route('top.index') }}" class="nav-link @if(Request::fullUrl() === route('top.index')) btn btn-primary @else btn btn-light @endif">新着作品</a></li>
    <li class="nav-item"><a href="{{ route('kinds.choto') }}" class="nav-link @if(Request::fullUrl() === route('kinds.choto')) btn btn-primary @else btn btn-light @endif">ちょくちょく回収型</a></li>
    <li class="nav-item"><a href="{{ route('kinds.saigo') }}" class="nav-link @if(Request::fullUrl() === route('kinds.saigo')) btn btn-primary @else btn btn-light @endif" >最後にドカン型</a></li>
    <li class="nav-item"><a href="{{ route('kinds.imifu') }}" class="nav-link @if(Request::fullUrl() === route('kinds.imifu')) btn btn-primary @else btn btn-light @endif">意味不明型</a></li>
</ul>
</div>