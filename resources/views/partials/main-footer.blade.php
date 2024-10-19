<footer>
    <ul>
        @foreach ($dcs as $item)
        <li>
            <a href="#">{{$item['label']}}</a>
        </li>
    @endforeach
    </ul>
    
    <ul>
        @foreach ($shops as $shop)
        <li>
            <a href="#">{{$shop['label']}}</a>
        </li>
        @endforeach
    </ul>
    
    <ul>
       @foreach ($sites as $site)
        <li>
            <a href="#">{{$site['label']}}</a>
        </li>
        @endforeach 
    </ul>
    
</footer>
