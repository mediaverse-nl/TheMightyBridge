@if(!empty($main_category?->category))
    @include('site.partial.breadcrumb', [
        'main_category' => $main_category?->category,
        'isFirst' => false
    ])
@endif

@if($main_category)
    <li class="breadcrumb-item {{($isFirst ?? false) ? 'active' : ''}}" aria-current="page">
        @if(($isFirst ?? false))
            {{$main_category->name}}
        @else
            <a href="{{route('category', $main_category->category_id)}}">
                {{$main_category->name}}
            </a>
        @endif
    </li>
@endif
