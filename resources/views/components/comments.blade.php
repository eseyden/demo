<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Comment</th>
            <th>Ship Date</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comments as $comment)
    <tr>
        <td>{{$comment->orderid}}</td>
        <td>{{$comment->comments}}</td>
        @if($comment->shipdate_expected->format('y') === '-1')
        <td>Unkown</td>
        @else
        <td>{{$comment->shipdate_expected->format('m/d/y')}}</td>
        @endif
    </tr>
    @endforeach            
    </tbody>
</table>