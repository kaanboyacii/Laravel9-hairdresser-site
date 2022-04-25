@foreach($children as $subcategory)
    <ul class="menu_mm">
        @if(count($subcategory->children))
            <li class="menu_mm">{{$subcategory->title}}</li>
            <ul class="menu_mm">
                @include('home.categorytree',[children => $subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryservices',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
        @endif
	</ul>
