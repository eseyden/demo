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
        <td>{{$comment->shipdate_expected}}</td>
    </tr>
    @endforeach            
    </tbody>
</table>